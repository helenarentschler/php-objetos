<?php
    class Pessoa {
        public $nome;
        public $idade;
        public function falar() {
            echo "$this->nome, de $this->idade anos, falou";
        }
    }

    $rodrigo = new Pessoa();

    $rodrigo->nome = "Rodrigo";

    $rodrigo->idade = 18;

    $rodrigo->falar();

    echo "<hr>";

    var_dump($rodrigo);

?>