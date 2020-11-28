<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/Estilos2.css">
    <link href="https://file.myfontastic.com/Nn5TSPRUBW8ownLj5YNeV6/icons.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento xD</title>
    <script src="../JS/validar.js"></script>
    <style>
    .error {
        color: #FF0000;
    }
    </style>
</head>

<?php 
    if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
        //echo "Viene del POST (Formulario).";
        require '../pojos/usuario.php';
        require '../datos/guardar.php';

        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setContra($_POST['pass']);
        $usuario->setCorreo($_POST["correo"]);
        $usuario->setApellido($_POST['apellidos']);
        $usuario->setTelefono($_POST['telefono']);
        $bd = new guardar();
        $bd->insertarUsuario($usuario);
    }
    ?>


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
                    <li class="menu__item"><a class="menu__link" href="foroCat.php">Foros</a></li>
                    <li class="menu__item"><a class="menu__link select" href="login.php">Login</a></li>



                </ul>
            </nav>
        </div>
    </header>
    <div class="contenedor_login">
        <img src="../img/LogoSinFondo.png" id="logologin">
        <img src="../img/linea.jpg" id="linea">





        <form method="post" action="Registro.php" id="formulario">
            <h2 id="titulo_login">Registro</h2>

            <input type="text" name="nombre" placeholder="Nombre de usuario">
            <input type="text" name="pass" placeholder="Contraseña">
            <input type="text" name="correo" placeholder="correo">
            <input type="text" name="apellidos" placeholder="Apellidos">
            <input type="text" name="telefono" placeholder="Telefono">

            <button type="submit" class="leer_noticias" id="btnresenas">Registrar</button>


        </form>








    </div>

    <footer class="footer">
        <div class="contenedor">
            <div class="social">
                <a href="https://www.facebook.com/Bloodofgamermx-108232427492486/" class="icon-facebook"></a>
                <a href="https://twitter.com/BloodOfGamerMX" class="icon-twitter"></a>

            </div>
            <p class="copy">&copy; BLOOD OF GAMER </p>
        </div>
    </footer>
    <script src="../JS/datos.js"></script>
    <script src="../JS/Recursos.js"></script>
</body>

</html>