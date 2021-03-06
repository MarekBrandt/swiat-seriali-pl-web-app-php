<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Świat seriali</title>
    <link rel="stylesheet" href="main.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="seriale, filmy, netflix, recenzja">
    <meta name="description" content="Blog w tematyce seriali wartych obejrzenia.">
    <meta name="author" content="Marek Brandt">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="jquery.scrollTo.min.js" defer></script>
    <script src="scripts.js" defer></script>
</head>
<body onload="skryptySa(); storageLokalne(); aktualnyKontrast()">
<div class="wrapper">
    <header>
        <div class="logo">
            <a href="index.html">
                <div class="logosvg"><svg width="50" height="50">
                    <circle cx="25" cy="25" r="23" stroke="black" stroke-width="4" fill="#ce2503" />
                    <circle cx="25" cy="25" r="22" stroke="#7e1702" stroke-width="5" fill="#ce2503" />
                  </svg></div>
                <span class="logoswiat">świat</span>seriali
                <div style="clear:both;"></div>
            </a>
        </div>
            <button type="button" id="przyciskJS" onclick="zmienKontrast()">Inny kolor tła</button>
            <span id="komunikat">Uwaga, bez JavaScript niektóre funkcjonalności strony zostaną utracone</span>
        <nav>
            <ul>
                <li><a href="seriale.html">Seriale</a></li>
                <li><a href="kategorie.html">Kategorie</a>
                    <ol>
                        <li><a href="dramat.html">Dramat</a></li>
                        <li><a href="komedia.html">Komedia</a></li>
                        <li><a href="kryminal.html">Kryminał</a></li>
                        <li><a href="dramhist.html">Dramat historyczny</a></li>
                        <li><a href="fantasy.html">Fantasy</a></li>
                        <li><a href="horror.html">Horror</a></li>
                        <li><a href="scifi.html">Sci-Fi</a></li>
                    </ol>
                </li>
                <li><a href="info.html">O blogu</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </nav>
    </header>  
    <main>
        <article>
            <?php
            echo "twojstraypijany";
            ?>
            <div class="content">
                <h1 id="przywitanie">Witaj <span id="username"></span>!</h1>
                <h1 id="opisostatniododane">Seriale ostatnio dodane do bloga</h1>
                <span style="text-align: center;"><a id="idzdopolecanych" href="#polecane">Przejdź do polecanych seriali</a></span>
                <a href="lucyfer.html">
                    <div class="ostatniododane">
                        <div class="img">
                            <img src="img/lucyfer.webp" alt="Lucyfer"/>
                        </div>
                        <div class="opis">
                            <span class="tutul">"Lucyfer"</span><br/> Dodano: 24.10.2020
                        </div>
                    </div>
                </a> 
                <a href="wiking.html"><div class="ostatniododane">
                    <div class="img"><img src="img/wiking.jpg" alt="Wikingowie"/></div><div class="opis"><span class="tutul">"Wikingowie"</span><br/> Dodano: 12.09.2020</div>
                </div></a> 
                <a href="sherlock.html"><div class="ostatniododane">   
                    <div class="img"><img src="img/sherlock.jpg" alt="Sherlock"/></div><div class="opis"><span class="tutul">"Sherlock"</span> <br/>Dodano: 8.08.2020</div>
                </div></a> 
                <a href="bcs.html"><div class="ostatniododane">
                    <div class="img"><img src="img/bcs.jpg" alt="Better Call Saul"/></div><div class="opis"><span class="tutul">"Better call Saul"</span> <br/>Dodano: 1.08.2020</div>
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
                        <td><a href="lucyfer.html">Lucyfer</a></td>
                        <td><a href="st.html">Stranger Things</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Dark-2017-771383" target="_blank">Dark</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Gra+o+tron-2011-476848" target="_blank">Gra o tron</a></td>
                    </tr>
                    <tr>
                        <td><a href="bb.html">Breaking Bad</a></td>
                        <td><a href="sherlock.html">Sherlock</a></td>
                        <td><a href="https://www.filmweb.pl/serial/W+garniturach-2011-585726" target="_blank">Suits</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Jak+sprzedawa%C4%87+dragi+w+sieci+%28szybko%29-2019-828868" target="_blank">Jak sprzedawać narkotyki w sieci (szybko)</a></td>
                    </tr>
                    <tr>
                        <td><a href="bcs.html">Better call Saul</a></td>
                        <td><a href="wiking.html">Wikingowie</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Peaky+Blinders-2013-680981" target="_blank">Peaky Blinders</a></td>
                        <td><a href="https://www.filmweb.pl/serial/Wied%C5%BAmin-2019-724464" target="_blank">Wiedźmin</a></td>
                    </tr>
                </table>

                <table class="small">
                    <tr>
                        <th>Bardzo dobre seriale</th>
                    </tr>
                    <tr>
                        <td><a href="lucyfer.html">Lucyfer</a></td>   
                    </tr>
                    <tr>
                        <td><a href="bb.html">Breaking Bad</a></td>   
                    </tr>
                    <tr>
                        <td><a href="bcs.html">Better call Saul</a></td>
                    </tr>
                    <tr><th>Dobre seriale</th></tr>
                    <tr><td><a href="st.html">Stranger Things</a></td></tr>
                    <tr><td><a href="sherlock.html">Sherlock</a></td></tr>
                    <tr><td><a href="wiking.html">Wikingowie</a></td></tr>

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

    <footer>
        Wszelkie prawa zastrzeżone &copy; 2020 Dziękuję za wizytę. <span class="gotop"><a id="gotop" href="#" >Wróć na górę strony</a></span>
    </footer>
</div>
</body>
</html>