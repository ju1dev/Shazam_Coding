<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
		if (isset($_SESSION['usuario_existe'])):
		
		
	?>
	<div class="position-absolute top-50 start-50 translate-middle">
		
		<div class="alert alert-warning">
			<p>Nome de usuário existente</p>
		</div>
		<?php
			endif;
			unset($_SESSION['usuario_existe'])
		?>

		<h2 class="bg-primary text-light text-center">Cadastro</h2>
		<form method="post" action="cadastrar.php">
			<input class="d-block p-2" type="text" name="nome" placeholder="nome" style="margin-left: 1px;">
			<input class="d-block p-2" type="text" name="usuario" placeholder="usuário" style="margin-left: 1px;">
			<input class="d-block p-2" type="password" name="senha" placeholder="senha" style="margin-left: 1px;">
			<button class="btn btn-primary position-absolute start-50" type="submit" style="margin-top: 2px;">Cadastrar</button>
			<a href="index.php">Voltar</a>
		</form>
	</div>




</body>
</html>