<?php

class Pessoa {

    public $idade;

    public function __clone() {
        echo "objeto clonado";
    }
}

$pessoa = new Pessoa();

$pessoa->idade = 25;

$pessoa2 = $pessoa; //referencia

$pessoa2->idade = 30;

echo $pessoa->idade; //30

$pessoa3 = clone $pessoa; //clone - nova instancia da classe

$pessoa3->idade = 50;

echo $pessoa->idade; //30

