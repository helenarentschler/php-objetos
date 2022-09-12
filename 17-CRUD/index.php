<?php

require_once "vendor/autoload.php";

$produto = new \App\Model\Produto();

$produto->setId(7);

$produto->setNome("Mac");

$produto->setDescricao("mac air M1");

$produtoDao = new \App\Model\ProdutoDao();

foreach ($produtoDao->read() as $prod) {
    echo $prod["nome"]."<br>".$prod["descricao"]."<hr>";
}

$produtoDao->delete(7);