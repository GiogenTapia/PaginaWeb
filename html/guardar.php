<?php


require 'conexion.php';

$correo = $_POST['correo'];
$pass = $_POST['pass'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];

$insertar = "INSERT INTO login VALUES (0,'$correo',sha('$pass'),'$nombre','$apellidos',$telefono)";
$query= mysqli_query($conectar,$insertar);

if($query){
    echo "<script> alert('Tu usuario se registro correctamente');
    location.href='login.html';
    </script>";
}else{
    echo "<script> alert('tu usuario se registro icorrectamente');
    location.href='Registro.html';
    </script>";

}
