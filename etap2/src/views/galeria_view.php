<!DOCTYPE html>
<html lang="pl">
<head>
<?php include_once 'partial/head_view.php' ?> 
</head>
<body>
<div class="wrapper">
    
<?php
    include 'partial/nav_view.php'
?>
<main>
        <article>
            <div class="content">
                <h3>Galeria</h3>
                <form method="post">
                <div class="galery">
                    <?php foreach ($images as $image):?>
                        <div class="galeryelementthumbnail">
                            <input type="checkbox" name="<?=$image['_id']?>"
                            <?php
                            $page = $_SESSION['page'];
                            if(isset($_SESSION['checked'.$page]))
                            {
                                $id = $image['_id'].'';
                                if(array_key_exists($id, $_SESSION['checked'.$page]))
                                {
                                    echo 'checked';
                                }
                            }
                            ?>
                            /><br/>
                            <a href="images/<?= $image['name_watermarked']?>" target="_blank">
                                <img src="images/<?= $image['name_thumbnail']?>" 
                                alt="<?= $image['watermark']?>"/>
                            </a>
                            <br/>
                            Tytuł: <span class="phototitle"><?= $image['title']?></span><br/>
                            Autor: <span class="photoauthor"><?= $image['author']?></span><br/>
                            <?php if(isset($image['private']) 
                            && $logged == 'yes' 
                            && $image['username']==$_SESSION['username'])
                                echo '<span class="phototitle">PRYWATNE</span>';
                            ?>  
                        </div>
                    <?php endforeach ?>
                    <div style="clear: both"></div>
                    <br/><br/>
                    <input type="submit" value="Zapamiętaj wybrane"/><br/><br/>
                </form>

                
                    <div class="pagesbuttons">
                    <a href="galeria?page=<?= (($page != 1)? ($page - 1): $page) ?>">
                            <div class="pagebutton">
                                <<
                            </div>
                        </a>
                    <?php for($i = 1; $i <= $no_of_pages; $i++): ?>
                        <a href="galeria?page=<?= $i ?>">
                            <div class="pagebutton">
                                <?= ($page == $i)? ('|'.$i.'|') : $i ?>
                            </div>
                        </a>
                    <?php endfor ?>
                    <a href="galeria?page=<?= (($page != $no_of_pages)? ($page + 1): $page) ?>">
                            <div class="pagebutton">
                                >>
                            </div>
                        </a>
                    <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        </article>
        
    </main> 

<?php
    dispatch($routing, '/footer')
    ?>
</div>
</body>
</html>