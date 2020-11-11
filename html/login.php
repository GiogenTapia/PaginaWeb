<?php

require 'conexion.php';

if (!$conectar){
    die("no hay conexion: ".mysqli_connect_error());
}
$correo = $_POST["correo"];
$pass = $_POST["pass"];

$query = mysqli_query($conectar,"SELECT * FROM login WHERE correo = '".$correo."' and pass = '".$pass."'");

$nr= mysqli_num_rows($query);

if($nr == 1)
{
    echo "Bienvenido: " .$correo;

}
else if( $nr == 0)
{
    echo "No ingreso";
}
?>
