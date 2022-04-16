<?php
session_start();
include('header.php');
?>
<div class="container">

	<div class="text-center">
		<h2>Cadastro</h2>
	</div>


	<h2 class="text-center">Cadastro</h2>


	<div class="row justify-content-center my-5">
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

		<div class="col-lg-6">

			<div class="card py-4 px-4">
		<form method="post" action="cadastrar.php" style="position:relative; left: 90px;">
			<div class="form-floating my-3">
			<input class="form-control w-50" type="text" name="nome" placeholder="nome" style="margin-left: 1px;">
			<label for="nome" class="form-label">Nome</label>
			</div>

			<div class="form-floating my-3">
			<input class="form-control w-50" type="text" name="usuario" placeholder="usuário" style="margin-left: 1px;">
			<label for="usuario" class="form-label">Usuário</label>
			</div>

			<div class="form-floating my-3">
			<input class="form-control w-50" type="password" name="senha" placeholder="senha" style="margin-left: 1px;">
			<label for="senha" class="form-label">Senha</label>
			</div>

			<button class="btn btn-dark mb-3" type="submit" style="margin-top: 2px;">Cadastrar</button><br>
			<a class="color-golden" href="login.php">Já possuo uma conta</a>
			
		</form>
		

			<div class="card py-3 px-3">		
			<form method="post" action="cadastrar.php">
				<div class="form-floating my-3">
				<input class="form-control w-50" type="text" name="nome" placeholder="nome" autocomplete="off" required style="margin-left: 1px;">
				<label for="nome" class="form-label">Nome</label>
				</div>

				<div class="form-floating my-3">
				<input class="form-control w-50" type="text" name="usuario" placeholder="usuário" autocomplete="off" required style="margin-left: 1px;">
				<label for="usuario" class="form-label">Usuário</label>
				</div>

				<div class="form-floating my-3">
				<input class="form-control w-50" type="password" name="senha" placeholder="senha" required style="margin-left: 1px;">
				<label for="senha" class="form-label">Senha</label>
				</div>

				<button class="btn btn-dark my-3 rounded" type="submit" style="margin-top: 2px;">Cadastrar</button><br>
				<a href="login.php">Já possuo uma conta </a>
			</form>
			</div>


		</div>
		</div>
	</div>


<?php
	include('footer.php');
?>

</body>
</html>