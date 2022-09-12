<?php

class Pessoa {

    const nome = "Helena";

    public function exibirNome() {
        echo self::nome;
    }
}

class Helena extends Pessoa {

    const nome = "Rentschler";

    public function exibirNome() {
        echo parent::nome." ".self::nome;
    }
}

$helena = new Helena;

$helena->exibirNome();