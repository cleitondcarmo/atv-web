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

    <title>Cadastrar produto - WEB I</title>

</head>

<body>
   <?php
        $Produtos = new Produtos;
        if(isset($_POST['cadastrar'])):
            $nomeproduto = $_POST['nomeproduto'];
            $valor = $_POST['valor'];

            $Produtos->setNome($nomeproduto);
            $Produtos->setValor($valor);

            if($Produtos->insert()){
                echo "Produto ". $nomeproduto. " inserido com sucesso";
            }
        endif;
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method='post' action="">
                    <h1>Cadastro de produtos</h1>
                    <div class="mb-3">
                        <label for='Nome'> Nome:</label>
                        <input type="text" name="nomeproduto" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for='valor'> Valor: </label>    
                        <input type="text" name="valor" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="cadastrar" class="btn btn-primary"/>
                        <a class="btn btn-primary" href=menu.php>Voltar ao menu</a>
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