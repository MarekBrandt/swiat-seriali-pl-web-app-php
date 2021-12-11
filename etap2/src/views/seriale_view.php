<!DOCTYPE html>
<html lang="pl">
<head>
<?php dispatch($routing, '/head') ?> 
</head>
<body onload="storageSesji()">
<div class="wrapper">
<?php
    dispatch($routing, '/nav')
?>  
    <main>
        <article>
            <div class="content">
                <h1 id="ostatnioPrzegladane">Poprzednio w tej sesji czytałeś o: <span id="ktorySerial"></span></h1>
                <h1>Seriale, których moja opinia już znajduje się na blogu</h1>
                <div class="galery">
                    <div class="galeryelement"><a href="bcs"><img src="static/img/bcs.jpg" alt="Better Call Saul"/></a></div>
                    <div class="galeryelement"><a href="lucyfer"><img src="static/img/lucyfer.webp" alt="Lucyfer"/></a></div>
                    <div class="galeryelement"><a href="sherlock"><img src="static/img/sherlock.jpg" alt="Sherlock"/></a></div>
                    <div class="galeryelement"><a href="wiking"><img src="static/img/wiking.jpg" alt="Wikingowie"/></a></div>
                    <div class="galeryelement"><a href="st"><img src="static/img/st.jpg" alt="Stranger Things"/></a></div>
                    <div class="galeryelement"><a href="bb"><img src="static/img/bb.jpg" alt="Breaking Bad"/></a></div>
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