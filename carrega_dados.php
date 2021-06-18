<?php
require './config.php';

if (isset($_POST["tipo"])) {
    if ($_POST["tipo"] == "cliente") {
        $sql = "
                SELECT * FROM cliente
                
                ";
        $cliente = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($cliente)) {
            $saida[] = array(
                'id' => $row["idcliente"],
                'nome' => $row["nome"]
            );
        }
        echo json_encode($saida);
    } 
    elseif ($_POST["tipo"] == "produto") {
        $sql = "
                SELECT * FROM produto
                ";
        $produto = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($produto)) {
            $saida[] = array(
                'id' => $row["idproduto"],
                'nome' => $row["nomeproduto"] . " - Em estoque: [" . $row["estoque"] . "] "
            );
        }
        echo json_encode($saida);
    }
}
?>

