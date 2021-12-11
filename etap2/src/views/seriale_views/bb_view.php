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
                            <div class="title">"Breaking Bad"</div>
                            <div >Gdy nauczyciel chemii dowiaduje się, że ma raka, postanawia rozpocząć produkcję metamfetaminy, by finansowo zabezpieczyć swoją rodzinę.</div>
                            <div class="seasons">Sezonów: 5</div>
                            <div class="details">
                                twórca: 
                                Vince Gilligan<br/>
                                gatunek: 
                                Dramat, Kryminał<br/>
                                produkcja: 
                                USA<br/>
                            </div>
                        </div>
                        <div class="mainjpg">
                            <a href="static/img/bb.jpg" target="_blank"><img src="static/img/bb.jpg" alt="Breaking Bad"/></a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </header>
                <article>
                    <div class="opisserialu">
                        <p>
                            Jeden z najbardziej znanych i cenionych seriali na świecie. 
                            Opowiada historię Waltera White'a, który zmienia się nie do poznania gdy otrzymuję diagnozę od lekarza.
                            Serial może być materiałem do rozmowy na wiele ciekawych tematów. Jeśli jesteś fanem seriali, koniecznie musisz znać ten.
                            Warto zaznaczyć, że powstał prequel o tytule "Better call Saul", który również wnosi bardzo wiele do świata z "Breaking Bad".
                        </p>
                        <p class="werdykt">Moja ocena: 10/10</p>
                    </div>
                   
                    <div class="links">
                        <a href="https://www.filmweb.pl/serial/Breaking+Bad-2008-430668" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com/title/tt0903747/?ref_=nv_sr_srsg_1" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
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