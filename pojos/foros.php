<?php
class Usuario {

    private $id;
    private $idUsuario;
    private $Titulo;
    private $Categoria;
    private $Contenido;
    private $Feha;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getidUsuario() {
        return $this->idUsuario;
    }

    public function setidUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
        return $this;
    }

    public function getCategoria() {
        return $this->Categoria;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
        return $this;
    }

    public function getContenido() {
        return $this->Contenido;
    }

    public function setContenido($Contenido) {
        $this->Contenido = $Contenido;
        return $this;
    }
    public function getFeha() {
        return $this->Feha;
    }

    public function setFeha($Feha) {
        $this->Feha= $Feha;
        return $this;
    }
    public function toArray() {
        return [
            'id' => $this->id,
            'idUsuario' => $this->idUsuario,
            'Categoria' => $this->Categoria,
            'Contenido' => $this->Contenido,
            'Feha' => $this->Feha,
        ];
    }

    public function toJson() {
        return json_encode($this->toArray());
    }

}
?>