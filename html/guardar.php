<?php


require 'conexion.php';

$correo = $_POST['nombre'];
$pass = $_POST['pass'];
$nombre = $_POST['correo'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];

$insertar = "INSERT INTO login VALUES (0,'$nombre',sha('$pass'),'$correo','$apellidos',$telefono)";
$query= mysqli_query($conectar,$insertar);

if($query){
    echo "<script> alert('Tu usuario se registro correctamente');
    location.href='login.php';
    </script>";
}else{
    echo "<script> alert('tu usuario se registro icorrectamente');
    location.href='Registro.html';
    </script>";

}
