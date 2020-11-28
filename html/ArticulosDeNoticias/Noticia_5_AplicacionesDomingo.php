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
            <img src="../../img/N_5.jpg">
            <div class="texto-encima"><h1>Revista sugiere que una nueva aplicación de Pokémon llegará antes de 2021</h1></div>
            <p class="fecha">sabado 31 de octubre del 2020</p>
        </div>
        <div class="user_left">
            <a href=""><img src="../../img/carlosAvatar.jpg" class="imagen_editor" alt="@Usuario" width="50px" height="50px"></a>
            <p class="nombre_editor">Carlos Romero</p>
            <a class="twitter_editor" href="">@el_litos</a>
        </div>
        <main>
            <h2>La publicación revela interesantes planes para celebrar el 25.º aniversario de la serie</h2>
            <p>A diferencia de años pasados, en 2020 no hubo un juego nuevo de Pokémon para una consola de Nintendo, esto fue así principalmente porque Game Freak se enfocó en el lanzamiento de las 2 expansiones que llegaron a Pokémon Sword & Shield. No obstante, The Pokémon Company podría estar guardando una sorpresa más para lo que resta del 2020.

                Sólo hacen falta unas cuantas semanas para que termine el año, pero al parecer es tiempo suficiente para que The Pokémon Company anuncie y lance una nueva aplicación de Pokémon, de acuerdo con la edición de otoño 2020 del Licensing Source Book, una publicación enfocada en licencias y franquicias, tal como informa el usuario de Twitter CentroPokemon.
                
                En un anuncio de la publicación, aparece un promocional de la marca GB eye, una compañía encargada de lanzar productos de licencias que ha trabajado con franquicias como Fortnite, Pokémon, PlayStation, Minecraft, Fallout, The Last of Us y Apex Legends. En el anuncio se lee que tendrá un cierre de año muy fuerte debido a lanzamientos importantes de Assassin’s Creed y Cyberpunk 2077, pero llama la atención que la revista hace mención a una nueva aplicación de Pokémon que llegaría en algún punto del último trimestre de 2020; por lo que deberíamos saber de él antes de 2021.
                
                Esto toma por sorpresa, pues hasta el momento The Pokémon Company no ha confirmado un nuevo proyecto de la serie; además, tomando en cuenta como se refiere la compañía a este nuevo título, parece indicar que se trata de un lanzamiento para móviles, así que te invitamos a no emocionarte demasiado y que no creas que se refiere a un juego de la serie principal.</p>
            <h2>UN GRAN AÑO SE AVECINA PARA POKÉMON </h2>
            <p>Pero la colaboración de The Pokémon Company con GB eye no terminará ahí, pues en la publicación también se lee que la compañía formará parte del 25.º aniversario de Pokémon, que se celebrará el año próximo y que al parecer incluirá muchos productos temáticos y “más actividades planeadas para esta marca enormemente popular”.
                “Con la mira en 2021, GB eye apoyará el 25.º aniversario de Pokémon con un rango específico de productos #25””, se lee como nota final del anuncio de GB eye en la publicación e incluso se pueden ver algunos productos que conformarán la línea de productos planeados para el último trimestre del año, los cuales están inspirados en el Pokémon Evolución, Eevee.
                No está claro a qué se refiere la compañía con los “productos #25”, pero, como se menciona antes, podría tratarse de mercancía relacionada no sólo con el 25.º aniversario de la franquicia, sino también con Pikachu, tomando en cuenta que es el Pokémon número 25 de la Pokédex, que coincide de forma espléndida con el aniversario. De cualquier forma, todo apunta a que The Pokémon Company celebrará a lo grande el cumpleaños 25 de la serie en 2021.
            </p>
            <blockquote class="twitter-tweet"><p lang="es" dir="ltr">La revista LSB en su edición de otoño 2020 menciona varias cosas sobre el futuro de Pokémon.<br><br>Se menciona una nueva aplicación de Pokémon para último cuarto del año. Además menciona una nueva línea de productos para el 25 aniversario llamada #25. <a href="https://t.co/ImS5GDiGvZ">pic.twitter.com/ImS5GDiGvZ</a></p>&mdash; Centro Pokémon (@CentroPokemon) <a href="https://twitter.com/CentroPokemon/status/1320922944202280960?ref_src=twsrc%5Etfw">October 27, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <p>¿Qué sorpresa crees que The Pokémon Company guarde para los fans de la serie? ¿Qué juego te gustaría que la compañía anunciara? Cuéntanos en los comentarios.
                El anime de Pokémon también está de fiesta, pues acaba de estrenar su 23.ª temporada, Viajes Pokémon, y para conmemorarlo llevó contenido especial a Pokémon GO. En cuanto a Pokémon Sword & Shield, recientemente llegó la segunda expansión, The Crown Tundra, con adiciones muy importantes de gameplay. Puedes encontrar más noticias relacionadas con la franquicia si visitas esta página.
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
