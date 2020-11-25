<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/forosUsuarios.css">
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
        <h2 class="section__titulo">FOROS</h2>

        <?php
   
     require 'conexion.php';
     
    $query = mysqli_query($conectar,"SELECT * FROM foros where categoria='xbox'");

       if($query){
       while($row=$query->fetch_array()){
             $ID=$row['id'];
             $Usu=$row['id_us'];
             $Titulo=$row['titulo'];
             $Categoria=$row['categoria'];
             $Contenido=$row['contenido'];
             $Fecha=$row['fecha'];
          
             echo " <div id = container>
             <article>
                 <a title=$Titulo href=foro.php?variable1=$ID><img src=../img/XBOX.png ></a>
                 <div>
                     <a class=article_titulo href=foro.php?variable1=$ID>
                         $Titulo
                     </a>
                     <p class=fecha>$Fecha</p>
                 </div>
             </article>
             </div>";

         }
       }
    
?>      
         <?php
                    require 'conexion.php';
                    ?>
                    <?php  if($_SESSION==true){
                       ?>
        <a href="nuevoForo.php"><input type="button" class="leer_noticias" value="Agregar Foro"></a>
           <?php } ?>
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
