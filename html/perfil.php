<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/Estilos2.css">
    <meta charset="UTF-8">
     <link href="https://file.myfontastic.com/Nn5TSPRUBW8ownLj5YNeV6/icons.css" rel="stylesheet">
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
                     <li class="menu__item"><a class="menu__link " href="../index.html">Inicio</a></li>
                    <li class="menu__item"><a class="menu__link" href="Noticias.html">Noticias</a></li>
                    <li class="menu__item"><a class="menu__link" href="articulos.html">Articulos</a></li>
                    <li class="menu__item"><a class="menu__link" href="resenas.html">Reseñas</a></li>
                    <li class="menu__item"><a class="menu__link" href="videos.html">Videos</a></li>
                    <li class="menu__item"><a class="menu__link" href="foroCat.html">Foros</a></li>
                    <li class="menu__item"><a class="menu__link select" href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="contenedor_login">
        <img src="../img/LogoSinFondo.png" id="logologin">
         <img src="../img/linea.jpg" id="linea">

<?php
    session_start();
        $nombre= $_SESSION['nombre'];
        echo"<h1> Bienvenido </h1><br>
        <br><h1> Nombre de Usuario $nombre </h1> <br>";


?>
    </div>

     <footer class="footer">
        <div class="contenedor">
            <div class="social">
                <a href="#" class="icon-facebook"></a>
                <a href="#" class="icon-twitter"></a>

            </div>
            <p class="copy">&copy; BLOOD OF GAMER </p>
        </div>
    </footer>
    <script src="../JS/Recursos.js"></script>
</body>

</html>
