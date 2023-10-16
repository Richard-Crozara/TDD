<?php
use PHPUnit\Framework\TestCase;
use app\Lances;
use app\Usuario;

class LancesTest extends TestCase {
    public function testGetters() {
        // Crie uma instância da classe Usuario
        $usuario = new Usuario("Exemplo de Nome", "exemplo@email.com");

        // Crie uma instância da classe Lances
        $lance = new Lances(100, $usuario);

        // Teste os getters
        $this->assertEquals(100, $lance->getValor());
        $this->assertEquals("Exemplo de Nome", $lance->getNomeUsuario());
    }
}

?>