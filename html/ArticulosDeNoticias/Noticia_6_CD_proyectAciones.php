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
            <img src="../../img/N_4.jpg">
            <div class="texto-encima"><h1>Acciones de CD Projekt RED cayeron casi 25% en un margen de 2 meses</h1></div>
            <p class="fecha">sabado 31 de octubre del 2020</p>
        </div>
        <div class="user_left">
            <a href=""><img src="../../img/carlosAvatar.jpg" class="imagen_editor" alt="@Usuario" width="50px" height="50px"></a>
            <p class="nombre_editor">Carlos Romero</p>
            <a class="twitter_editor" href="">@el_litos</a>
        </div>
        <main>
            <h2>El retraso de Cyberpunk 2077 y polémicas del estudio generaron incertidumbre en los inversionistas</h2>
            <p>CD Projekt RED, la compañía polaca dueña de los derechos de The Witcher en el terreno de videojuegos, dentro de poco lanzará su más nuevo y ambicioso proyecto, Cyberpunk 2077. Sin embargo, la última etapa de desarrollo ha estado envuelta de noticias negativas, en especial por sus retrasos, que ya suman 3 en lo que va del año. Lo anterior no sólo ha causado un poco de descontento en los fans, sino que también ha tenido un gran impacto en el mercado, pues esta serie de infortunios ha hecho que el valor de la compañía decreciera considerablemente.
                A inicios de esta semana, CD Projekt RED anunció que retrasaría Cyberpunk 2077 una vez más, tomando por sorpresa a muchos jugadores. Como era de esperarse, esto tendría efectos en el valor de la compañía y tal como reporta GamesIndustry.biz, estas consecuencias fueron considerablemente negativas, pues el valor de la compañía bajó casi 25% en el margen de 2 meses.
                De acuerdo con la información, CD Projekt RED alcanzó un máximo en su valor en el mercado el pasado agosto, gracias en gran parte al anuncio de The Witcher: Monster Slayer, un título móvil al estilo Pokémon GO. Luego de la revelación, la compañía tuvo un valor de alrededor de $10.72 MMDD un valor de $117 USD por acción.
            </p>
            <h2>LAS ACCIONES DE CD PROJEKT RED CAYERON POR CULPA DE LA INCERTIDUMBRE EN TORNO AL ESTUDIO</h2>
            <p>Sin embargo, los meses siguientes salieron a la luz muchas noticias que claramente causaron cierta incertidumbre en los accionistas. Aunque ya nos acercábamos al estreno de Cyberpunk 2077 y todo aparentaba marchar bien, surgieron reportes que apuntaban que habría crunch obligatorio para acabar el desarrollo, algo que sin duda generó controversia a pesar de que el estudio afirmó que daría bonos.
                Sin embargo, a finales de octubre CD Projekt RED anunció el tercer retraso de Cyberpunk 2077, que lo hará debutar hasta diciembre. Como consecuencia de este movimiento, el valor de las acciones de la compañía bajaron hasta $83.67 USD y el valor de la empresa completa cayó hasta los $8.44 MMDD, casi 25%, alcanzando así el valor más bajo desde abril pasado.               
                Algo que debes tomar en cuenta es que el mercado bursátil es muy volátil, así que es muy probable que la compañía se recupere tras el debut de Cyberpunk 2077. Sin embargo, este descalabro ocasionó que se distanciara varios miles de millones de dólares de Ubisoft y que ya no sea la compañía de videojuegos mejor valuada de Europa, pues, tal como informa GamesIndustry.biz, la empresa francesa tiene un valor de $11.91 MMDD.
                ¿Qué piensas de las consecuencias del retraso de Cyberpunk 2077? ¿Crees que el decremento fue mucho? Cuéntanos en los comentarios.     
                CD Projekt RED participó recientemente en una junta con inversionistas y en ella se insinuó que el retraso más reciente de Cyberpunk 2077 se debió a que las versiones de las consolas de actual generación no están listas.
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
