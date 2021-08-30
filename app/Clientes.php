<?php

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once 'CrudClientes.php';

 class Clientes extends CrudClientes {
    
    protected $tabela = 'cliente';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idcliente) {
        $sql = "SELECT * FROM $this->tabela WHERE idcliente = :idcliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome, endereco) VALUES (:nome, :endereco)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idcliente) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE idcliente = :idcliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idcliente) {
        $sql = "DELETE FROM $this->tabela WHERE idcliente = :idcliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>