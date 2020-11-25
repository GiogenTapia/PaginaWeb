<?php
    session_start();
    require 'conexion.php';
?>
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
                    <li class="menu__item"><a class="menu__link" href="Noticias.php">Noticias</a></li>
                    <li class="menu__item"><a class="menu__link" href="articulos.php">Articulos</a></li>
                    <li class="menu__item"><a class="menu__link" href="resenas.php">Reseñas</a></li>
                    <li class="menu__item"><a class="menu__link" href="videos.php">Videos</a></li>
                    <li class="menu__item"><a class="menu__link" href="foroCat.php">Foros</a></li>
                    <li class="menu__item"><a class="menu__link select" href="perfil.php">Perfil</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="contenedor_login">
        <img src="../img/LogoSinFondo.png" id="logologin">
         <img src="../img/linea.jpg" id="linea">

<?php
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

    <div class="perfil" id="info_usuario">

        <p>Nombre de usuario: <?php echo $nombre ?></p> <br>
        <p> Correo: <?php echo $correo ?></p><br>
        <p>Apellidos:  <?php echo $apellidos ?></p><br>
        <p>Telefono: <?php echo $telefono ?></p> <br>


    </div>

    </div>
       <button type="button" class="leer_noticias" id="btncerrar" value="Leer mas noticias"><a href="cerrar.php">Cerrar</a></button>
     <footer class="footer">
        <div class="contenedor">
            <div class="social">
                <a href="https://www.facebook.com/Bloodofgamermx-108232427492486/" class="icon-facebook"></a>
                <a href="https://twitter.com/BloodOfGamerMX" class="icon-twitter"></a>

            </div>
            <p class="copy">&copy; BLOOD OF GAMER </p>
        </div>
    </footer>
    <script src="../JS/Recursos.js"></script>

    </body>
</html>
