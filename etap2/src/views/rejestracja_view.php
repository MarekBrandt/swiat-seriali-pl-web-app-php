<!DOCTYPE html>
<html lang="pl">
<head>
<?php dispatch($routing, '/head') ?> 
</head>
<body>
<div class="wrapper">
<?php dispatch($routing, '/nav') ?> 
    <main>
        <article>
            <div class="content">
                <div class="rejestracja">
                    <h1>Zarejestruj się!</h1>
                    <form method="POST">
                    
                        <?php 
                            if($komunikat != false)
                            {
                                echo $komunikat.'<br/><br/>';
                            }
                        ?>    

                        <input type="text" placeholder="Login" name="login" required/><br/>
                        <input type="text" placeholder="Imie" name="imie" required/><br/>
                        <input type="text" placeholder="Nazwisko" name="nazwisko" required/><br/>
                        <input type="email" placeholder="Email" name="mail" required/><br/>
                        <input type="password" placeholder="Hasło" name="haslo" required/><br/>
                        <input type="password" placeholder="Powtórz hasło" name="haslorep" required/><br/><br/>
                        <input type="submit" value="Wyślij">
                        <input type="reset" value="Wyczyść formularz">
                    </form>
                </div>      
                <div style="clear:both"></div>        

                <br/><br/>
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