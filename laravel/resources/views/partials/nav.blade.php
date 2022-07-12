<nav class="navbar sticky-top navbar-expand-lg mi-nav navbar-light bg-dark">
			<div class="container-fluid d-flex justify-content-center align-content-center">
				<a class="navbar-brand ms-3 text-light" href="/" style="font-size: 1 rem;">GymReady</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">

				<ul class="navbar-nav ">

					<li class="nav-item me-3 login-nav-btn">
					<a class="nav-link active text-light" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item me-3 login-nav-btn">

					<a class="nav-link text-light colorear-boton" href="#">Contact</a>

					</li>
					@guest
					<li class="nav-item me-3 login-nav-btn">
					<a class="nav-link text-light text-light" href="/login">Sing In</a>
					</li>
					<li class="nav-item login-nav-btn">
					<a class="nav-link text-light text-light" href="/register">Sing Up</a>
					</li>
					@endguest
					@auth
					<li class="nav-item login-nav-btn">
					<a class="nav-link text-light text-light" href="/register">Bienvenido {{auth()->user()->name ?? auth()->user()->user}}</a>
					</li>
					<li class="nav-item login-nav-btn">
					<a class="nav-link text-light text-light" href="/logout">Log Out</a>
					</li>
					@endauth

				</ul>
				</div>
			</div>
		</nav>