<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA','');
define('DB','login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('não foi possível se conectar')
?>