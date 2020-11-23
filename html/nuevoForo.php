<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear foro</title>
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/ingresarForo.css">
    <link href="https://file.myfontastic.com/Nn5TSPRUBW8ownLj5YNeV6/icons.css" rel="stylesheet">
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
                    <li class="menu__item"><a class="menu__link" href="articulos.php">Articulos</a></li>
                    <li class="menu__item"><a class="menu__link" href="resenas.php">Reseñas</a></li>
                    <li class="menu__item"><a class="menu__link " href="videos.php">Videos</a></li>
                    <li class="menu__item"><a class="menu__link select" href="foroCat.php">Foros</a></li>
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
    <h2 class="section__titulo">NUEVO FORO</h2>
    <form method="post" action="registrarForo.php" id="formForo">
        <article>
            <input type="text" name="titulo" id="titulo" placeholder="TITULO" class="titulo_Foro">
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" class="combo">
                <option value="nintendo">Nintendo</option>
                <option value="xbox">Xbox</option>
                <option value="playstation">Playstation</option>
                <option value="pc">PC</option>
              </select>
            <textarea name="contenidoForo" id="contenidoForo" class="contenido_foro" placeholder="Contenido"></textarea>
        </article>
        <input type="submit" class="agregar_foro" id="btnAgregar" value="AGREGAR">
        </form>

    </main>
  


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

</html>
