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
                            <div class="title">"Better call Saul"</div>
                            <div >Pechowy prawnik robi wszystko, by zaistnieć na sądowej scenie w Albuquerque.</div>
                            <div class="seasons">Sezonów: 5</div>
                            <div class="details">
                                twórcy: Vince Gilligan, Peter Gould<br/>
                                gatunek: Dramat, Komedia, Kryminał<br/>
                                produkcja: USA<br/>
                            </div>
                        </div>
                        <div class="mainjpg">
                            <a href="static/img/bcs.jpg" target="_blank"><img src="static/img/bcs.jpg" alt="Better call Saul"/></a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </header>
                <article>
                    <div class="opisserialu">
                        <p>
                            Serial "Better call Saul" jest prequelem serialu "Breaking Bad". Jeśli jesteś fanem tego drugiego, to z czystym sercem mogę polecić ci ten serial. Mimo tego, jeżeli serialu "Breaking Bad" nie znasz, nic nie stoi na przeszkodzie, by swoją przygodę rozpocząć właśnie od Saula. Serial rozgrywa się w okolicach Albuquerque. Niesamowite kadry przykuwają oko i pozostają w pamięci na długo. Opowiada o ciężkiej drodze, którą Saul Goodman musi przejść, by zostać prawnikiem. Połączenie komedii i dramatu, znakomicie się w tym przypadku udało.
                        </p>
                        <p class="werdykt">Moja ocena: 9/10</p>
                    </div>
                   
                    <div class="links">
                        <a href="https://www.filmweb.pl/serial/Zadzwo%C5%84+do+Saula-2015-697645" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com/title/tt3032476/?ref_=nv_sr_srsg_0" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
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