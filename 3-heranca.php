<?php

class Veiculo {

    public $modelo;
    public $cor;
    public $ano;
    protected $placa;

    public function andar() {
        echo "andou";
    }

    public function parar() {
        echo "parou";
    }

}

class Moto extends Veiculo {

    public function darGrau() {
        echo "VRAU";
    }

    public function setPlaca($p) {
        $this->placa = $p;
    }

}

class Carro extends Veiculo {

    public function ligarLimpador() {
        echo "ligando";
    }

}


$celta = new Carro();

$celta->modelo = 'celta';

$celta->cor = 'prata';

$celta->ano = 2001;

$celta->andar();

$celta->ligarLimpador();

var_dump($celta);


$suzuki = new Moto();

$suzuki->modelo = 'suzuki';

$suzuki->cor = 'preta';

$suzuki->ano = 2005;

$suzuki->parar();

$suzuki->darGrau();

$suzuki->setPlaca("ALY975");

var_dump($suzuki);
