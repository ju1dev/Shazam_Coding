<?php
session_start();
include('conexao.php');
/* #Desruir  a sessão caso exista, para uma nova operação
if (isset($_SESSION['usuario_existe'])){
	session_destroy('usuario_existe');
}*/

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

//Prepara a query pra verificar se usuário já existe na tabela
$sql = "select count(*) as total from usuarios where username = '$usuario'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

//Caso exista: iniciada sessão de usuário existente//
if($row['total'] >= 1) {
	$_SESSION['usuario_existe'] = true;
	echo"
		<script> 
			alert('Este usuario ja consta NO BANCO DE DADOS');
			window.location.href = \"cadastro.php\";
		</script>
	";
	exit;
}

//Caso contrário: Cadastro realizado//
$sql = "INSERT INTO `usuarios`(`username`, `password`, `name`, `data_cadastro`) VALUES ('$usuario','$senha','$nome',NOW())";

if ($conexao->query($sql) === TRUE ) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastro.php');
?>