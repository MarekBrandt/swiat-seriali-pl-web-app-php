<?php
require_once 'business.php';

function is_logged()
{
    if(isset($_SESSION['username']))
    {
        return 'yes';
    }
    return 'no';
}

function logowanie(&$model)
{
    $model['komunikat'] = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        return login($login, $haslo, $model);
    }

    return 'logowanie_view';
}

function wylogowanie(&$model)
{
    logout();

    return 'redirect:index';
}

function rejestracja(&$model)
{
    $model['komunikat'] = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $login = $_POST['login'];
        $email = $_POST['mail'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $haslo = $_POST['haslo'];
        $haslorep = $_POST['haslorep'];

        if(find_users($login)!=null)
        {
            $model['komunikat'] = 'Wybrany login jest już zajęty!';
        }
        else if($haslo != $haslorep)
        {
            $model['komunikat'] = 'Hasła nie są takie same';
        }
        else
        {
            add_user($login, $email, $haslo, $imie, $nazwisko);
            return 'redirect:success';
        }
    }

    return 'rejestracja_view';
}

function index(&$model)
{
    return 'index_view';
}

function success(&$model)
{
    return 'success_view';
}

function dramat(&$model)
{
    return 'kategorie_views/dramat_view';
}

function dramhist(&$model)
{
    return 'kategorie_views/dramhist_view';
}

function fantasy(&$model)
{
    return 'kategorie_views/fantasy_view';
}

function horror(&$model)
{
    return 'kategorie_views/horror_view';
}

function info(&$model)
{
    return 'info_view';
}

function upload(&$model)
{
    $model['dodawanejpg'] = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $photo = $_FILES['zdjecie'];
        $watermark = $_POST['watermark'];
        $title = strtoupper($_POST['title']);
        $author = $_POST['author'];
        $file_name = $_FILES['zdjecie']['tmp_name'];
        if($model['logged']== 'yes')
        {
            $access = $_POST['access'];
        }
        else
        {
            $access = null;
        }

        $model['dodawanejpg'] = $photo['name'];

        $photo['name'] = uniqid();
        $rozszerzenie = '';

        $dodano = false;
        $model['komunikat'] = '';

        $rozmiar = $photo['size'];

        check_format($file_name, $rozszerzenie);

        //sprawdza poprawnosc pliku, jesli ok dodaje go na serwer
        check_if_file_is_valid($rozmiar, $photo, $dodano, $model, $rozszerzenie, $watermark, $author, $title, $access);

        //zrob znak wodny
        if($dodano == true)
        {
            add_watermark($photo, $watermark, $rozszerzenie);
            make_thumbnail($photo, $rozszerzenie);
        }
    }

    return 'upload_view';
}

function galeria(&$model)
{
    
    $allowedImages = find_allowed_images($model);
    $model['allowedImages'] = $allowedImages;
    $model['no_of_pages'] = ceil(count($allowedImages)/NUMBER_OF_IMAGES);

    // if(!isset($_SESSION['page'])){
    //     $model['images'] = paging(1);
    //     $_SESSION['page'] = 1;
    // }
    if(!isset($_GET['page'])){
        $model['images'] = paging(1, $model);
        $_SESSION['page'] = 1;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['page'])) {
        $page = $_GET['page'];

        $model['images'] = paging($page, $model);
        $_SESSION['page'] = $page;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $checked = $_POST;
        $page = $_SESSION['page'];


        if(isset($_SESSION['checked'.$page])){
            unset($_SESSION['checked'.$page]);
        }

        $_SESSION['checked'.$page] = $checked;

        return 'redirect:galeria';
    }


    return 'galeria_view';
}



function kategorie(&$model)
{
    return 'kategorie_view';
}

function komedia(&$model)
{
    return 'kategorie_views/komedia_view';
}

function kryminal(&$model)
{
    return 'kategorie_views/kryminal_view';
}

function scifi(&$model)
{
    return 'kategorie_views/scifi_view';
}

function seriale(&$model)
{
    return 'seriale_view';
}

function bb(&$model)
{
    return 'seriale_views/bb_view';
}

function bcs(&$model)
{
    return 'seriale_views/bcs_view';
}

function lucyfer(&$model)
{
    return 'seriale_views/lucyfer_view';
}

function sherlock(&$model)
{
    return 'seriale_views/sherlock_view';
}

function st(&$model)
{
    return 'seriale_views/st_view';
}

function wiking(&$model)
{
    return 'seriale_views/wiking_view';
}

function nav(&$model)
{
    return 'partial/nav_view';
}

function head(&$model)
{
    return 'partial/head_view';
}

function footer(&$model)
{
    return 'partial/footer_view';
}
