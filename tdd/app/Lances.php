<?php

namespace app;

class Lances{
    private $valor;
    private $usuario; 

    public function __construct($valor, Usuario $usuario) {
        $this->valor = $valor;
        $this->usuario = $usuario;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getNomeUsuario() {
        return $this->usuario->getNome();
    }
}

?>