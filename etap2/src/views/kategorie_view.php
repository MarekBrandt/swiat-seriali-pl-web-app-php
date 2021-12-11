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
                <div class="kategorie">
                    <a href="dramat"><div class="katelem">Dramat</div></a>
                    <a href="komedia"><div class="katelem">Komedia</div></a>
                    <a href="kryminal"><div class="katelem">Kryminał</div></a>
                    <a href="dramhist"><div class="katelem">Dramat historyczny</div></a>
                    <a href="fantasy"><div class="katelem">Fantasy</div></a>
                    <a href="horror"><div class="katelem">Horror</div></a>
                    <a href="scifi"><div class="katelem">Sci-Fi</div></a>
                    <div style="clear: both;"></div>
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