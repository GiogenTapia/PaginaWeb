<?php
    session_start();
    require '../conexion.php';
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
            <img src="../../img/N_7.jpg">
            <div class="texto-encima"><h1>PlayStation VR no funcionará con juegos de PS5; sólo por medio de retrocompatibilidad</h1></div>
            <p class="fecha">sabado 31 de octubre del 2020</p>
        </div>
        <div class="user_left">
            <a href=""><img src="../../img/carlosAvatar.jpg" class="imagen_editor" alt="@Usuario" width="50px" height="50px"></a>
            <p class="nombre_editor">Carlos Romero</p>
            <a class="twitter_editor" href="">@el_litos</a>
        </div>
        <main>
            <h2>Los usuarios podrán disfrutar la realidad virtual únicamente con los juegos de PlayStation 4 </h2>
            <p>Desde el anuncio del PlayStation 5, los jugadores del PlayStation VR, el dispositivo de Sony que da acceso a la realidad virtual en PlayStation 4, se preguntaban como funcionaría el periférico en la nueva consola o si sacaría provecho de sus características. Las dudas permanecían, pero hoy se confirmó que el dispositivo sí funcionará en la consola, pero no con juegos de PlayStation 5.
                Sony no había fijado su postura sobre como daría soporte a la realidad virtual en PlayStation 5, más allá de que su visor PlayStation VR sería compatible. Pues bien, hoy se dieron a conocer más detalles, pues un portavoz de la compañía confirmó a UploadVR que el dispositivo funcionará en la consola por medio de la retrocompatibilidad.        
                Lo anterior tiene algunas implicaciones importantes, pues, al ser un dispositivo retrocompatible, el PlayStation VR no funcionará con juegos de PlayStation 5, sino sólo con títulos del PlayStation 4.
            </p>
            <h2>SÓLO JUEGOS DEL PLAYSTATION 4 FUNCIONARÁN CON EL PLAYSTATION VR </h2>
            <p>Los usuarios del PlayStation VR tendrán que prestar mucha atención al comprar los juegos que quieren disfrutar en realidad virtual en PlayStation 5 que también tengan versiones para PlayStation 4, como Hitman 3 y No Man’s Sky.
                Decimos esto porque si los jugadores quieren disfrutar algún juego con realidad virtual (de juegos compatibles) tendrán que conseguir la versión de PlayStation 4 de ese juego. Posteriormente, tendrán que jugar el título como retrocompatible en el PlayStation 5. De esta manera los jugadores podrán disfrutar las funciones del PlayStation VR. Además, te recordamos que también podrán conseguir las mejoras de los títulos compatibles para la next gen aunque lo hayan comprado para PlayStation 4.              
                Sólo se podrá usar el modo de realidad virtual en el juego con desempeño de juego de PlayStation 4 y si los jugadores desean aprovechar las funciones del PlayStation 5, tendrán que jugar la versión con las mejoras gratuitas.
                En cambio, si sólo compran la versión de PlayStation 5, no podrán acceder de ninguna manera al modo de PlayStation VR.
            </p>
            <h2>¿QUÉ PASARÁ CON LA REALIDAD VIRTUAL EN PLAYSTATION 5? </h2>
            <p>Es importante mencionar que el portavoz también comunicó que no han “anunciado títulos de PS5 para PS VR” y con ello también se confirmaría que al parecer Sony no tiene planes para lanzar juegos de PlayStation 5 compatibles con el PlayStation VR, tomando en cuenta también que la cámara de la nueva consola no es compatible con el visor, sino que es necesario un adaptador que Sony está dando sin costo adicional a los poseedores de un PlayStation VR.
                Esta información podría ser negativa para muchos jugadores que cuentan con un PlayStation VR, pues podría significar que Sony dejaría de darle soporte a esta tecnología. Las sospechas aumentan si recordamos que el jefe de la marca, Jim Ryan, cree que el futuro de la realidad virtual está todavía muy lejos, aparte de que sus declaraciones hicieron pensar que Sony podría dejar de invertir en la realidad virtual.               
                No obstante, no todas las esperanzas están perdidas, pues también existe la posibilidad de que el PlayStation VR con juegos de PlayStation 5 porque quizá Sony prepara un nuevo visor que aproveche esta tecnología y las capacidades de la nueva consola por igual, pero siendo sinceros se escucha un poco improbable.               
                Decimos lo anterior porque hay evidencias que dejan ver que Sony sigue teniendo interés en la realidad virtual, e incluso al parecer ya está trabajando en el sucesor del PlayStation VR, pero la información sugiere que aún faltan años para que el proyecto esté listo.               
                Así pues, todo parece indicar, por ahora, que el número de juegos de PlayStation VR disminuirá en los siguientes años, aunque existirá la posibilidad de que los desarrolladores los lancen como juegos de PlayStation 4 y se puedan jugar en PlayStation 5 por medio de la retrocompatibilidad.  
                ¿Qué opinas de esto? ¿Eres usuario de PlayStation VR? Cuéntanos en los comentarios.
            </p>
            <!--<textarea id="comentario" name="ElComentario" rows="15" cols="100"></textarea>
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
