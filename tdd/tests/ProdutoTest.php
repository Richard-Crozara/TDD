<?php

use PHPUnit\Framework\TestCase;
use app\Produto;

class ProdutoTest extends TestCase {
    public function testGetters() {
        // Crie uma instância da classe Produto
        $produto = new Produto("Produto de Teste", 10.0, "Descrição de teste", "12345", "Fabricante de Teste");

        // Teste os getters
        $this->assertEquals("Produto de Teste", $produto->getNome());
        $this->assertEquals(10.0, $produto->getPrecoMinimo());
        $this->assertEquals("Descrição de teste", $produto->getDescricao());
        $this->assertEquals("12345", $produto->getCodigoProduto());
        $this->assertEquals("Fabricante de Teste", $produto->getFabricante());
    }
}
?>