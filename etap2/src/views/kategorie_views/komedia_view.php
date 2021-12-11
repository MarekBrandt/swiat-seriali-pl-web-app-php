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
                <h1>Seriale z kategorii KOMEDIA, których moja opinia już znajduje się na blogu</h1>
                <div class="galery">
                    <div class="galeryelement"><a href="bcs"><img src="static/img/bcs.jpg" alt="Better Call Saul"/></a></div>
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