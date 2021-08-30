<?php
##salvar como config.php

##arquivo que contem variaveis que serão usadas no arquivo de configuração do BD

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'atvweb');
$servername = "localhost";
$database = "atvweb";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Falha na conexão: " . mysli_connect_error());
};
?>





