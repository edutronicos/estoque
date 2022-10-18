<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> @yield('title', 'HOME') </title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	<link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" >
	<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css')}}">
</head>
<body>
	<nav>
		<header class="p-3 text-bg-dark">
			<div class="container">
			  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
					<i class="bi bi-house-fill" style="font-size: 1rem; color: white;"></i>
				</a>
				
				
				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					
					<li><button class="btn btn-secondary btn-sm m-2" type="button" aria-expanded="false"><a href="/" class="text-white" style="text-decoration: none;">HOME</a></button></li>
					<li>
						<div class="dropdown">
							<a class="btn btn-secondary btn-sm m-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
							CONSULTA
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<li><a class="dropdown-item" href="/consulta">Itens</a></li>
							<li><a class="dropdown-item" href="/listasaida">Saídas</a></li>
							</ul>
					  	</div>
					</li>
					<li><button class="btn btn-secondary btn-sm m-2" type="button" aria-expanded="false"><a href="/contato" class="text-white" style="text-decoration: none;">FORNECEDORES</a></button></li>
					<li><button class="btn btn-secondary btn-sm m-2" type="button" aria-expanded="false"><a href="/sobre" class="text-white" style="text-decoration: none;">PAPÉIS</a></button></li>
				</ul>
		
				<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
					<input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
				</form>

				
		
				
			  </div>
			</div>
		  </header>
	</nav>

<article>
	@yield('content')
	

</article>

<footer>
	<div class="footer_lista">
		
			<h5>Edutronicos</h5>
			<a class="text-white" href="https://wa.me/554199115916" target="_blank" style="text-decoration: none;"><i class="bi bi-whatsapp" style="font-size: 2rem; color: white; padding-right: 1rem;"></i></a>
			<a class="text-white" href="#" target="_blank" style="text-decoration: none;"><i class="bi bi-instagram" style="font-size: 2rem; color: white; padding-right: 1rem;"></i></a>
			<a class="text-white" href="#" target="_blank" style="text-decoration: none;"><i class="bi bi-facebook" style="font-size: 2rem; color: white; padding-right: 1rem;"></i></a>
		
	</div>
</footer>

</body>
</html>