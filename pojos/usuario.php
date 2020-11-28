<?php
class Usuario {

    private $id;
    private $Nombre;
    private $Pass;
    private $Correo;
    private $Apellido;
    private $Telefono;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function setCorreo($correo) {
        $this->Correo = $correo;
        return $this;
    }

    public function getContra() {
        return $this->Pass;
    }

    public function setContra($password) {
        $this->Pass = $password;
        return $this;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($nombre) {
        $this->Nombre = $nombre;
        return $this;
    }


    public function getApellido() {
        return $this->Apellido;
    }

    public function setApellido($apellido) {
        $this->Apellido = $apellido;
        return $this;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function setTelefono($telefono) {
        $this->Telefono = $telefono;
        return $this;
    }
  


}
?>