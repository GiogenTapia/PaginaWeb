<?php

require 'conexion.php';
session_start();
if (!$conectar){
    die("no hay conexion: ".mysqli_connect_error());
}
$nombre = $_POST["nombre"];
$pass = $_POST["pass"];


$query = mysqli_query($conectar,"SELECT * FROM login WHERE nombre = '".$nombre."' and pass = sha('".$pass."')");

$nr= mysqli_num_rows($query);

if($nr == 1)
{

    $_SESSION['nombre']=$nombre;
    header("location: perfil.php");

}
else if( $nr == 0)
{
    echo "No ingreso";
}
?>
