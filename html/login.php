<?p

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "test";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn){
    die("no hay conexion: ").mysqli_connect_error());
}
$nombre = $_POST[""];
$pass = $_POST[""];

$query= mysqli_query($conn,"SELECT * FROM login WHERE usuario='".$nombre."' and password='".$pass."'");
$nr= mysqli_num_rows($query);

if($nr == 1)
{
    echo "Bienvenido: " .$nombre;

}
else if( $nr == 0)
{
    echo: "No ingreso";
}
?>
