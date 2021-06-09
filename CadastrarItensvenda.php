<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Clientes.php';
require_once 'Produtos.php';
require_once 'Itensvendas.php';
require_once 'Vendas.php';
include_once 'config.php';
    $select = "SELECT * FROM produto";
    $result = mysqli_query ($connection, $select);
    $select2 = "SELECT * FROM cliente";
    $result2 = mysqli_query ($connection, $select2);
?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Vender WEB I</title>
</head>

<body>
    <?php
        $Clientes= New Clientes;
        $Produtos= New Produtos;
        $Vendas = New Vendas;
        $Itensvendas = New Itensvendas;
      
        if(isset($_POST['cad'])):
            $idcliente = $_POST['idcliente'];

            $Vendas->setIdcliente($idcliente);  

            if($Vendas->insert()){
                echo "Cliente ". $idcliente. " inserido com sucesso";
            }

            foreach ($Vendas->findAll() as $key => $valu) { 
                foreach ($Clientes->findAll() as $key => $value) { 
                    if($value->idcliente == $valu->idcliente){
                        $variavel = $valu->idvenda;
                    }
                }
            }
            echo "Cliente ". $variavel. " aqui";
            $idvenda = $variavel;
            $idproduto = $_POST['idproduto'];

            $Itensvendas->setIdvenda($idvenda);  
            $Itensvendas->setIdproduto($idproduto);  

            header('Refresh:5'); 
            
            if($Itensvendas->insert()){
                echo "Cliente ". $idvenda. " inserido com sucesso";
            }
        endif;
    ?>

    <table class="table table-striped">
        <form>
            <div class="mb-3"> 
            <div>
                <thead>
                    <tr>
                        <th scope="col">Nome do cliente</th>
                        <th scope="col">ID do cliente</th>
                    </tr>
                </thead>
            </div>
                <?php foreach ($Clientes->findAll() as $key => $value) { ?>
                    <form>
                    <td> <?php echo $value->nome;?> </td>
                    <td> <?php echo $value->idcliente;?> </td>
                    </form>  
                    </tr>   
                <?php } ?>     
            </div>

            <div class="mb-3">  
            <div>
                <thead>
                    <tr>
                        <th scope="col">Nome do produto</th>
                        <th scope="col">ID do produto</th>
                    </tr>
                </thead>
            </div>               
                <?php foreach ($Produtos->findAll() as $key => $value) { ?>
                    <tr>
                        <form>
                            <td> <?php echo $value->nomeproduto;?> </td>
                            <td> <?php echo $value->idproduto;?> </td>
                        </form>  
                    </tr>          
                <?php } ?>  
            </div>
        </form>
    </table>

    <div class="container">
        <div class="row">
            <div class="col">
            <form method='post' action="">
            <h1>Vender</h1>
              <div class="mb-3">
                        <label for='Digite o ID do cliente'> Digite o ID do cliente:</label>
                        <input type="hiddan" name="idcliente" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for='Digite o ID do produto'> Digite o ID do produto: </label>    
                        <input type="hiddan" name="idproduto" class="form-control"/>
                    </div>
                    <form method='post' action="">
                    <div class="mb-3">
                        <input type="submit" name="cad" class="btn btn-primary"/>
                        <a class="btn btn-primary" href=menu.php> Voltar ao menu</a>
                    </div>
            </form>
            </div>
        </div>
    </div>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
</html>