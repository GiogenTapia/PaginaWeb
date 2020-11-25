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
            <img src="../../img/2.jpg">
            <div class="texto-encima"><h1>Sony México ofreció el PlayStation 5 por menos de $10,000 MXN y canceló varias ordenes</h1></div>
            <p class="fecha">sabado 31 de octubre del 2020</p>
        </div>
        <div class="user_left">
            <a href=""><img src="../../img/carlosAvatar.jpg" class="imagen_editor" alt="@Usuario" width="50px" height="50px"></a>
            <p class="nombre_editor">Carlos Romero</p>
            <a class="twitter_editor" href="">@el_litos</a>
        </div>
        <main>
            <h2>Un error que ofreció varios productos en preventa a un precio muy atractivo</h2>
            <p>PlayStation 5 está a punto de debutar y hay mucha demanda por la consola de siguiente generación de Sony. Es por esto que a muchas personas les llamó la atención enteresarse que la tienda oficial de Sony en México estaba ofreciendo ambos modelos de la consola por menos de $10,000 MXN cada uno.

                Anoche, varios grupos de descuento y publicaciones en redes sociales se pusieron en alerta y es que descubrieron que Sony México estaba ofreciendo 30% de descuento en varios productos. Lo interesante es que dicho descuento aplicaba al PlayStation 5, al PlayStation 5 Digital Edition y varios productos de la consola.
                
                Como consecuencia, la comunidad tenía la oportunidad de comprar el PlayStation 5 un precio realmente bajo. Para que te des una idea, el precio de la edición normal paso de $13,999 MXN a $9850 MXN. Por su parte, el precio del PlayStation 5 Digital Edition paso de $11,500 MXN a $8054 MXN.
            </p>
            <img src="../../img/ImagenesDeNoticias/Noticia_2_MexioPlastation/img_1_palystation.jpg">
            <p>Las ofertas difíciles de rechazar no terminaron ahí. Como mencionamos, la oferta también aplicaba para otros productos relacionados con la consola de siguiente generación. De este modo, era posible conseguir Marvel’s Spider-Man Miles Morales por $910 MXN; un DualSense por $1260 MXN o una copia de Demon’s Souls por $1260 MXN.</p>
            <blockquote class="twitter-tweet"><p lang="es" dir="ltr"><a href="https://twitter.com/AtencionProfeco?ref_src=twsrc%5Etfw">@AtencionProfeco</a> <a href="https://twitter.com/Profeco?ref_src=twsrc%5Etfw">@Profeco</a> somos varias personas las que hemos sido victimas.<br>No solicitamos cancelación ni reembolso. Queremos que se respete la promoción y el pago y nos hagan llegar nuestra consola. <a href="https://twitter.com/Sony?ref_src=twsrc%5Etfw">@Sony</a> <a href="https://twitter.com/hashtag/SonyMexicoNoCumple?src=hash&amp;ref_src=twsrc%5Etfw">#SonyMexicoNoCumple</a> <a href="https://t.co/NQHem7KbHR">pic.twitter.com/NQHem7KbHR</a></p>&mdash; Benjamin Cisneros (@Benjaminalcis) <a href="https://twitter.com/Benjaminalcis/status/1322940429365579781?ref_src=twsrc%5Etfw">November 1, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <blockquote class="twitter-tweet"><p lang="es" dir="ltr"><a href="https://twitter.com/Profeco?ref_src=twsrc%5Etfw">@Profeco</a> <a href="https://twitter.com/AtencionProfeco?ref_src=twsrc%5Etfw">@AtencionProfeco</a> <a href="https://twitter.com/hashtag/SonyMexicoNoCumple?src=hash&amp;ref_src=twsrc%5Etfw">#SonyMexicoNoCumple</a><br>Realicé mi compra en la store de Sony México, recibí correos de confirmación de mi pedido y pago aprobado y ahora me lo cancelan sin ninguna razón. <a href="https://t.co/UVa2DbzHMK">pic.twitter.com/UVa2DbzHMK</a></p>&mdash; MexicanPower (@ramirez87782706) <a href="https://twitter.com/ramirez87782706/status/1322935588677451782?ref_src=twsrc%5Etfw">November 1, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <p>Hasta ahora, Sony México no ha hecho ningún comentario sobre esta situación. Estaremos pendientes y te informaremos cuando sepamos más sobre este tema.</p>
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
