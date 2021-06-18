<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Clientes.php';
require_once 'Produtos.php';
require_once 'Itensvendas.php';
require_once 'Vendas.php';
?>
<!DOCTYPE html>
<html>
    <head lang="pt-br">
    <style rel="styleheet">
        @import url("style.css");
    </style>

        <title>DO CARMO SHOPPING</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap-select.min.css">
        <script src="js/bootstrap-select.min.js"></script>
        <script>
            $(document).ready(function () {

                $('select').selectpicker();

                //$('#cidades').selectpicker();

                carrega_dados('cliente');
                carrega_dados('produto');

                function carrega_dados(tipo){
                    $.ajax({
                        url: "carrega_dados.php",
                        method: "POST",
                        data: {tipo: tipo},
                        dataType: "json",
                        success: function (data)
                        {
                            var html = '';
                            for (var count = 0; count < data.length; count++){
                                html += '<option value="' + data[count].id + '">' + data[count].nome + '</option>';
                            }
                            if (tipo == 'cliente'){
                                $('#idcliente').html(html);
                                $('#idcliente').selectpicker('refresh');
                            } 
                            if (tipo == 'produto') {
                                $('#idproduto').html(html);
                                $('#idproduto').selectpicker('refresh');
                            
                            }
                        }
                    })
                }

                $(document).on('#idcliente', '#idproduto', function () {
                    $('#idcliente').val();
                    carrega_dados('cliente');

                    $('#idproduto').val();
                    carrega_dados('produto');
                });

            });
        </script>
    </head>
    <body class="imagempadrao menu">
        <?php    
        if(isset($_GET['adicionar'])):
            $idproduto = (int) $_GET['adicionar'];
            if(isset($Produtos[$idproduto])){
                if(isset($_SESSION[$idproduto])){
                    $_SESSION[$idproduto]['quantidade']++;
                }    
                else{
                    $_SESSION[$idproduto] = array('quantidade'=>1, 'nomeproduto'=>$Produtos[$idproduto]['nomeproduto'], 'valorvenda'=>$Produtos[$idproduto]['valorvenda']);
                } 
                echo "cadastrado";
            }
            else{
                die('Erro');
            }

        endif;
        ?>
      

    <?php                   

         $Clientes = New Clientes;
         $Produtos= New Produtos;
         $Vendas = New Vendas;
         $Itensvendas = New Itensvendas;

         if(isset($_POST['cadastro'])):
            $idcliente = $_POST['cliente'];

            $Vendas->setIdcliente($idcliente);  

            foreach ($Vendas->findAll() as $key => $valu) { 
                foreach ($Clientes->findAll() as $key => $value) { 
                    if($value->idcliente == $valu->idcliente){
                        $variavel = $valu->idvenda;
                        $nomecliente = $value->nome;
                    }
                }
            }

            if($Vendas->insert()){
                $idvenda = $variavel;
                $idproduto = $_POST['produto'];
                $valorvenda = $_POST['valorvenda'];
                $quantidade = $_POST['quantidade'];

                $Itensvendas->setIdvenda($idvenda);  
                $Itensvendas->setIdproduto($idproduto);  
                $Itensvendas->setValorvenda($valorvenda);  
                $Itensvendas->setQuantidade($quantidade);  
            }
            if($Itensvendas->insert()){
                echo "Venda concluída com sucesso";
            }
        
        endif;
        ?>
        <br />
        <div class="container" style="background: black; margin-top: 8%">
            <br />
            <div class="panel panel-default" >
                <div class="panel-body" >
                    <form method='post' action="" >
                        <div class="form-group">
                            <label>SELECIONE O CLIENTE:</label>
                            <select name="cliente" id="idcliente" class="form-control input-lg" data-live-search="true" title="Selecione o cliente"></select>
                        </div>
                        <div class="form-group">
                            <label>SELECIONE O PRODUTO:</label>
                            <select name="produto" id="idproduto" class="form-control input-lg" data-live-search="true" title="Selecione o produto"></select>
                        </div>
                        <div class="form-group">
                            <label>Quantidade:</label>
                            <input type="text" name="quantidade" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Valor:</label>
                            <input type="text" name="valorvenda" class="form-control"/>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="cadastro" class="btn btn-primary" style="background: black"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

