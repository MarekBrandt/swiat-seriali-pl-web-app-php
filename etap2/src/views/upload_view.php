<!DOCTYPE html>
<html lang="pl">
<head>
<?php dispatch($routing, '/head') ?> 
</head>
<body>
<div class="wrapper">
    
<?php
    dispatch($routing, '/nav')
?>
<main>
        <article>
            <div class="content">
                <div class="upload">
                    <h3>Dodaj własne zdjęcie!</h3>
                    <form method="post" enctype="multipart/form-data">
                        <input type="file" name="zdjecie" required/><br/><br/>
                        <input type="text" name="title" placeholder="Tytuł" required/><br/><br/>
                        <input type="text" name="author" placeholder="Autor" 
                        <?php
                            if($logged == 'yes')
                            {
                                echo 'value='.$_SESSION['username'];
                            }
                        ?>
                        required/><br/><br/>
                        <input type="text" name="watermark" placeholder="Znak wodny" required/><br/><br/>
                        <?php
                        if($logged == 'yes')
                        {
                            echo '<input type="radio" name="access" value="private">Prywatne zdjęcie<br/><br/>
                            <input type="radio" name="access" value="public" checked>Publiczne zdjęcie<br/><br/>';
                        }
                        ?>
                        <input type="submit" value="Wyślij"/>
                    </form>
                    <?php if($dodawanejpg==true)
                        echo 'Plik: '.$dodawanejpg.'.   '.$komunikat
                    ?>
                    <br/><br/><br/>
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