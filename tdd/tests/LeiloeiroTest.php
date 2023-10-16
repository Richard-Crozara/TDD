<?php
use PHPUnit\Framework\TestCase;
use app\Leiloeiro;

class LeiloeiroTest extends TestCase {
    public function testGetNome() {
        // Crie uma instância da classe Leiloeiro
        $leiloeiro = new Leiloeiro("Exemplo de Nome do Leiloeiro");

        // Teste o getter
        $this->assertEquals("Exemplo de Nome do Leiloeiro", $leiloeiro->getNome());
    }
}

?>