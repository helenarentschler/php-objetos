<?php

// - Cliente: código, nome, cpf, endereco, telefone e email
// - Produto: código, descricao, valor de custo, valor de venda, quantidade em estoque
 
// Utilizando da linguagem PHP, implemente as duas classes, instanciando um objeto para cada uma delas, utilizando para isso os seus construtores, e todos os seus atributos devem ser públicos. Não é necessário implementar os métodos assessores, realizar validações, e nem utilizar formulários.

class Cliente {

    public $dados = array();

    public function __construct($código, $nome, $cpf, $endereco, $telefone, $email) {
        $this->dados['codigo'] = $código;
        $this->dados['nome'] = $nome;
        $this->dados['cpf'] = $cpf;
        $this->dados['endereco'] = $endereco;
        $this->dados['telefone'] = $telefone;
        $this->dados['email'] = $email;
    }
}

class Produto {

    public $dados = array();

    public function __construct($código, $descricao, $custo, $venda, $estoque) {
        $this->dados['codigo'] = $código;
        $this->dados['descricao'] = $descricao;
        $this->dados['custo'] = $custo;
        $this->dados['venda'] = $venda;
        $this->dados['estoque'] = $estoque;
    }
}

$cliente = new Cliente(1234, 'Paulo Andrade', 12345678901, 'Rua Rosa Maria 24', 999999999, 'pauloandrade@gmail.com');

$produto = new Produto(1234, 'notebook acer 1000GB 4RAM', 123, 163, 4);

var_dump($cliente, $produto);