<?php

require 'conexion.php';
session_start();
if (!$conectar){
    die("no hay conexion: ".mysqli_connect_error());
}
$correo = $_POST["correo"];
$pass = $_POST["pass"];


$query = mysqli_query($conectar,"SELECT * FROM login WHERE correo = '".$correo."' and pass = sha('".$pass."')");

$nr= mysqli_num_rows($query);

if($nr == 1)
{

    header("location: perfil.php");

}
else if( $nr == 0)
{
    echo "No ingreso";
}
?>
