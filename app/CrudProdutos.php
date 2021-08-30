<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php';    //inclui arquivo DB

 abstract class CrudProdutos extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $nomeproduto;
    public $valor;
    
    public function setNome($nomeproduto) {
        $this->nomeproduto = $nomeproduto;
    }
    public function getNome() {
        return $this->nomeproduto;
    }
    
    
    public function setValor($valor) {
        $this->valor = $valor;
    }
    public function getValor() {
        return $this->valor;
    }
    
}
?>