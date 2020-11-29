<?php
class forosReg{

    public function guardarForo($foro){

require 'conexion.php';

$Titulo = $foro->getTitulo();
$Categoria = $foro->getCategoria();
$Contenido = $foro->getContenido();


     /*   VALIDAR CONTRASEÑA     */

if(empty($Titulo)){
 echo "<script>alert('titulo vacio');
 location.href='nuevoForo.php';</script>";
       }

     /*   VALIDAR CONTRASEÑA     */

if(empty($Categoria)){
 echo "<script>alert('categoria vacia');
 location.href='nuevoForo.php';</script>";
       }


/*   validarForo  */
 if(empty($Contenido)){
 echo "<script>alert('contenido vacio');
 location.href='nuevoForo.php';</script>";
       }
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



$insertar = "INSERT INTO foros VALUES (0,10,'$Titulo','$Categoria','$Contenido',CURRENT_TIMESTAMP())";
$query= mysqli_query($conectar,$insertar);

if($query){
    echo "<script> alert('Tu foro se registro');
    location.href='foroCat.php';
    </script>";
}else{
    echo "<script> alert('tu usuario no se registro');
    location.href='foroCat.php';
    </script>";

}

    }
}

?>