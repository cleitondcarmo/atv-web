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

    <title>Menu - WEB I</title>
    <style rel="styleheet">
        @import url("style.css");
    </style>
        
    <link rel="styleheet" type="text/css" href="style.css"/>
</head>

<body class="imagem menu">
      
                        <div class="btn btn-outline" id="lc">
                            <a href=ListarClientes.php ><button style="background: transparent; border-radius: 6px; padding: 10px; cursor: pointer; color: black; border: none; font-size: 16px btn-responsive">Lista de clientes</button></a>
                        </div>
                        <div class="btn btn-outline h1" id="cadc">
                            <a href=CadastrarCliente.php><button style="background: transparent; border-radius: 6px; padding: 10px; cursor: pointer; color: black; border: none; font-size: 16px; btn-responsive">Cadastrar clientes</button></a>
                        </div>
                        <div class="btn btn-outline h1" id="vend">
                            <a href=CadastrarItensvenda.php><button style="background: transparent; border-radius: 6px; padding: 10px; cursor: pointer; color: black; border: none; font-size: 16px btn-responsive">Vender</button></a>
                        </div>
                        <div class="btn btn-outline" id="lp">
                            <a href=ListarProdutos.php><button style="background: #FFF502; border-radius: 6px; padding: 10px; cursor: pointer; color: black; border: none; font-size: 16px btn-responsive">Listar produtos</button></a>
                        </div>
                        <div class="btn btn-outline" id="cadp">
                            <a href=CadastrarProduto.php class=""><button style="background: #FFF502; border-radius: 6px; padding: 10px; cursor: pointer; color: black; border: none; font-size: 16px btn-responsive">Cadastrar produtos</button></a>
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
