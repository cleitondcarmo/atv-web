<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php';    //inclui arquivo DB

 abstract class CrudVenda extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $idcliente;
    
    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }
    public function getIdcliente() {
        return $this->idcliente;
    }
}
?>