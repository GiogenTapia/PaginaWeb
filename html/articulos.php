<!DOCTYPE html>
<html lang="es">

    <head>
        <link rel="stylesheet" href="../css/articulos.css">
         <link href="https://file.myfontastic.com/Nn5TSPRUBW8ownLj5YNeV6/icons.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Documento xD</title>
    </head>
    <body>
        <header class="header">
            <div class="contenedor">

                <h1 class="logo"> BLOOD OF GAMER</h1>
                <span class="icon-menu" id="btn-menu"></span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                         <li class="menu__item"><a class="menu__link " href="../index.php">Inicio</a></li>
                    <li class="menu__item"><a class="menu__link" href="Noticias.php">Noticias</a></li>
                    <li class="menu__item"><a class="menu__link select" href="articulos.php">Articulos</a></li>
                    <li class="menu__item"><a class="menu__link" href="resenas.php">Reseñas</a></li>
                    <li class="menu__item"><a class="menu__link " href="videos.php">Videos</a></li>
                    <li class="menu__item"><a class="menu__link" href="foroCat.php">Foros</a></li>
                      <?php
                    session_start();
                    require 'conexion.php';

                    ?>
                    <?php  if($_SESSION==true){
                       ?>
                        <li class="menu__item"><a class="menu__link" href="perfil.php">Perfil</a></li>

                     <?php }else { ?>
                            <li class="menu__item"><a class="menu__link" href="login.php">Login</a></li>


                                <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <h2 class="section__titulo">Artículos</h2>
            <div id = "container">
                <h2 class="section__titulo">Artículos</h2>
                <article>
                    <a title="Smach" href="articulo.php"><img src="../img/7.jpg" ></a>
                    <div>
                        <a class="article_titulo" href="articulo.php">
                            #ViernesRetro: El Smash anda barato
                        </a>
                        <p class="article_texto">El Smach anda barato, cómpralo en corto.</p>
                        <p class="fecha">31/10/2020</p>
                    </div>
                </article>
                </div>
            <input type="button" class="leer_noticias" value="Más artículos" onclick = "addElemento();">
        </main>
        <aside>
            <h2 class="section__titulo">Lo más popular</h2>
        </aside>
        <footer class="footer">
            <div class="contenedor">
                <div class="social">
                    <a href="https://www.facebook.com/Bloodofgamermx-108232427492486/" class="icon-facebook"></a>
                    <a href="https://twitter.com/BloodOfGamerMX" class="icon-twitter"></a>

                </div>
                <p class="copy">&copy; BLOOD OF GAMER </p>
            </div>
        </footer>
    </body>
    <script src="../JS/cargarArticulos.js"></script>
</html>
