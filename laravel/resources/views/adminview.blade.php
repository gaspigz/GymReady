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
	<link rel="stylesheet" type="text/css" href="/css/loader++.css">
	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
  <!--Font Awesome-->
	<script src="https://kit.fontawesome.com/cb12baf425.js" crossorigin="anonymous"></script>
	
  <!--JQuery-->
	<script type="text/javascript" src="/js/jquery.js"></script> 


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
		
		@if (isset(auth()->user()->user))
			@if (auth()->user()->user=='Admin')
				@include('adminview')
			@endif
		@endif

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
    @guest
		<div class="container-fluid container-medio">
			<div class="row justify-content-center align-content-center cont-medio-responsive h-100 coloreado" style="background-image: url('img/imagenWall1Blur.jpg');">
				<div class="col-sm-2"></div>

				<div class="col-sm-4 d-flex flex-column	align-items-left justify-content-center align-self-center h-100">
					<div class="row reveal fade-left" style="padding-left: 3vw;">
						<h1 class="text-div-dos align-self-center">You do the work, we help</h1>
					</div>
					<div class="row reveal fade-left" style="padding-left: 3vw;">
						<h1 class="text-div-dos align-self-center outlined-text">REGISTER NOW OR SIGN IN</h1>
					</div>
					<div class="row reveal fade-left" style="padding-left: 3vw;">
						<h1 class="text-div-dos align-self-center">DON'T DOUBT ANYMORE</h1>
					</div>
					<div class="row reveal fade-left" style="padding-left: 3vw;">
						<h1 class="text-div-dos align-self-center" style="font-size: 5vw;">let's start for only 3$/month</h1>
					</div>
					
				</div>
				
				<div class="col-sm-4 d-flex align-self-center justify-content-center align-content-center h-100">
					<div class="container-card align-self-center reveal fade-right">
						<div class="card-extra d-flex justify-content-center">
						  <div class="imgBx foto-dumbell-card" style="width: 9rem;">
							<img src="/img/dumbell.png">
						  </div>
						  <div class="contentBx">
							<h2>Start now</h2>														
							<a href="/register" style="margin-top: 1.7rem;">Register</a>
							<a href="/login" style="margin-top: 1.7rem;">Sign in</a>
						  </div>
						</div>
					  </div>
				</div>

				<div class="col-sm-2"></div>
			</div>
		</div>
		
		<div class="container-fluid container-informacion">
			<div class="row"> <!-- row de los 2 cards -->
				<a href="/register">
					<div class="container-fluid  d-flex justify-content-center align-content-center">
						<div class="col-md-2"></div>
						<div class="banner-informacion-contenedor col-md-8 reveal fade-right" >
							<div class="inner-banner-up">
								<img src="/img/imagen2.jpg" alt="" class="imagen-banner-up">
								<h3 class="inner-banner-textU">We care about your rutines, diets and progress. <br>Click for more information.</h3>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</a>
				
				<a href="/register">
					<div class="container-fluid  d-flex justify-content-center align-content-center">
						<div class="col-md-2"></div>
						<div class="banner-informacion-contenedor col-md-8 reveal fade-left" >
							<div class="inner-banner">
								<img src="/img/imagen0.jpg" alt="" class="imagen-banner">
								<h3 class="inner-banner-textD">Don't lose time. <br>Start now HERE.</h3>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</a>
				

			</div>
		</div>
		
		<div class="container-fluid container-inferior">
			<div class="row justify-content-center align-content-center h-100 wall3" style="background-image: url('img/wall3.jpg');">
				<div class="container">
					<div class="intro">
						<h2 class="text-center text-div-dos">OUR PROFESSIONAL TEAM</h2>
						<p class="text-center text-div-dos outlined-text">Aim for the highest with the help of: </p>
					</div>
					<div class="row people">
						<div class="col-md-6 col-lg-4 item text-center">
							<div class="box"><img class="rounded-circle tamaños-img" src="/img/chalado.jpg">
								<h3 class="name titulowall3 color-letra">Jhon Whells</h3>
								<p class="title textowall3 color-letra">Personal Trainer</p>
								<p class="description textowall3 color-letra">10 years of experience in functional and strength training</p>
								<div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 item text-center">
							<div class="box"><img class="rounded-circle tamaños-img" src="/img/mauro_toti.jpg">
								<h3 class="name titulowall3 color-letra">Pep chess</h3>
								<p class="title textowall3 color-letra">Personal trainer</p>
								<p class="description textowall3 color-letra">7 years being a muscle hypertrophy coach</p>
								<div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 item text-center">
							<div class="box"><img class="rounded-circle tamaños-img" src="/img/gaspi.jpg">
								<h3 class="name titulowall3 color-letra">Galo Rodriguez</h3>
								<p class="title textowall3 color-letra">Nutritionist</p>
								<p class="description textowall3 color-letra">8 years of profession specializing in nutrition for athletes</p>
								<div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endguest
	

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

	<script type="text/javascript" src="/js/scripts.js"></script> </script>
</body>
</html>
	
