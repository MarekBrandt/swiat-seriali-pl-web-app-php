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
                
                <h1>Dziękuje za wypełnienie tego formularza. Postaram się z Tobą skontaktować jak najszybciej będę mógł!</h1>
                
                  <p>Polecam kliknąć obrazki poniżej, które są jednocześnie linkami, do moich ulubionych stron na temat kina.</p>
                    <div class="links">
                        <a href="https://www.filmweb.pl/" target="_blank"><div class="link"><img src="static/img/filmweb.jpg" alt="Filmweb"/></div></a>
                        <a href="https://www.imdb.com" target="_blank"><div class="link"><img src="static/img/imdb.jpg" alt="IMBd"/></div></a>
                        <div style="clear: both;"></div>
                    </div><br/><br/>
            </div>
        </article>
        
    </main> 

    <?php
    dispatch($routing, '/footer')
    ?>
</div>
</body>
</html>