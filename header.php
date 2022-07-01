<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Shazam Coding</title>
	

	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="icon" type="image/x-icon" href="assets/icon.png">
	<link rel="stylesheet" href="estilo/style.css">
</head>
<body class="d-flex flex-column min-vh-100">

	<!--Header com navbar-->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-3 color-golden" href="index.php">Shazam <i class="bi bi-lightning-fill"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Cursos</a>
        <?php
          if (isset($_SESSION['usuario'])):
        ?>
        <a class="nav-link active" href="login.php"><i class="bi bi-person-circle"></i></a>
        <?php
          else:
        ?>
        <a class="nav-link active" href="login.php">Logar</a>
        <?php
        endif;
        ?>
      </div>
    </div>
  </div>
</nav>
	</header>