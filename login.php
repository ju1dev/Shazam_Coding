
<?php
session_start();
?>

<?php
include('header.php');
?>
<?php
	//Caso o usuário insira dados inválidos a sessão é dada como não autenticada e um aviso em html aparece//
		if (isset($_SESSION['nao_autenticado'])):
	?>

	<div class="bg-danger bg-gradient text-light">
	<p>Usuário ou senha inválidos</p>
	</div>	<!--Aviso de usuário ou senha inválidos-->
	<?php
	//Caso insira os dados certos a sessão é encerrada e o aviso some//
		endif;
		unset($_SESSION['nao_autenticado']);
	?>
	
<div class="container">

	<div class="text-center">
	<h2>Login</h2>
	</div>
	

	<div class="row justify-content-center my-5">
		<div class="col-lg-6">
<div class="card py-4 px-4">
	

			<form id="login" action="logar.php" method="post" style="left:90px; position: relative;">
							<div class="form-floating my-3">
							<input type="text" name="usuario" placeholder="nome de usuário" class="form-control w-50" autocomplete="off">
							<label for="usuario" class="form-label">Nome de usuário</label>
							</div>
							

							<div class="form-floating">
							<input type="password" name="senha" placeholder="senha" class="form-control w-50">
							<label for="senha" class="form-label">Senha</label>
							</div>
							<button type="submit" class="btn btn-dark my-3 rounded">Entrar</button><br>
							<a class="text-dark" href="cadastro.php">Criar conta</a>
						</form>
							
			
		</div><!--/col-lg-6-->
	</div><!--/row-->
	</div><!--/card-->
</div><!--/container-->

<?php
	include('footer.php');
?>

</body>
</html>