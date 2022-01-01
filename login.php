<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_escape_string($conexao, $_POST['senha']);

$query = "select user_id, username from usuarios where username = '{$usuario}' and password = md5('{$senha}');";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
} else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
}

?>