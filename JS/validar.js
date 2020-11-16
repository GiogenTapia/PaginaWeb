function validar(){
    var nombre,pass,correo,apellidos,telefono;
nombre=document.getElementById("nombre").value;
pass=document.getElementById("pass").value;
 correo=document.getElementById("correo").value;
apellidos=document.getElementById("apellidos").value;
 telefono=document.getElementById("telefono").value;

    if(nombre ===""){
       alert("El campo nombre esta vacío");
        return false;
       }

}
