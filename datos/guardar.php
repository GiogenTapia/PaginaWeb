<?php
class guardar{

    public function insertarUsuario($usuario){

    require 'conexion.php';
    $nombre = $usuario->getNombre();
    $pass = $usuario->getContra();
    $correo=$usuario->getCorreo();
    $apellidos = $usuario->getApellido();
    $telefono = $usuario->getTelefono();
    
  
         /*   VALIDAR CONTRASEÑA     */
    
    if(empty($_POST["nombre"])){
     echo "<script>alert('campo nombre de usuario vacio');
     location.href='../html/Registro.php';</script>";
           }
    
         /*   VALIDAR CONTRASEÑA     */
    
    if(empty($_POST["pass"])){
     echo "<script>alert('campo contraseña vacio');
     location.href='../html/Registro.php';</script>";
           }
    
    
    /*   VALIDAR CORREO     */
     if(empty($_POST["correo"])){
     echo "<script>alert('campo nombre vacio');
     location.href='../html/Registro.php';</script>";
           }else{
        if (!preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/',$_POST["correo"] )) {
       echo "<script>alert('campo correo invalido');
       location.href='../html/Registro.php';</script>";
           }
         }
    
    
            /*   VALIDAR APELLIDOS     */
            if(empty($_POST["apellidos"])){
                echo "<script>alert('campo apellidos vacio');
                location.href='../html/Registro.php';</script>";
        }else{
                if (!preg_match("/^[a-zA-Z'-]+$/",$_POST["apellidos"] )) {
       echo "<script>alert('campo apellidos invalido');
       location.href='../html/Registro.php';</script>";
    
            }
    }
    /*   VALIDAR TELEFONO     */
    if(empty($_POST["telefono"])){
                echo "<script>alert('campo telefono vacio');
                location.href='../html/Registro.php';</script>";
        }else{
                if (!preg_match("/^[0-9]*$/",$_POST["telefono"] )) {
       echo "<script>alert('campo telefono invalido');
       location.href='../html/Registro.php';</script>";
    
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
        location.href='../html/login.php';
        </script>";
    }else{
        echo "<script> alert('tu usuario se registro icorrectamente');
        location.href='../html/Registro.php';
        </script>";
    
    }


    }
}


?>