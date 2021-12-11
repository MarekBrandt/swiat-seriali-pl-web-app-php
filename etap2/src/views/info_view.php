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
                
                <h1>O czym jest ten blog?</h1>
                <p>Stowrzyłem ten blog, by dzielić się z Tobą propozycjami seriali, które według mnie mogą wiele wnieść do twojego życia.
                    Jeśli obejrzę serial i mi się spodoba, wystawiam tutaj opinie na jego temat.
                </p><br/><br/>
                <h3>Kim jest autor bloga?</h3>
                <p>Nazywam się Marek Brandt i jestem studentem Politechniki Gdańskiej na kierunku Informatyk.
                    Chwile wolne od nauki lubię spędzać oglądając wciągające seriale. Moim hobby pragnę się z Tobą dzielić. 
                    Właśnie dlatego powstał ten blog.
                </p><br/><br/>
                <h2>Na jakich innych stronach czerpać wiedzę o serialach, które warto zobczayć</h2>
                  <p>Polecam kliknąć obrazki poniżej, które są jednocześnie linkami, do moich ulubionych stron na temat kina.</p>
                    <div class="links">
                        <a href="https://www.filmweb.pl/" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
                        <div style="clear: both;"></div>
                    </div><br/><br/>
                    
                </div>
            </div>
        </article>
        
    </main> 

    <footer>
        Wszelkie prawa zastrzeżone &copy; 2020 Dziękuję za wizytę. <span class="gotop"><a href="#" id="gotop">Wróć na górę strony</a></span>
    </footer>
</div>
</body>
</html>