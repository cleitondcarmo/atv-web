<?php

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once 'CrudProdutos.php';

 class Produtos extends CrudProdutos {
    
    protected $tabela = 'produto';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idproduto) {
        $sql = "SELECT * FROM $this->tabela WHERE idproduto = :idproduto";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idproduto', $idproduto, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (nomeproduto, valor) VALUES (:nomeproduto, :valor)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nomeproduto', $this->nomeproduto);
        $stm->bindParam(':valor', $this->valor);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idproduto) {
        $sql = "UPDATE $this->tabela SET nomeproduto = :nomeproduto, valor = :valor WHERE idproduto = :idproduto";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idproduto', $idproduto, PDO::PARAM_INT);
        $stm->bindParam(':nomeproduto', $this->nomeproduto);
        $stm->bindParam(':valor', $this->valor);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idproduto) {
        $sql = "DELETE FROM $this->tabela WHERE idproduto = :idproduto";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idproduto', $idproduto, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>