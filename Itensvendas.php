<?php

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once 'CrudItensvenda.php';

 class Itensvendas extends CrudItensvenda {
    
    protected $tabela = 'itensvenda';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($iditensvenda) {
        $sql = "SELECT * FROM $this->tabela WHERE iditensvenda = :iditensvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (idvenda, idproduto) VALUES (:idvenda, :idproduto)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idvenda', $this->idvenda);
        $stm->bindParam(':idproduto', $this->idproduto);
        return $stm->execute();
    }
    
    //update de itens
    public function update($iditensvenda) {
        $sql = "UPDATE $this->tabela SET idvenda = :idvenda, idproduto = :idproduto WHERE iditensvenda = :iditensvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
        $stm->bindParam(':idvenda', $this->idvenda);
        $stm->bindParam(':idproduto', $this->idproduto);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($iditensvenda) {
        $sql = "DELETE FROM $this->tabela WHERE iditensvenda = :iditensvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>