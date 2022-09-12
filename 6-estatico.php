<?php

// Nao precisa instanciar a classe

class Login {

    public static $user;

    public static function verificalogin() {

        echo "O usuario ".self::$user." esta logado!";

    }

    public function sairSistema() {
        echo "O usuario deslogou.";
    }

}

Login::$user = "Tiago";
Login::verificalogin();

$login = new Login();

$login->sairSistema();