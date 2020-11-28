<?php


require 'conexion.php';

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$correo=$_POST["correo"];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];

     /*   VALIDAR CONTRASEÑA     */

if(empty($_POST["nombre"])){
 echo "<script>alert('campo nombre de usuario vacio');
 location.href='Registro.php';</script>";
       }

     /*   VALIDAR CONTRASEÑA     */

if(empty($_POST["pass"])){
 echo "<script>alert('campo contraseña vacio');
 location.href='Registro.php';</script>";
       }


/*   VALIDAR CORREO     */
 if(empty($_POST["correo"])){
 echo "<script>alert('campo nombre vacio');
 location.href='Registro.php';</script>";
       }else{
    if (!preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/',$_POST["correo"] )) {
   echo "<script>alert('campo correo invalido');
   location.href='Registro.php';</script>";
       }
     }


        /*   VALIDAR APELLIDOS     */
        if(empty($_POST["apellidos"])){
            echo "<script>alert('campo apellidos vacio');
            location.href='Registro.php';</script>";
    }else{
            if (!preg_match("/^[a-zA-Z'-]+$/",$_POST["apellidos"] )) {
   echo "<script>alert('campo apellidos invalido');
    location.href='Registro.php';</script>";

        }
}
/*   VALIDAR TELEFONO     */
if(empty($_POST["telefono"])){
            echo "<script>alert('campo telefono vacio');
            location.href='Registro.php';</script>";
    }else{
            if (!preg_match("/^[0-9]*$/",$_POST["telefono"] )) {
   echo "<script>alert('campo telefono invalido');
    location.href='Registro.php';</script>";

        }
}

 function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }










$insertar = "INSERT INTO login VALUES (0,'$nombre',sha('$pass'),'$correo','$apellidos',$telefono)";
$query= mysqli_query($conectar,$insertar);

if($query){
    echo "<script> alert('Tu usuario se registro correctamente');
    location.href='login.php';
    </script>";
}else{
    echo "<script> alert('tu usuario se registro icorrectamente');
    location.href='Registro.php';
    </script>";

}
