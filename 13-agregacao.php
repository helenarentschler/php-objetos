<?php

class Produto {

    public $nome;
    public $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

}

class Carrinho {

    public $produtos;

    //agregaçao: argumento produto deve ser uma instancia de Produto
    public function adicionarProduto(Produto $produto) {

        $this->produtos[] = $produto;

    }

    public function exibirProdutos() {

        foreach ($this->produtos as $produto) {
            echo $produto->nome.'<br>';
            echo $produto->valor.'<hr>';
        }

    }

}

$produto1 = new Produto("Macbook", "10000");
$produto2 = new Produto("Mouse", "50");

$carrinho = new Carrinho();

$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);

$carrinho->exibirProdutos();