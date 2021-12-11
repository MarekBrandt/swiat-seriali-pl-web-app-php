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

            
            <?php if($logged == 'yes')
                {
                    echo '<h1 id="przywitanie">Witaj '.$_SESSION['username'].'</h1>';
                }
                else
                {
                    echo '<h1 id="przywitanie">Witaj użytkowniku</h1>';
                }
            ?>

                <h1 id="opisostatniododane">Seriale ostatnio dodane do bloga</h1>
                <span style="text-align: center;"><a id="idzdopolecanych" href="#polecane">Przejdź do polecanych seriali</a></span>
                <a href="lucyfer">
                    <div class="ostatniododane">
                        <div class="img">
                            <img src="static/img/lucyfer.webp" alt="Lucyfer"/>
                        </div>
                        <div class="opis">
                            <span class="tutul">"Lucyfer"</span><br/> Dodano: 24.10.2020
                        </div>
                    </div>
                </a> 
                <a href="wiking"><div class="ostatniododane">
                    <div class="img"><img src="static/img/wiking.jpg" alt="Wikingowie"/></div><div class="opis"><span class="tutul">"Wikingowie"</span><br/> Dodano: 12.09.2020</div>
                </div></a> 
                <a href="sherlock"><div class="ostatniododane">   
                    <div class="img"><img src="static/img/sherlock.jpg" alt="Sherlock"/></div><div class="opis"><span class="tutul">"Sherlock"</span> <br/>Dodano: 8.08.2020</div>
                </div></a> 
                <a href="bcs"><div class="ostatniododane">
                    <div class="img"><img src="static/img/bcs.jpg" alt="Better Call Saul"/></div><div class="opis"><span class="tutul">"Better call Saul"</span> <br/>Dodano: 1.08.2020</div>
                </div></a> 
                    <div style="clear:both;"></div>

                    <h1 id="polecane">Polecenia</h1>
                <table class="big">
                    <tr>
                        <th>Bardzo dobre seriale</th>
                        <th>Dobre seriale</th>
                        <th>Seriale, które niedługo pojawią się na blogu</th>
                        <th>Seriale, które mam w planach obejrzeć</th>
                    </tr>
                    <tr>
                        <td><a href="lucyfer">Lucyfer</a></td>
                        <td><a href="st">Stranger Things</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Dark-2017-771383" target="_blank">Dark</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Gra+o+tron-2011-476848" target="_blank">Gra o tron</a></td>
                    </tr>
                    <tr>
                        <td><a href="bb">Breaking Bad</a></td>
                        <td><a href="sherlock">Sherlock</a></td>
                        <td><a href="https://www.filmweb.pl/serial/W+garniturach-2011-585726" target="_blank">Suits</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Jak+sprzedawa%C4%87+dragi+w+sieci+%28szybko%29-2019-828868" target="_blank">Jak sprzedawać narkotyki w sieci (szybko)</a></td>
                    </tr>
                    <tr>
                        <td><a href="bcs">Better call Saul</a></td>
                        <td><a href="wiking">Wikingowie</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Peaky+Blinders-2013-680981" target="_blank">Peaky Blinders</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Wied%C5%BAmin-2019-724464" target="_blank">Wiedźmin</a></td>
                    </tr>
                </table>

                <table class="small">
                    <tr>
                        <th>Bardzo dobre seriale</th>
                    </tr>
                    <tr>
                        <td><a href="lucyfer">Lucyfer</a></td>   
                    </tr>
                    <tr>
                        <td><a href="bb">Breaking Bad</a></td>   
                    </tr>
                    <tr>
                        <td><a href="bcs">Better call Saul</a></td>
                    </tr>
                    <tr><th>Dobre seriale</th></tr>
                    <tr><td><a href="st">Stranger Things</a></td></tr>
                    <tr><td><a href="sherlock">Sherlock</a></td></tr>
                    <tr><td><a href="wiking">Wikingowie</a></td></tr>

                    <tr><th>Seriale, które niedługo pojawią się na blogu</th></tr>
                    <tr><td><a href="https://www.filmweb.pl/serial/Dark-2017-771383" target="_blank">Dark</a></td></tr>
                    <tr><td><a href="https://www.filmweb.pl/serial/W+garniturach-2011-585726" target="_blank">Suits</a></td></tr>
                    <tr><td><a href="https://www.filmweb.pl/serial/Peaky+Blinders-2013-680981" target="_blank">Peaky Blinders</a></td></tr>

                    <tr><th>Seriale, które mam w planach obejrzeć</th></tr>
                    <tr><td><a href="https://www.filmweb.pl/serial/Gra+o+tron-2011-476848" target="_blank">Gra o tron</a></td></tr>
                    <tr><td><a href="https://www.filmweb.pl/serial/Jak+sprzedawa%C4%87+dragi+w+sieci+%28szybko%29-2019-828868" target="_blank">Jak sprzedawać narkotyki w sieci (szybko)</a></td></tr>
                    <tr><td><a href="https://www.filmweb.pl/serial/Wied%C5%BAmin-2019-724464" target="_blank">Wiedźmin</a></td></tr>
                </table>
            </div>
        </article>
        
    </main> 

    <?php
    dispatch($routing, '/footer')
    ?>
</div>
</body>
</html>