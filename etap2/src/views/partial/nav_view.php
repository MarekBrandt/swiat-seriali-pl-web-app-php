<header>
    <div class="logo">
        <a href="index">
            <div class="logosvg">
                <svg width="50" height="50">
                    <circle cx="25" cy="25" r="23" stroke="black" stroke-width="4" fill="#ce2503" />
                    <circle cx="25" cy="25" r="22" stroke="#7e1702" stroke-width="5" fill="#ce2503" />
                </svg>
            </div>
            <span class="logoswiat">świat</span>seriali
            <div style="clear:both;"></div>
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="seriale">Seriale</a></li>
            <li><a href="kategorie">Kategorie</a>
                <ol>
                    <li><a href="dramat">Dramat</a></li>
                    <li><a href="komedia">Komedia</a></li>
                    <li><a href="kryminal">Kryminał</a></li>
                    <li><a href="dramhist">Dramat historyczny</a></li>
                    <li><a href="fantasy">Fantasy</a></li>
                    <li><a href="horror">Horror</a></li>
                    <li><a href="scifi">Sci-Fi</a></li>
                </ol>
            </li>
            <li><a href="upload">Upload</a></li>
            <li><a href="galeria">Galeria</a></li>
            <li><a href="info">O blogu</a></li>
            <?php if($logged == 'no')
                echo '<li><a href="logowanie">Logowanie</a></li>';
                else echo '<li><a href="wylogowanie">Wyloguj się</a></li>'
            ?>
            
        </ul>
    </nav>
</header> 