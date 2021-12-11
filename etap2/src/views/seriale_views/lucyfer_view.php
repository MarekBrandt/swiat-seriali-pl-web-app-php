<!DOCTYPE html>
<html lang="pl">
<head>
<?php dispatch($routing, '/head') ?> 
</head>
<body onload="zczytajTytul()">
<div class="wrapper">
<?php
    dispatch($routing, '/nav')
?>  
    <main>
        <article>
            <div class="content">
                <header>
                    <div class="nagserialu">
                        <div class="about">
                            <div class="title">"Lucyfer"</div>
                            <div >Nieszczęśliwy i znudzony swoim bytem Lucyfer Morningstar porzuca funkcję Władcy Piekieł, po czym udaje się do Los Angeles, gdzie zostaje właścicielem luksusowego klubu nocnego.</div>
                            <div class="seasons">Sezonów: 5</div>
                            <div class="details">
                                twórca: 
                                Tom Kapinos<br/>
                                gatunek: Fantasy, Kryminał<br/>
                                produkcja: USA<br/>
                            </div>
                        </div>
                        <div class="mainjpg">
                            <a href="static/img/lucyfer.webp" target="_blank"><img src="static/img/lucyfer.webp" alt="Lucyfer"/></a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </header>
                <article>
                    <div class="opisserialu">
                        <p>
                            UWAGA! Serial niezwykle wciąga. <br/>
                            Oglądanie serialu "Lucyfer", daje niesamowicie dużo frajdy.
                            Może rzecz w tym, że głównym bohaterem jest charyzmatyczny, satyryczny i prawdomówny diabeł.
                            Nawet jeśli jesteś wierzący, to będziesz się dobrze bawił, bo serial nie próbuje wyśmiewać chrześcijaństa.
                            Zdecydowanie polecam. Chodź radzę zastanowić się, czy masz w danym momecie sporo czasu, bo prawdopodobnie na 1 odcinku się nie skończy.
                        </p>    
                        <p class="werdykt">Moja ocena: 10/10</p>
                    </div>
                   
                    <div class="links">
                        <a href="https://www.filmweb.pl/serial/Lucyfer-2016-742520" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com/title/tt4052886/?ref_=nv_sr_srsg_0" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
                        <div style="clear: both;"></div>
                    </div>
                </article>
            </div>
        </article>
        
    </main> 

    <?php
    dispatch($routing, '/footer')
    ?>
</div>
</body>
</html>