<?php

class Newsletter {

    public function cadastrarEmail($email) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            throw new Exception("Email invalido.", 1);
            
        } else {

            echo "Email cadastrado com sucesso.";

        }

    }

}

$newsletter = new Newsletter();


//try catch trata o erro e retorna apenas as infos do erros definidas em "catch"
try {

    $newsletter->cadastrarEmail('contato');

} catch (Exception $e) {

    //$e é uma intancia da classe Exception que guarda infos do erro resultante da operaçao
    echo $e->getMessage()."<br>";
    echo $e->getCode()."<br>";
    echo $e->getFile()."<br>";
    echo $e->getLine();

}
