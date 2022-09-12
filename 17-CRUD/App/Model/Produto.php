<?php

namespace App\Model;

#propriedades e metodos do Produto em si 
class Produto {

    private  $id, $nome, $descricao;

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($desc) {
        $this->descricao = $desc;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

}