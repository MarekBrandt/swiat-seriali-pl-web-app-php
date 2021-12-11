<?php

const MAX_SIZE_IMG = 1024*1024;
const THUMBNAIL_WIDTH = 200;
const THUMBNAIL_HEIGHT = 125;
const NUMBER_OF_IMAGES = 5;

use MongoDB\BSON\ObjectID;
use MongoDB\Operation\FindAndModify;

function get_db()
{
    $mongo = new MongoDB\Client(
        "mongodb://localhost:27017/wai",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
        ]);

    $db = $mongo->wai;

    return $db;
}

function addImageToDB($element, $watermark, $rozszerzenie, $author, $title)
{
    $db = get_db();

    $photo = [
        'author' => $author,
        'title' => $title,
        'rozszerzenie' => $rozszerzenie,
        'name' => $element['name'].$rozszerzenie,
        'name_watermarked' => $element['name'].'_watermarked'.$rozszerzenie,
        'name_thumbnail' => $element['name'].'_thumbnail'.$rozszerzenie,
        'watermark' => $watermark,
    ];

    $db->galery->insertOne($photo);
}

function addPrivateImageToDB($element, $watermark, $rozszerzenie, $author, $title, $username)
{
    $db = get_db();

    $photo = [
        'author' => $author,
        'title' => $title,
        'rozszerzenie' => $rozszerzenie,
        'name' => $element['name'].$rozszerzenie,
        'name_watermarked' => $element['name'].'_watermarked'.$rozszerzenie,
        'name_thumbnail' => $element['name'].'_thumbnail'.$rozszerzenie,
        'watermark' => $watermark,
        'private' => 'yes',
        'username' => $username,
    ];

    $db->galery->insertOne($photo);
}

function paging($page, $model)
{
    $db = get_db();

    if($model['logged']=='yes'){
        $query = [
            '$or' => [
            ['private' => 'yes',
             'username' => $_SESSION['username']],
             ['private' => null],
            ]
            ];
    }
    else
    {
        $query = [
            'private' => null,
            ];
    }
    

    $opts = [
        'skip' =>($page - 1) * NUMBER_OF_IMAGES,
        'limit' => NUMBER_OF_IMAGES,
    ];

    $images = $db -> galery -> find($query, $opts);
    //find($query, $opts);

    return $images;
}

function find_all_images()
{
    $db = get_db();

    $all = $db -> galery -> find();

    return $all;
}

function find_allowed_images($model)
{
    $all_images = find_all_images();
    $logged = $model['logged'];

    $i = 0;

    foreach($all_images as $image)
    {
        if((isset($image['private'])== true 
            && $logged == 'yes' 
            && $image['username']==$_SESSION['username'])
            || (isset($image['private'])==false))
            {
                $allowedImages[$i] = $image;
                $i++;
            }
    }

    return $allowedImages;
}

function find_users($login)
{
    $db = get_db();

    return $db -> uzytkownicy -> findOne(['login' => $login,]);
}

function login($login, $haslo, &$model)
{

    $user = find_users($login);
    if($user != null && password_verify($haslo, $user['password'])!=0)
    {
        session_regenerate_id();
        $_SESSION['user_id'] = $user['_id'];
        $_SESSION['username'] = $user['login'];
        return 'redirect:success';
    }
    else
    {
        $model['komunikat'] = 'Niepoprawny login lub hasło';
        return 'logowanie_view';
    }
}

function logout()
{
    session_destroy();
}

function add_user($login, $email, $haslo, $imie, $nazwisko)
{
    $db = get_db();

    $hash = password_hash($haslo, PASSWORD_DEFAULT);

    $user = [
        'login' => $login,
        'password' => $hash,
        'name' => $imie,
        'surname' => $nazwisko,
        'email' => $email,
    ];

    $db->uzytkownicy->insertOne($user);
}

function add_watermark($photo, $watermark, $rozszerzenie)
{
    if($rozszerzenie == '.png')
    {
        $source = imagecreatefrompng('images/'.$photo['name'].$rozszerzenie);
    }
    else
    {
        $source = imagecreatefromjpeg('images/'.$photo['name'].$rozszerzenie);
    }

        $source_height = 20;
        $source_width = imagesx($source);

            
        $im = imagecreate($source_width, $source_height);

        imagecolorallocate($im, 255, 255, 255);
        $textcolor = imagecolorallocate($im, 0, 0, 255);

        imagestring($im, 5, 2, 1, $watermark, $textcolor);

        imagecopymerge($source, $im, 0, 0, 0, 0, $source_width, $source_height, 60);

        if($rozszerzenie == '.png')
        {
            imagepng($source, 'images/'.$photo['name'].'_watermarked.png');
        }
        else
        {
            imagejpeg($source, 'images/'.$photo['name'].'_watermarked.jpg');
        }

        imagedestroy($im);
        imagedestroy($source);
}

function make_thumbnail($photo, $rozszerzenie)
{
    if($rozszerzenie == '.png')
    {
        $source = imagecreatefrompng('images/'.$photo['name'].$rozszerzenie);
    }
    else
    {
        $source = imagecreatefromjpeg('images/'.$photo['name'].$rozszerzenie);
    }

    $width = imagesx($source);
    $height = imagesy($source);

    $thumbnail = imagecreatetruecolor(THUMBNAIL_WIDTH, THUMBNAIL_HEIGHT);

    imagecopyresampled($thumbnail, $source, 0, 0, 0, 0, THUMBNAIL_WIDTH, THUMBNAIL_HEIGHT, $width, $height);

        if($rozszerzenie == '.png')
        {
            imagepng($thumbnail, 'images/'.$photo['name'].'_thumbnail.png');
        }
        else
        {
            imagejpeg($thumbnail, 'images/'.$photo['name'].'_thumbnail.jpg');
        }
    
        imagedestroy($thumbnail);
        imagedestroy($source);
}

function check_format($file_name, &$rozszerzenie)
{
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime_type = finfo_file($finfo, $file_name);

        if ($mime_type === 'image/png') 
        {
            $rozszerzenie = '.png';
        }  
        else if ($mime_type === 'image/jpeg') 
        {
            $rozszerzenie = '.jpg';
        }  
}

function check_if_file_is_valid($rozmiar, $photo, &$dodano, &$model, $rozszerzenie, $watermark, $author, $title, $access)
{
    //zapisuje na dysk jesli wszystko gra
    if($rozmiar <= MAX_SIZE_IMG && $rozszerzenie == true)
        {
            $upload_dir = 'images/';
            $file_name = basename($photo['name'].$rozszerzenie);
            $target = $upload_dir . $file_name;
            $tmp_path = $photo['tmp_name'];
            if(move_uploaded_file($tmp_path, $target)){
                $dodano = true;
            }

            $model['komunikat'] = 'Dodano pomyślnie';

            if($model['logged']=='no')
            {
                addImageToDB($photo, $watermark, $rozszerzenie, $author, $title);
            }
            else
            {
                if($access == 'private')
                {
                    addPrivateImageToDB($photo, $watermark, $rozszerzenie, $author, $title, $_SESSION['username']);
                }
                else
                {
                    addImageToDB($photo, $watermark, $rozszerzenie, $author, $title);
                }
            }
            
        }
        if($rozmiar > MAX_SIZE_IMG)
        {
            $model['komunikat'] = 'Za duży rozmiar pliku! Max 1MB  ';
        }
        if($rozszerzenie == false)
        {
            $model['komunikat'] = $model['komunikat'].'Niepoprawny format pliku. Dozwolone JPG i PNG';
        }
}



