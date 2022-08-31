<?php

//Abstract - classes que servem apenas como modelo, nao podems er instanciadas
//Metodos abstratos - obrigam as funçoes a terem eles

abstract class Banco {

    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s) {

        $this->saldo = $s;

    }

    public function getSaldo() {

        return $this->saldo;

    }

    abstract protected function depositar($deposito);

    abstract protected function sacar($saque);

}

class Itau extends Banco {

    public function depositar($deposito) {

        $this->saldo += $deposito; 

    }

    public function sacar($saque) {

        $this->saldo -= $saque;
        
    }

}

$itau = new Itau();

$itau->setSaldo(1000);
$itau->sacar(250);
echo $itau->getSaldo();