<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel Template Mastering</title>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('assets/css')}}/style.css"> -->
	<!-- <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css"> -->
</head>
<body>
	<header><h1>This is header</h1></header>
	<nav>
		<ul>
			<li><a class="active" href="{{route('index')}}">Home</a></li>
			<li><a href="{{route('about')}}">About</a></li>
			<li><a href="{{route('service')}}">Service</a></li>
			<li><a href="{{route('contact')}}">Contact</a></li>
		</ul>
	</nav>
	<section>
		<h2>Home Page</h2>
	</section>
	<footer>
		<h4>This is footer</h4>
	</footer>
</body>
</html>