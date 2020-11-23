<?php


require 'conexion.php';

$Titulo = $_POST['titulo'];
$Categoria = $_POST['categoria'];
$Contenido =$_POST["contenidoForo"];

     /*   VALIDAR CONTRASEÑA     */

if(empty($_POST["titulo"])){
 echo "<script>alert('campo nombre de usuario vacio');
 location.href='nuevoForo.php';</script>";
       }

     /*   VALIDAR CONTRASEÑA     */

if(empty($_POST["categoria"])){
 echo "<script>alert('campo contraseña vacio');
 location.href='nuevoForo.php';</script>";
       }


/*   validarForo  */
 if(empty($_POST["contenidoForo"])){
 echo "<script>alert('campo nombre vacio');
 location.href='nuevoForo.php';</script>";
       }
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



$insertar = "INSERT INTO foros VALUES (0,10,'$Titulo','$Categoria','$Contenido')";
$query= mysqli_query($conectar,$insertar);

if($query){
    echo "<script> alert('Tu foro se registro');
    location.href='forosUsu.php';
    </script>";
}else{
    echo "<script> alert('tu usuario no se registro');
    location.href='forosUsu.php';
    </script>";

}