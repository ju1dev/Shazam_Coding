<?php include('./layouts/header.php'); ?>
<body>



	<div class="container">
		<div class="row">
	
			<!--Slider com imagens-->
		
			<div class="col-md-6 mt-4">
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="assets/ilustracao1.jpg" style="height:350px; width:auto" class="d-block w-100 rounded img-fluid" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>First slide label</h5>
	        <p>Some representative placeholder content for the first slide.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="assets/ilustracao2.jpg" style="height:350px; width:auto" class="d-block w-100 rounded img-fluid" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Second slide label</h5>
	        <p>Some representative placeholder content for the first slide.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="assets/ilustracao3.jpg" style="height:350px; width:auto"  class="d-block w-100 rounded " alt="...">
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
				<button type="button" class="btn btn-dark mt-3 border border-2">Comece agora!</button>
				</div>
			</div>
	
		

	</div>
	
	<div class="row mt-5">
		<div class="col-lg-5">
			<div class="text-center">
				<h2>HTML <i class="bi bi-filetype-html"></i></h2>
				<p class="p-generic">Aprenda HTML5 na prática com diversos exercícios e mais de 200 horas de conteúdo</p>
				<button type="button" class="btn btn-success border border-2">Curso de HTML5</button>
			</div>
		</div>
		<div class="col-lg-5">
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
	
	</div>
	<?php include('./layouts/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>