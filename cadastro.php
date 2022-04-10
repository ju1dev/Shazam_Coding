<?php
session_start();
include('header.php');
?>
<div class="container">
	<div class="row justify-content-center">
	<?php
		if (isset($_SESSION['usuario_existe'])):
		
		
	?>
	
		
		<div class="alert alert-warning">
			<p>Nome de usuário existente</p>
		</div>		
		<?php
			endif;
			unset($_SESSION['usuario_existe'])
		?>

		
		<form method="post" action="cadastrar.php">
			<input class="d-block p-2" type="text" name="nome" placeholder="nome" style="margin-left: 1px;">
			<input class="d-block p-2" type="text" name="usuario" placeholder="usuário" style="margin-left: 1px;">
			<input class="d-block p-2" type="password" name="senha" placeholder="senha" style="margin-left: 1px;">
			<button class="btn btn-primary position-absolute start-50" type="submit" style="margin-top: 2px;">Cadastrar</button>
			<a href="index.php">Voltar</a>
		</form>
		</div>
	</div>




</body>
</html>