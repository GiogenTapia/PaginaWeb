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
                     <li class="menu__item"><a class="menu__link " href="../index.php">Inicio</a></li>
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
     require 'conexion.php';
     $nombre= $_SESSION['nombre'];

    $query = mysqli_query($conectar,"SELECT * FROM login WHERE nombre = '".$nombre."'");

       if($query){
       while($row=$query->fetch_array()){
             $ID_login=$row['ID_login'];
             $correo=$row['correo'];
             $apellidos=$row['apellidos'];
             $telefono=$row['telefono'];
         }
       }
?>

    <div>

        <h2>Nombre de usuario <?php echo $nombre ?></h2>
        <h2>Correo <?php echo $correo ?></h2>
        <h2>Apellidos <?php echo $apellidos ?></h2>
        <h2>Telefono <?php echo $telefono ?></h2>
       <button type="button" class="leer_noticias" id="btnresenas" value="Leer mas noticias"><a href="cerrar.php">Cerrar</a></button>

    </div>
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
