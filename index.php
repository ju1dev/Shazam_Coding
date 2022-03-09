<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shazam Coding</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="icon" type="image/x-icon" href="assets/shazam-ico.png">
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

<!--HEADER COM NAVBAR-->	
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-3 color-golden" href="index.php">Shazam <i class="bi bi-lightning-fill color-golden"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Cursos</a>
        <a class="nav-link active" href="login.php"><i class="bi bi-person-circle"></i></a>
        
      </div>
    </div>
  </div>
</nav>
</header>
<!--//HEADER COM NAVBAR-->

<div class="container">
	<div class="row">

		<!--Slider com imagens-->
		<div class="col-lg-6 mt-4">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/ilustracao1.jpg" style="height:350px; width:auto" class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/ilustracao2.jpg" style="height:350px; width:auto" class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/ilustracao3.jpg" style="height:350px; width:auto"  class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		</div>
		<!--/Slider com imagens-->

		<div class="col-lg-4 mt-4">
			<div class="text-center">
			<h3>Bem vindo a Shazam Coding </h3>
			<p class="mt-4" id="p-introducao">Comece agora seu aprendizado em HTML e CSS e torne-se um desenvolvedor front-end.
			Curso gratuito e com certificado 100% gratis !</p>
			<button type="button" class="btn btn-dark mt-3 border border-2">Click Here</button>
			</div>
		</div>

	</div>
</div>

<div class="row mt-5">
	<div class="col-lg-5 ms-5 ps-5">
		<div class="text-center">
			<h2>HTML <i class="bi bi-filetype-html"></i></h2>
			<p class="p-generic">Aprenda HTML5 na prática com diversos exercícios e mais de 200 horas de conteúdo</p>
			<button type="button" class="btn btn-success border border-2">Curso de HTML5</button>
		</div>
	</div>
	<div class="col-lg-5 ms-5 ps-5">
		<div class="text-center">
			<h2>CSS <i class="bi bi-filetype-css"></i></h2>
			<p class="p-generic">Domine o CSS e aprenda a utilizar uma de suas principais bibliotecas, o Bootstrap.</p>
			<button type="button" class="btn btn-secondary border border-2">Curso de CSS</button>
		</div>
		
	</div>
</div>
<div class="row mt-5 text-center ms-5">
	<h2 class="mb-5">Alunos trabalhando em grandes empresas</h2>

	<div class="col-lg-3 border border-danger me-3">
		<h5>Manel</h5>
		<img src="assets/manel.jpg" class="rounded-circle w100" style="height:140px;width:auto;">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<div class="col-lg-3 border border-primary me-3">
		<h5>Baiano</h5>
		<img src="assets/baiano.jpg" class="rounded-circle w100" style="height:140px;width:auto;">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<div class="col-lg-3 border border-info">
		<h5>Lucas</h5>
		<img src="assets/lucas.jpg" class="rounded-circle w100" style="height:140px;width:auto;">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

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
</div>
</body>
</html>