<?php

#seta o namespace
namespace App\Model;

#classe conexao
class Connection {

    #propriedade que recebe objeto PDO
    private static $instance; 
    
    public static function getConn() {

        #se nao houver objeto PDO
        if (!isset(self::$instance)) {

            #cria instancia da classe PDO com infos do banco, gerando objeto responsavel pela conexao
            self::$instance = new \PDO("mysql:host=localhost;dbname=pdo;charset=utf8", "root", "root");

        } 

        #retorna objeto PDO
        return self::$instance;

    }
}