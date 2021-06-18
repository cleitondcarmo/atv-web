<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Clientes.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style rel="styleheet">
        @import url("style.css");
    </style>
        
    <link rel="styleheet" type="text/css" href="style.css"/>
    <title >Lista de Clientes - WEB I</title>
</head>

<body class="imagemcliente menu">
    <!-- Inicio da tabela -->
    <div>
        <table class=" table table-striped table-bordered table-sm table table-dark " style="margin: auto; margin-top: 10%">
            <div class="mb-3"> 
            <div>
                <thead class="thead-black">
                    <tr class="table-active">
                        <th scope="col" width=30%>Cliente</th>
                        <th scope="col" width=30%>Endereço</th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                    </tr>
                </thead>
            </div>
                <tbody>
                    <?php 
                    
                    $Clientes=New Clientes;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $idcliente = $_POST['idcliente'];
                        
                        $Clientes->delete($idcliente);
                    }

                    foreach ($Clientes->findAll() as $key => $value) { ?>
          
                    <tr>
                    <div>
                        <td> <?php echo $value->nome;?> </td>
                        <td> <?php echo $value->endereco;?> </td>
                    </div>
                        <td>

                        <form method="post" action="AlterarCliente.php">
                            <div>
                            <input name="idcliente" type="hidden" value="<?php echo $value->idcliente;?>"/>                  
                            <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                            <input name="endereco" type="hidden" value="<?php echo $value->endereco;?>"/>

                            <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                            </div>
                        </form>
                        <td>
                            <form method="post">
                            <div>
                                <input name="idcliente" type="hidden" value="<?php echo $value->idcliente;?>"/>
                                <button name="excluir" type="submit" class="btn btn-danger">Excluir</button>
                            </div>
                            </form>

                        </td>
                    </tr> 
               </div>     
    </div>
     <?php } ?>
    </table>   
</body>

            <!-- Fim da tabela -->

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
