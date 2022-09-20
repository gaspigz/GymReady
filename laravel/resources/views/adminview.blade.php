<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GymReady</title>

	<link rel="icon" href="/img/dumbell.png">
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="/css/cardswall3.css">
	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/cards.css">
	<link rel="stylesheet" type="text/css" href="/css/animations.css">
	<link rel="stylesheet" type="text/css" href="/css/banners.css">
	<link rel="stylesheet" type="text/css" href="/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="/css/loader.css">
	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/38eaca6879.js" crossorigin="anonymous"></script>
	
  <!--JQuery-->
  	<script type="text/javascript" src="/js/jquery.js"></script> 
  	<script type="text/javascript" src="/js/scriptAdmin.js"></script>
	  

	<script type="text/javascript" src="/js/scripts.js"></script>

	


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

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">





</head>
<body>
	<div class="contenedor-general">
		<div class="loader-wrapper">
			<span class="loader"><span class="loader-inner"></span></span>
		</div>

		@include('partials.nav')
		
		@include('partials.adminlist')

		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="/img/imagen5.jpg" class="d-block w-100 imagen" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Change your mind</h5>
						<p>Be part of our team</p>
				</div>
				</div>
				<div class="carousel-item">
				
					<img src="/img/imagen6.jpg" class="d-block w-100 imagen6" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Keep on working</h5>
						<p>Flexible times</p>
				</div>
				
				</div>
				<div class="carousel-item">
					<img src="/img/imagen7.jpg" class="d-block w-100 imagen7" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>A lot of professionals</h5>
						<p>Don't worry about nothing</p>
					</div>
				</div>
			</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
		</div>

		<div class="container-fluid footer-nuestro">
			<div class="row p-3 bg-dark text-white">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h3">GYM READY</p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">DAYS</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Monday 7 am - 11 pm</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Tuesday 7 am - 11 pm</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Wednesday 7 am - 11 pm</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Thursday 7 am - 11 pm</a>
					</div>	
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Friday 7 am - 11 pm</a>
					</div>
					
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">LINKS</p>
					<div class="mb-2 ">
						<a class="text-secondary text-decoration-none" href="a">Terms & Conditions</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Privacy Policy</a>
					</div>

				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">CONTACTS</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Instagram</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="a">Facebook</a>
					</div>
				</div>
			
				<div class="col-xs-12 pt-3">
					<p class="text-white text-center">Copyright - All rigths reserved © 2022</p>
				</div>
			</div>

    </div>
	

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/jquery.js"></script> 
	
	
</body>
</html>
	
