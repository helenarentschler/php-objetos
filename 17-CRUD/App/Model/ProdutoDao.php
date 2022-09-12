<?php

namespace App\Model;

#metodos CRUD para o produto
class ProdutoDao {

    #create recebe um objeto Produto como parametro
    public function create(Produto $p) {
        
        #sql para inserçao de dados na tabela produtos       (bind values)
        $sql = "INSERT INTO produtos (nome, descricao) VALUES (?,?)";

        #recebe objeto PDO e usa o metodo prepare passando o sql
        $stmt = Connection::getConn()->prepare($sql);
        
        #associa ao dado nome a propriedade nome do objeto 
        $stmt->bindValue(1, $p->getNome());

        #associa ao dado descricao a propriedade descricao do objeto 
        $stmt->bindValue(2, $p->getDescricao());

        #efetua a opreòao no banco
        $stmt->execute();
    }
    
    public function read() {

        $sql = "SELECT * FROM produtos";

        $stmt = Connection::getConn()->prepare($sql);

        $stmt->execute();

        #se a busca retornar mais que 1 linha
        if ($stmt->rowCount() > 0) {
            #tranforma resultado em array
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;

        } else {
            #retorna array vazio para nao dar erro no loop
            return [];
        }
    }

    public function update(Produto $p) {
        
        $sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?";
        
        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getNome());

        $stmt->bindValue(2, $p->getDescricao());

        $stmt->bindValue(3, $p->getId());

        $stmt->execute();

    }

    public function delete($id) {

        $sql = "DELETE FROM produtos WHERE id = ?";

        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }


}