<?php
namespace app;

class Produto{
    private $nome;
    private $precoMinimo;
    private $descricao;
    private $codigoProduto;
    private $fabricante;

    public function __construct($nome, $precoMinimo, $descricao, $codigoProduto, $fabricante) {
        $this->nome = $nome;
        $this->precoMinimo = $precoMinimo;
        $this->descricao = $descricao;
        $this->codigoProduto = $codigoProduto;
        $this->fabricante = $fabricante;
    }

    // Getters para acessar os atributos
    public function getNome() {
        return $this->nome;
    }

    public function getPrecoMinimo() {
        return $this->precoMinimo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCodigoProduto() {
        return $this->codigoProduto;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

}

?>