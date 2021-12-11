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
                            <div class="title">"Sherlock"</div>
                            <div >John Watson jest lekarzem wojskowym, który niedawno wrócił z wojny. Gdy poznaje genialnego detektywa Sherlocka Holmesa, zaczyna pomagać mu w rozwiązywaniu zagadek kryminalnych.</div>
                            <div class="seasons">Sezonów: 4</div>
                            <div class="details">
                                twórcy: 
                                Steven Moffat, Mark Gatiss<br/>
                                gatunek: 
                                Dramat, Kryminał<br/>
                                produkcja: 
                                Wielka Brytania<br/>
                            </div>
                        </div>
                        <div class="mainjpg">
                            <a href="static/img/sherlock.jpg" target="_blank"><img src="static/img/sherlock.jpg" alt="Sherlock"/></a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </header>
                <article>
                    <div class="opisserialu">
                        <p>
                            Serial który muszą obejrzeć fani powieści detektywistycznych. Do ekranu przykuwa zawiłość zagadek, jak i sposób prezentacji
                            rozwiązań. Nie do opisania jest radość z samodzielnego wpadnięcia na trop, szybciej niż główny bohater. 
                            Mroczny Londyn tylko dodaje kolorytu.
                        </p>
                        <p class="werdykt">Moja ocena: 8/10</p>
                    </div>
                   
                    <div class="links">
                        <a href="https://www.filmweb.pl/serial/Sherlock-2010-528992" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com/title/tt1475582/?ref_=nv_sr_srsg_0" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
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