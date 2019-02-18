<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>
		@yield("titulo")
	</title>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="/products">Products</a>
				</li>
				@if (Auth::check())
				<li>
					Hola {{Auth::user()->name}}
				</li>
				<li>
					<form method="POST" action="/logout">
						{{csrf_field()}}
						<button class="btn btn-primary" type="submit">Logout</button>
					</form>
				</li>
				@else
					<li>
						<a href="/register">Registracion</a>
					</li>
					<li>
						<a href="/login">Login</a>
					</li>
				@endif

				@if ($cart->list())
					<a href="/checkout">
						<button class="btn btn-success">Checkout</button>
					</a>
				@endif
			</ul>
		</nav>
		<div>
			<form action="/search" method="GET">
				{{csrf_field()}}
				<input type="text" name="search">
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</header>
	<section class="container">
		@yield("principal")
	</section>
</body>
</html>
