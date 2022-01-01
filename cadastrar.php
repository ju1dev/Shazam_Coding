<?php
session_start();
include('conexao.php');

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count (*) as total from usuarios where username = '$usuario'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO `usuarios`(`username`, `password`, `name`, `data_cadastro`) VALUES ('$usuario','$senha','$nome',NOW())";

if ($conexao->query($sql) === TRUE ) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastro.php');
?>