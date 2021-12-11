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
                            <div class="title">"Stranger Things"</div>
                            <div >Podczas powrotu do domu znika dwunastoletni Will Byers. Zaginięcie chłopca jest początkiem dziwnych i niebezpiecznych wydarzeń trapiących prowincjonalne miasteczko.</div>
                            <div class="seasons">Sezonów: 3</div>
                            <div class="details">
                                twórcy: 
                                Matt Duffer, Ross Duffer<br/>
                                gatunek: 
                                Dramat, Horror, Sci-Fi<br/>
                                produkcja: 
                                USA<br/>
                            </div>
                        </div>
                        <div class="mainjpg">
                            <a href="static/img/st.jpg" target="_blank"><img src="static/img/st.jpg" alt="Stranger things"/></a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </header>
                <article>
                    <div class="opisserialu">
                        <p>
                            Serial "Stranger Things" pomaga odnaleźć w sobie dziecko na nowo. Obserwowanie perypetii grupy nastolatków sprawia czystą przyjemność. 
                            Ale uważajcie, pewne momenty w tym serialu są w stanie zmrozić krew w żyłach, nawet u najbardziej zagorzałych fanów horrorów.
                        </p>
                        <p class="werdykt">Moja ocena: 10/10</p>
                    </div>
                   
                    <div class="links">
                        <a href="https://www.filmweb.pl/serial/Stranger+Things-2016-750359" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com/title/tt4574334/?ref_=nv_sr_srsg_0" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
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