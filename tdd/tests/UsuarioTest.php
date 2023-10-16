<?php
use PHPUnit\Framework\TestCase;
use app\Usuario;

class UsuarioTest extends TestCase {
    public function testGetters() {
        // Crie uma instância da classe Usuario
        $usuario = new Usuario("Exemplo de Nome", "exemplo@email.com");

        // Teste os getters
        $this->assertEquals("Exemplo de Nome", $usuario->getNome());
        $this->assertEquals("exemplo@email.com", $usuario->getEmail());
    }
}
?>