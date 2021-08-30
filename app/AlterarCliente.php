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
</head>

<body class="imagemalterardados">
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

    <form method='post' action="" style="margin-top: 20%">
        <label for='nome'> Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome;?>"/>
        <label for='endereco'> Endereço: </label>
            <input type="Text" name="endereco"value="<?php echo $endereco;?>"/>
            <input type="hidden" name="idcliente"value="<?php echo $idcliente;?>"/>
            <div class="mb-3" style="margin: auto; margin-top: 2%">
                <button name="alterarDados" type="submit" style="background: black; border-radius: 6px; padding: 7px; cursor: pointer; color: yellow; border: none; font-size: 16px btn-responsive">Alterar dados</button>
                <a href=ListarClientes.php style="background: black; border-radius: 6px; padding: 9px; cursor: pointer; color: yellow; border: none; font-size: 16px btn-responsive">Listar clientes</a>
            </div>
    </form>
</body>
</html>
