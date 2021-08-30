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
    <style rel="styleheet">
        @import url("style.css");
    </style>
        
    <link rel="styleheet" type="text/css" href="style.css"/>
</head>

<body class="imagemalterardados">
   <?php
        $idproduto = $_POST['idproduto'];
        $nomeproduto = $_POST['nomeproduto'];
        $valor = $_POST['valor'];

        if (isset($_POST['alterarDados'])):
            {
                $Produtos = new Produtos;
                $Produtos->setNome($nomeproduto);
                $Produtos->setValor($valor);
                $Produtos->update($idproduto);
            }
        endif;
    ?>

    <form method='post' action="" style="margin-top: 20%">
        <label for='nomeproduto'> Nome:</label>
            <input type="text" name="nomeproduto" value="<?php echo $nomeproduto;?>"/>
        <label for='valor'> Valor: </label>
            <input type="Text" name="valor"value="<?php echo $valor;?>"/>
            <input type="hidden" name="idproduto"value="<?php echo $idproduto;?>"/>
        <div class="mb-3" style="margin: auto; margin-top: 2%">
            <button name="alterarDados" type="submit" style="background: black; border-radius: 6px; padding: 7px; cursor: pointer; color: yellow; border: none; font-size: 16px btn-responsive">Alterar dados</button>
            <a href=ListarProdutos.php style="background: black; border-radius: 6px; padding: 9px; cursor: pointer; color: yellow; border: none; font-size: 16px btn-responsive">Listar produtos</a>
        </div> 
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>