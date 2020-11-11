<?php

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "paginaweb";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn){
    die("no hay conexion: ".mysqli_connect_error());
}
$correo = $_POST["correo"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE correo = '".$correo."' and pass = '".$pass."'");
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
