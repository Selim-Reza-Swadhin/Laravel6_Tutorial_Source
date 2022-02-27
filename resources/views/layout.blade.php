<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') | Laravel Template Mastering</title>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('assets/css')}}/style.css"> -->
	<!-- <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css"> -->
</head>
<body>
	<header><h1>This is header</h1></header>
	<nav>
		<ul>
			<li><a class="{{Request()->is('/') ? 'active' : ''}}" href="{{route('index')}}">Home</a></li>
			<li><a class="{{Request()->is('about') ? 'active' : ''}}" href="{{route('about')}}">About</a></li>
			<li><a class="{{Request()->is('about/us') ? 'active' : ''}}" href="{{route('aboutus')}}">About Us</a></li>
			<li><a class="{{Request()->is('aboutstar/*') ? 'active' : ''}}" href="{{route('aboutstar')}}">About Star</a></li>
			<li><a class="{{Request()->is('service') ? 'active' : ''}}" href="{{route('service')}}">Service</a></li>
			<li><a class="{{Request()->is('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a></li>
		</ul>
	</nav>
	<section>
		@yield('content')
	</section>
	<footer>
		<h4>This is footer</h4>
	</footer>
</body>
</html>