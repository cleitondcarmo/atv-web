<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Clientes.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de alunos - WEB I</title>

</head>

<body>
   <?php

        $idcliente = $_POST['idcliente'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];


        if (isset($_POST['alterarDados'])):
            {
            $Clientes = new Clientes;
                $Clientes->setNome($nome);
                $Clientes->setEndereco($endereco);
                $Clientes->update($idcliente);
             }
         endif;
    ?>

    <form method='post' action="">
        <label for='nome'> Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome;?>"/>
        <label for='endereco'> Endereço: </label>
            <input type="Text" name="endereco"value="<?php echo $endereco;?>"/>
            <input type="hidden" name="idcliente"value="<?php echo $idcliente;?>"/>
                <input type="submit" name="alterarDados"/>
                <a href=ListarClientes.php>Lista de clientes</a>
                <a class="btn btn-primary" href=menu.php>Menu</a>

    </form>
</body>
</html>
