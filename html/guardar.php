<?php

require 'conexion.php';
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];

$insertar = "INSERT INTO login VALUES ('$correo','$pass','$nombre','$apellidos',$telefono)";
$query= mysqli_query($conectar,$insertar);

if($query){
    echo "<script> alert('correcto');</script>";
}else{
    echo "<script> alert('incorrecto');</script>";

}
