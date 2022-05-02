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
			<!-- Carousel wrapper -->
		<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-indicators">
			<button
			type="button"
			data-mdb-target="#carouselBasicExample"
			data-mdb-slide-to="0"
			class="active"
			aria-current="true"
			aria-label="Slide 1"
			></button>
			<button
			type="button"
			data-mdb-target="#carouselBasicExample"
			data-mdb-slide-to="1"
			aria-label="Slide 2"
			></button>
			<button
			type="button"
			data-mdb-target="#carouselBasicExample"
			data-mdb-slide-to="2"
			aria-label="Slide 3"
			></button>
		</div>

		<!-- Inner -->
		<div class="carousel-inner">
			<!-- Single item -->
			<div class="carousel-item active">
			<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100" alt="Sunset Over the City"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>First slide label</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
			</div>

			<!-- Single item -->
			<div class="carousel-item">
			<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="Canyon at Nigh"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			</div>

			<!-- Single item -->
			<div class="carousel-item">
			<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
			</div>
		</div>
		<!-- Inner -->

		<!-- Controls -->
		<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		</div>
		<!-- Carousel wrapper -->



	</div>
	<script type="text/javascript" src="scripts.js"></script> </script>
</body>
</html>
	
