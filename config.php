<?php
##salvar como config.php

##arquivo que contem variaveis que serão usadas no arquivo de configuração do BD

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'atvweb');
$HOST  =   'localhost';
$USER  =   'root';
$PASS  =   '';
$BASE  =   "atvweb";
$connection = mysqli_connect($HOST, $USER, 
$PASS,"$BASE");
?>


