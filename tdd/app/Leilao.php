<?php

namespace app;

class Leilao{

    private $lances = [];
    private $leiloeiro;
    private $usuario;

    public function __construct(Produto $produto, Leiloeiro $leiloeiro) {
        $this->produto = $produto;
        $this->leiloeiro = $leiloeiro;
    }



    public function registrarLance($valor, Usuario $usuarioNome) {
        $this->lances[] = new Lances($valor, $usuarioNome);
        
    }

    public function calcularMediaDosLances() {
        $total = 0;
        foreach ($this->lances as $lance) {
            $total += $lance->getValor();
        }
        return count($this->lances) > 0 ? $total / count($this->lances) : 0;
    }

    public function obterTresMaioresLances() {
        usort($this->lances, function ($a, $b) {
            return $b->getValor() - $a->getValor();
        });
        return array_slice($this->lances, 0, 3);
    }

    public function getLances() {
        return $this->lances;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function getLeiloeiro() {
        return $this->leiloeiro;
    }
}

?>