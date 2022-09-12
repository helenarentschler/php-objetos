<?php

class Pessoa {

    private $dados = array();

    public function __set($prop, $valor) {
        $this->dados[$prop] = $valor;
    }

    public function __get($prop) {
        return $this->dados[$prop];
    }

    public function __tostring() {
        return "Tentei imprimir o objeto";
    }

    public function __invoke() {
        return "Tentei imprimir o objeto como funçao";
    }
}

$pessoa = new Pessoa();

    //$prop - $valor
$pessoa->nome = "Helena"; //ativado o metodo __set, que fara atribuiçao a propriedade privada;

$pessoa->idade = 18;

echo $pessoa->nome;

echo $pessoa->idade;

echo $pessoa; //ativa metdo tostring

echo $pessoa(); //ativa metdo invoke