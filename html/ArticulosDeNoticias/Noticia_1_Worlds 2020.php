<?php
    session_start();
    require '../../datos/conexion.php';

?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <link rel="stylesheet" href="../../css/styleNotica.css">
        <meta charset="UTF-8">
         <link href="https://file.myfontastic.com/Nn5TSPRUBW8ownLj5YNeV6/icons.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notias</title>
    </head>
    <body>
        <header class="header">
            <div class="contenedor">
                <h1 class="logo"> BLOOD OF GAMER</h1>
                <span class="icon-menu" id="btn-menu"></span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                    <li class="menu__item"><a class="menu__link " href="../../index.php">Inicio</a></li>
                    <li class="menu__item"><a class="menu__link select" href="../Noticias.php">Noticias</a></li>
                    <li class="menu__item"><a class="menu__link " href="../articulos.php">Articulos</a></li>
                    <li class="menu__item"><a class="menu__link" href="../resenas.php">Reseñas</a></li>
                    <li class="menu__item"><a class="menu__link " href="../videos.php">Videos</a></li>
                    <li class="menu__item"><a class="menu__link" href="../foroCat.php">Foros</a></li>
                    <?php  if($_SESSION==true){
                       ?>
                        <li class="menu__item"><a class="menu__link" href="../perfil.php">Perfil</a></li>

                     <?php }else { ?>
                            <li class="menu__item"><a class="menu__link" href="../login.php">Login</a></li>


                                <?php } ?>
                    </ul>
                </nav> 
            </div>
        </header>
        <div class="portada">
            <img src="../../img/N_1.jpg">
            <div class="texto-encima"><h1>Damwon se corona en Worlds 2020, campeonato de League of Legends</h1></div>
            <p class="fecha">sabado 31 de octubre del 2020</p>
        </div>
        <div class="user_left">
            <a href=""><img src="../../img/carlosAvatar.jpg" class="imagen_editor" alt="@Usuario" width="50px" height="50px"></a>
            <p class="nombre_editor">Carlos Romero</p>
            <a class="twitter_editor" href="">@el_litos</a>
        </div>
        <main>
            <h2>Campeones</h2>
            <p>Tras una serie de emocionantes enfrentamientos, Worlds 2020, el campeonato mundial de League of Legends, llegó a su fin. Los mejores equipos del MOBA compitieron por días para ser reconocidos como la mejor escuadra, pero solo una podía salir victoriosa.
                La gran final del torneo, que se llevó a cabo en el estadio Pudong, casa del equipo de futbol Shanghái SIPG, enfrentó al equipo surcoreano Damwon contra la escuadra china Suning.            
                Después de varias partidas llenas de emoción y momentos de tensión, Damwon salió victorioso y se coronó como el campeón de Worlds 2020. Con ello, los coreanos retomaron de nuevo la copa y acabaron con la buena racha que los equipos chinos consiguieron en años pasados.             
                Por si te lo perdiste: boletos para la final de Worlds 2020 alcanzaron precios exorbitantes
            </p>
            <h2>ASÍ CELEBRÓ DAMWON SU VICTORIA EN WORLDS 2020</h2>
            <p>Damwon tuvo un gran torneo desde las etapas iniciales, lo que le permitió llegar a los cuartos de final y a las semifinales, donde se enfrentó a DRX, G2 Esports y otros equipos, a los que derrotó sin problema alguno.
                Suning también hizo lo propio para llegar a la gran final, pero no pudo superar a Damwon durante las últimas partidas. Así pues, Damwon se sobrepuso 3 -1 al equipo chino que se quedó a un paso del triunfo.           
                Nuguri, Canyon, ShowMaker, Ghost, Beryl, miembros de Damwon, celebraron en grande su victoria. La final se jugó de manera presencial, así que los jugadores pudieron levantar juntos la copa.               
                Riot Games compartió varias publicaciones para festejar la victoria de Damwon, así que podemos ver justo el momento de la premiación. Por otro lado, también es posible ver completa la gran final. Abajo te dejo las publicaciones.
            </p>
            <blockquote class="twitter-tweet"><p lang="en" dir="ltr">DAMWON GAMING ARE THE 2020 WORLD CHAMPIONS! 🏆 <a href="https://twitter.com/hashtag/Worlds2020?src=hash&amp;ref_src=twsrc%5Etfw">#Worlds2020</a> <a href="https://t.co/5ugqBGJ0cs">pic.twitter.com/5ugqBGJ0cs</a></p>&mdash; LoL Esports (@lolesports) <a href="https://twitter.com/lolesports/status/1322542790153293824?ref_src=twsrc%5Etfw">October 31, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <blockquote class="twitter-tweet"><p lang="und" dir="ltr">🏆 <a href="https://twitter.com/DamwonGaming?ref_src=twsrc%5Etfw">@DamwonGaming</a> 🏆 <a href="https://t.co/fNfbNW7GbK">pic.twitter.com/fNfbNW7GbK</a></p>&mdash; LoL Esports (@lolesports) <a href="https://twitter.com/lolesports/status/1322544816673214475?ref_src=twsrc%5Etfw">October 31, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <blockquote class="twitter-tweet"><p lang="en" dir="ltr">World Champions 💪 <a href="https://t.co/vpkOwA33kw">pic.twitter.com/vpkOwA33kw</a></p>&mdash; LoL Esports (@lolesports) <a href="https://twitter.com/lolesports/status/1322567383387676672?ref_src=twsrc%5Etfw">October 31, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <iframe width="600" height="400" src="https://www.youtube.com/embed/_SQwnMomwcw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>SK Telecom T1 y Samsung Galaxy dominaron la competencia de 2015 a 2017, pero fue en 2018 y 2019 que los equipos coreanos perdieron su liderazgo ante las victorias de los equipos chinos Invictus Gaming y FunPlus Phoenix. Ahora, con la victoria de Damwon, la copa regresa a manos de equipos surcoreanos.</p>
            <!--<h2 class="section__titulo">Deja un comentario</h2>
            <textarea id="comentario" name="ElComentario" rows="15" cols="100"></textarea>
            <input type="button" class="leer_noticias" value="Publicar" > -->

        </main>
        <aside>
            <h2>Aquí van los anuncios.</h2>
        </aside>
        <footer class="footer">
            <div class="contenedor">
                <div class="social">
                    <a href="#" class="icon-facebook"></a>
                    <a href="#" class="icon-twitter"></a>

                </div>
                <p class="copy">&copy; BLOOD OF GAMER </p>
            </div>
        </footer>
    </body>
    <script src="../Recursos.js"></script>
</html>
