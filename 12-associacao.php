<?php

class Pedido {

    public $numero;
    public $cliente;

}

class Cliente {

    public $nome;
    public $endereco;

}


$cliente = new Cliente();

$cliente->nome = "Julia Andrade";

$cliente->endereco = "Rua Maria Rosa 988";


$pedido = new Pedido();

$pedido->numero = '45';

$pedido->cliente = $cliente;

$dados_pedido = array(

    numero => $pedido->numero,
    cliente => $pedido->cliente->nome,
    endereco => $pedido->cliente->endereco,

);

var_dump($dados_pedido);