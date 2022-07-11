<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GymReady</title>

	<link rel="icon" href="/img/dumbell.png">
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/cards.css">
	<link rel="stylesheet" type="text/css" href="/css/animations.css">
	<link rel="stylesheet" type="text/css" href="/css/banners.css">
    <link rel="stylesheet" type="text/css" href="/css/registro.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
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
<div class="contenedor-general-registro container-fluid" >
			<div class="row justify-content-center align-content-center h-100 coloreado" style="background-image: url('img/wall-login.jpg')">
				<div class="container col-md-10" id="container">
					<div class="form-container sign-up-container">
					<form action="/register" method="POST">
							@csrf
							<h1>Create Account</h1>
							<div class="social-container">
								<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
								<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
							</div>
							<span>or use your email for registration</span>
							<div>
								<input class="col-sm-6" type="text" placeholder="User" name="user"/><input class="col-sm-6" type="email" placeholder="Email" name="email"/>
							</div>
							<div>
								<input class="col-sm-6" type="text" placeholder="Name" name="name"/><input class="col-sm-6" type="text" placeholder="Surname" name="surname"/>
							</div>							
							<input class="col-sm-11" type="date" placeholder="Birthdate" name="birth_date"/>						
							<div>
								<input class="col-sm-6" type="password" placeholder="Password" name="password"/><input class="col-sm-6" type="password" placeholder="Confirm password" name="password_confirmation"/>
							</div>
							
							<button class="signup-btn">Sign Up</button>
						</form>
					</div>
					<div class="form-container sign-in-container">
						<form action="#">
							<h1>Sign in</h1>
							<div class="social-container">
								<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
								<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
							</div>
							<span>or use your account</span>
							<input type="email" placeholder="Email" />
							<input type="password" placeholder="Password" />
							<a href="#">Forgot your password?</a>
							<button>Sign In</button>
						</form>
					</div>
					<div class="overlay-container">
						<div class="overlay">
							<div class="overlay-panel overlay-left">
								<h1>Welcome Back!</h1>
								<p>To keep connected with us please login with your personal info</p>
								<button class="ghost" id="signIn">Sign In</button>
							</div>
							<div class="overlay-panel overlay-right">
								<h1>Hello, Friend!</h1>
								<p>Enter your personal details and start journey with us</p>
								<button class="ghost" id="signUp">Sign Up</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/login.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script> </script>
</body>
</html>
	
