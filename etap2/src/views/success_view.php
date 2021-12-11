<!DOCTYPE html>
<html lang="pl">
<head>
<?php dispatch($routing, '/head') ?> 
</head>
<body onload="storageLokalne()">
<div class="wrapper">
    
<?php
    dispatch($routing, '/nav')
?>

    <main>
        <article>
            <div class="content">
                <?php 
                if($logged == 'yes')
                {
                    echo '<br/><br/><br/><br/><br/><br/><br/><br/>
                    <h1>Zalogowano pomyślnie
                    <br/>Witaj '.$_SESSION['username'].'</h1>
                    <br/><br/><br/><br/>';
                }
                else
                {
                    echo '<br/><br/><br/><br/><br/><br/><br/><br/>
                    <h1>Zarejestrowano pomyślnie</h1>
                    <br/><br/><br/><br/><br/><br/>';
                }
                ?>
            </div>
        </article>
        
    </main> 

    <?php
    dispatch($routing, '/footer')
    ?>
</div>
</body>
</html>