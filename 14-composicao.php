<?php

class Frase {

    public function exibeFrase($nome) {
        echo "O nome é $nome";
    }

}

class Pessoa {

    public $nome;
    public $frase;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->frase = new Frase();
    }

    public function exibeFrase() {
        $this->frase->exibeFrase($this->nome);
    }

}

$pessoa1 = new Pessoa("John");

$pessoa1->exibeFrase();

