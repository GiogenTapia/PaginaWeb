var getDatos= function(){

    var nombre= document.getElementById("nombre").value;
    var edad = document.getElementById("edad").value;
     var correo = document.getElementById("correo").value;
    if(nombre==""){
        document.getElementById("nombre").focus();

    }else{
        if(edad==""){
            document.getElementById("edad").focus();
        }else{
            if (/^[a-zA-Z ]+$/.test(nombre))
    {
        console.log("Nombre: " + nombre);

    }else{
        alert("Nombre incorrecto, solo se permiten letras");
    }
            if( isNaN(edad) ) {
    alert("Edad Incorrecta. La edad solo debe contener numeros");
   }else{
    console.log("Edad: " + edad);
}
             validarEmail(correo);
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



