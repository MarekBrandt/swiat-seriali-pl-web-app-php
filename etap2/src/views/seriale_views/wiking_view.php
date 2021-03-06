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
        
            <div class="content">
                <header>
                    <div class="nagserialu">
                        <div class="about">
                            <div class="title">"Wikingowie"</div>
                            <div >Młody wiking, Ragnar Lothbrok, pragnie, by wyprawy łupieżcze odbywały się nie tylko na wschód, ale także w kierunku przeciwnym.</div>
                            <div class="seasons">Sezonów: 6</div>
                            <div class="details">
                                twórca: 
                                Michael Hirst<br/>
                                gatunek: 
                                Dramat historyczny<br/>
                                produkcja: 
                                Irlandia / Kanada<br/>
                            </div>
                        </div>
                        <div class="mainjpg">
                            <a href="static/img/wiking.jpg" target="_blank"><img src="static/img/wiking.jpg" alt="Better call Saul"/></a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </header>
                <article>
                    <div class="opisserialu">
                        <p>
                            Pomimo tego, że serial jest przedstawicielem gatunku dramatów historycznych, to nie obawiajcie się że będzie to nudna lekcja historii.
                            Historia Ragnara jest pasjonująca. Twórca zadbał o to, by widz zagłębił się w fabułe i razem z bohaterami przeżywał radości, smutki, 
                            podboje i zdrady. Zdecydowanie warte obejrzenie.
                        </p>
                        <p class="werdykt">Moja ocena: 9/10</p>
                    </div>
                   
                    <div class="links">
                        <a href="https://www.filmweb.pl/serial/Wikingowie-2013-659055" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com/title/tt2306299/?ref_=nv_sr_srsg_0" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
                        <div style="clear: both;"></div>
                    </div>
                </article>
            </div>
        
        
    </main> 

    <?php
    dispatch($routing, '/footer')
    ?>
</div>
</body>
</html>