<!DOCTYPE html>
<?php
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página de login</title>
	<link rel="stylesheet" href="estilo/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle">

	<?php
	//Caso o usuário insira dados inválidos a sessão é dada como não autenticada e um aviso em html aparece//
		if (isset($_SESSION['nao_autenticado'])):
		
		
	?>
	<div class="bg-danger bg-gradient text-light">
	<p>Usuário ou senha inválidos</p>
	</div><!--Aviso de usuário ou senha inválidos-->
	<?php
	//Caso insira os dados certos a sessão é encerrada e o aviso some//
		endif;
		unset($_SESSION['nao_autenticado']);
	?>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input type="text" name="usuario" placeholder="nome de usuário">
		<input type="password" name="senha" placeholder="senha">
		<button type="submit" >Entrar</button>
	</form>
	<a class="text-dark" href="cadastro.php">Criar conta</a>
</div>
</body>
</html>