<?php

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once 'CrudVenda.php';

 class Vendas extends CrudVenda {
    
    protected $tabela = 'venda';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idvenda) {
        $sql = "SELECT * FROM $this->tabela WHERE idvenda = :idvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (idcliente) VALUES (:idcliente)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcliente', $this->idcliente);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idvenda) {
        $sql = "UPDATE $this->tabela SET idcliente = :idcliente WHERE idvenda = :idvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        $stm->bindParam(':idcliente', $this->idcliente);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idvenda) {
        $sql = "DELETE FROM $this->tabela WHERE idvenda = :idvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>