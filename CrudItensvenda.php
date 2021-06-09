<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php';    //inclui arquivo DB

 abstract class CrudItensvenda extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $idvenda;
    public $idproduto;
    
    public function setIdproduto($idproduto) {
        $this->idproduto = $idproduto;
    }
    public function getIdproduto() {
        return $this->idproduto;
    }
    
    
    public function setIdvenda($idvenda) {
        $this->idvenda = $idvenda;
    }
    public function getIdvenda() {
        return $this->idvenda;
    }
    
}
?>