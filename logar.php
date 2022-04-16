<?php
session_start();
include('conexao.php');

//Caso não coloque os dados e aperte login será redirecionado para index (essa página no caso)//
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}


$usuario = mysqli_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_escape_string($conexao, $_POST['senha']);

//Prepara a query para selecionar o usuário da tabela de acordo com o username e a senha//
$query = "select user_id, username from usuarios where username = '{$usuario}' and password = md5('{$senha}');";

//executa a query no banco de dados selecionado//
$result = mysqli_query($conexao, $query);

//Verifica se existe uma linha com os dados de usuário//
$row = mysqli_num_rows($result);

//Se a linha existir: iniciar a sessão do usuário e direcionar pro painel//
if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	echo "<script>
			window.location.replace(\"painel.php\");
		</script>";

}
//Caso contrário: inicia sessão de usuário não autenticado//
 else{
	$_SESSION['nao_autenticado'] = true;
	echo "<script>
			window.location.replace(\"login.php\");
		</script>";
}

?>