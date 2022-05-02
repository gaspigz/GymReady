<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GymReady</title>
	<link rel="icon" href="#">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!--Font Awesome-->
	<script src="https://kit.fontawesome.com/cb12baf425.js" crossorigin="anonymous"></script>
	<!--JQuery-->
	<script type="text/javascript" src="jquery.js"></script> 


	<!-- Fuentes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Georama:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Padauk&display=swap" rel="stylesheet">


</head>
<body>
	<div class="contenedor-general">
	<nav class="navbar navbar-expand-lg h-8 navbar-light bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand ms-3 text-light" href="#">GymReady</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mx-auto ">
				<li class="nav-item me-3 login-nav-btn">
				<a class="nav-link active text-light" aria-current="page" href="#">Inicio</a>
				</li>
				<li class="nav-item me-3 login-nav-btn">
				<a class="nav-link text-light" href="#">Contacto</a>
				</li>
				<li class="nav-item me-3 login-nav-btn">
				<a class="nav-link text-light text-light" href="#">Iniciar Sesión</a>
				</li>
				<li class="nav-item login-nav-btn">
				<a class="nav-link text-light text-light" href="#">Registrarse</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>
	
	<div class="container-fluid container-inferior d-flex flex-column justify-content-center align-items-center">
		<div class="carrusel">
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active ">
				<img src="imagen0.jpg" class="d-block  overflow-hidden" alt="...">
				<div class="carousel-caption d-none d-md-block ">
					<h5>First slide label</h5>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
				</div>
				<div class="carousel-item">
				<img src="imagen2.jpg" class="d-block overflow-hidden" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Some representative placeholder content for the second slide.</p>
				</div>
				</div>
				<div class="carousel-item">
				<img src="imagen3.jpg" class="d-block overflow-hidden" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
		</div>
		</div>

	</div>



	</div>
	<script type="text/javascript" src="scripts.js"></script> </script>
</body>
</html>
	
