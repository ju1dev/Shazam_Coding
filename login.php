<!DOCTYPE html>
<?php
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página de login</title>
	<link rel="stylesheet" href="estilo/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
	<style>
html,body{
	background-color: whitesmoke;
}

#p-introducao{
	font-size: 23px;
}
.p-generic{
	font-size: 18px;
}
.footer{
		height: 130px;
}
.link{
	color: whitesmoke;
}
.link:hover{
	color:darkslategray ;
}
.color-golden{
	color: palegoldenrod !important;
}
</style>
	<!--Header com navbar-->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="#">Shazam <i class="bi bi-lightning-fill"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Cursos</a>
        <a class="nav-link active" href="login.php">Minha conta</a>
        
      </div>
    </div>
  </div>
</nav>
	</header>
	<!--/Header com navbar-->
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


<footer class="footer text-center bg-dark mt-3">
	<div class="container">
		<div class="row">
			<div class="col mt-5 ms-auto">
			<p class="text-light">Desenvolvido por: Juan Oliveira Monteiro<br>
				<a href="https://www.linkedin.com/in/juan-oliveira-76a348222/" class="link"><i class="bi bi-linkedin"></i></a>
				<a href="https://github.com/ju1dev" class="link"><i class="bi bi-github"></i></a></p>
			
	</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>