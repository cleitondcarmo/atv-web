<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Produtos.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        
    <title>Lista de Produtos - WEB I</title>
</head>

<body>
    <h1>Lista de Produtos</h1>
    <!-- Inicio da tabela -->
    <table class="table table-striped">
            <div>
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>Valor</th>
                    </tr>
                </thead>
            </div>
                <tbody>
                    <?php 
                    
                    $Produtos = New Produtos;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $idproduto = $_POST['idproduto'];
                        
                        $Produtos->delete($idproduto);
                    }
                                                         
                    


                    foreach ($Produtos->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->nomeproduto;?> </td>
                        <td> <?php echo $value->valor;?> </td>

                        <td>

                        <form method="post" action="AlterarProduto.php">
                                <input name="idproduto" type="hidden" value="<?php echo $value->idproduto;?>"/>                  
                                <input name="nomeproduto" type="hidden" value="<?php echo $value->nomeproduto;?>"/>
                                <input name="valor" type="hidden" value="<?php echo $value->valor;?>"/>

                                <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                         </form>
                        <td>
                            <form method="post" >
                                <input name="idproduto" type="hidden" value="<?php echo $value->idproduto;?>"/>
                                <button name="excluir" type="submit" class="btn btn-danger">Excluir</button>
                            </form>

                        </td>

                    </tr>

                    <?php } ?>
                </body>
            </table>
            <!-- Fim da tabela -->

    <div style="height: 50px;">
        <a class="btn btn-primary" href=Menu.php>Menu</a>
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
