var getDatos= function(){
 var correo = document.getElementById("correo").value;
var nombre = document.getElementById("nombre").value;
var Apellidos = document.getElementById("Apellidos").value;
var Telefono = document.getElementById("Telefono").value;
     if(correo==""){
        document.getElementById("correo").focus();

    }else{
        if(nombre==""){
            document.getElementById("nombre").focus();
        }else{

    if(Apellidos==""){
            document.getElementById("Apellidos").focus();
    }else{

    if(Telefono==""){
            document.getElementById("Telefono").focus();
            }else{
     if (/^[a-zA-Z ]+$/.test(nombre))
    {
        console.log("Nombre: " + nombre);

    }else{
        alert("Nombre incorrecto, solo se permiten letras");
    }


             if (/^[a-zA-Z ]+$/.test(Apellidos))
    {
        console.log("Apellidos: " + Apellidos);

    }else{
        alert("Apellidos incorrecto, solo se permiten letras");
    }






            if( Telefono(edad) ) {
    alert("Edad Incorrecta. La edad solo debe contener numeros");
   }else{
    console.log("Telefono: " + Telefono);
}
             validarEmail(correo);
        }
    }
     }
        }


  function validarEmail(valor) {
    if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
     alert("La dirección de email " + valor + " es correcta!.");
    } else {
     alert("La dirección de email es incorrecta!.");
    }
  }
}


