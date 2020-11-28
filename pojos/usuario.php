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
        return $this->pass;
    }

    public function setContra($password) {
        $this->password = $password;
        return $this;
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function setNickname($nickname) {
        $this->nickname = $nickname;
        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'password' => $this->password,
            'nickname' => $this->nickname,
        ];
    }

    public function toJson() {
        return json_encode($this->toArray());
    }

}
?>