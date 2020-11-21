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
            .error {color: #FF0000;}
        </style>
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
                    <li class="menu__item"><a class="menu__link select" href="videos.php">Videos</a></li>
                    <li class="menu__item"><a class="menu__link" href="foroCat.php">Foros</a></li>
                            <li class="menu__item"><a class="menu__link" href="html/login.php">Login</a></li>



                </ul>
            </nav>
        </div>
    </header>
    <div class="contenedor_login">
        <img src="../img/LogoSinFondo.png" id="logologin">
         <img src="../img/linea.jpg" id="linea">





<form method="post" action="guardar.php" id="formulario" onsubmit="return validar();">
        <h2 id="titulo_login">Registro</h2>

            <input type="text" name="nombre" placeholder="Nombre de usuario">
            <input type="text" name="pass" placeholder="Contraseña">
    <input type="text" name="correo" placeholder="correo">
    <input type="text" name="apellidos" placeholder="Apellidos">
    <input type="text" name="telefono" placeholder="Telefono">

    <button type="submit" class="leer_noticias" id="btnresenas" onclick="getDatos();">Registrar</button>


        </form>








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
    <script src="../JS/datos.js"></script>
    <script src="../JS/Recursos.js"></script>
</body>

</html>
