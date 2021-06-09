<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Produtos.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <title>cadastro de alunos - WEB I</title>

</head>

<body>
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

    <form method='post' action="">
        <label for='nomeproduto'> Nome:</label>
            <input type="text" name="nomeproduto" value="<?php echo $nomeproduto;?>"/>
        <label for='valor'> Valor: </label>
            <input type="Text" name="valor"value="<?php echo $valor;?>"/>
            <input type="hidden" name="idproduto"value="<?php echo $idproduto;?>"/>
                <input type="submit" name="alterarDados"/>
                <a href=ListarProdutos.php>Lista de produtos</a>
                <a class="btn btn-primary" href=menu.php>Menu</a>

    </form>
</body>
</html>