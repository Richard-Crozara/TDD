<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use app\Leilao;
use app\Produto;
use app\Leiloeiro;
use app\Usuario;

class LeilaoTest extends TestCase{

    public function testRegistrarLance() {
        $produto = new Produto('Celular', 500, 'Smartphone avançado', '12345', 'Fabricante X');
        $leiloeiro = new Leiloeiro('Leiloeiro 1');
        $leilao = new Leilao($produto, $leiloeiro);
        $usuario = new Usuario('João', 'joao@example.com');
    
        $leilao->registrarLance(200, $usuario);
        $lances = $leilao->getLances();
    
        $this->assertEquals('João', $lances[0]->getNomeUsuario());
    }
    
    public function testCalcularMediaDosLances() {
        $produto = new Produto('Laptop', 800, 'Notebook de alto desempenho', '54321', 'Fabricante Y');
        $leiloeiro = new Leiloeiro('Leiloeiro 3');
        $leilao = new Leilao($produto, $leiloeiro);
    
        $usuarioA = new Usuario('Usuário A', 'email.usuarioA@example.com');
        $usuarioB = new Usuario('Usuário B', 'email.usuarioB@example.com');
    
        $leilao->registrarLance(100, $usuarioA);
        $leilao->registrarLance(200, $usuarioB);
        $media = $leilao->calcularMediaDosLances();
    
        $this->assertEquals(150, $media);
    }

    public function testObterTresMaioresLances() {
        $produto = new Produto('Laptop', 800, 'Notebook de alto desempenho', '54321', 'Fabricante Y');
        $leiloeiro = new Leiloeiro('Leiloeiro 4');
        $leilao = new Leilao($produto, $leiloeiro);
    
        $usuarioA = new Usuario('Usuário A', 'email.usuarioA@example.com');
        $usuarioB = new Usuario('Usuário B', 'email.usuarioB@example.com');
        $usuarioC = new Usuario('Usuário C', 'email.usuarioC@example.com');
        $usuarioD = new Usuario('Usuário D', 'email.usuarioD@example.com');
    
        $leilao->registrarLance(100, $usuarioA);
        $leilao->registrarLance(200, $usuarioB);
        $leilao->registrarLance(250, $usuarioC);
        $leilao->registrarLance(150, $usuarioD);
        $lances = $leilao->obterTresMaioresLances();
    
        $this->assertCount(3, $lances);
        $this->assertEquals(250, $lances[0]->getValor());
        $this->assertEquals(200, $lances[1]->getValor());
        $this->assertEquals(150, $lances[2]->getValor());
    }

    public function testAssociarProdutoAoLeilao() {
        $produto = new Produto('Laptop', 800, 'Notebook de alto desempenho', '54321', 'Fabricante Y');
        $leiloeiro = new Leiloeiro('Leiloeiro 4');
        $leilao = new Leilao($produto, $leiloeiro);

        $this->assertSame($produto, $leilao->getProduto());
    }

    public function testAssociarUsuarioAoLance() {
        $produto = new Produto('Celular', 500, 'Smartphone avançado', '12345', 'Fabricante X');
        $leiloeiro = new Leiloeiro('Leiloeiro 1');
        $leilao = new Leilao($produto, $leiloeiro);
        $usuario = new Usuario('João', 'joao@example.com');

        $leilao->registrarLance(200, $usuario);
        $lances = $leilao->getLances();

        $this->assertEquals('João', $lances[0]->getNomeUsuario());
    }

    public function testAssociarLeiloeiroAoLeilao() {
        $produto = new Produto('Laptop', 800, 'Notebook de alto desempenho', '54321', 'Fabricante Y');
        $leiloeiro = new Leiloeiro('Leiloeiro 2');
        $leilao = new Leilao($produto, $leiloeiro);

        $this->assertEquals('Leiloeiro 2', $leilao->getLeiloeiro()->getNome());
    }
}
