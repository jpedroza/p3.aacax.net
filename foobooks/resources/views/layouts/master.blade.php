<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title',"The Late Night Programmer's BFF")
    </title> 

    <meta charset='utf-8'>
    <link href="public/css/style.css" type='text/css' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch:700,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {{-- <link href="/css/style.css" type='text/css' rel='stylesheet'> --}}	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
	<div class="container" style='background-color: white;'>
		<header style="height: 160px; 
						width: 1200px" >
			<div class="jumbotron" style="padding: 0px; 
						width: 1200px;
						height: 160" >
				<h1 style="font-family: Cabin Sketch; 
							border-radius: 10px;border: 
							2px solid black; 
							padding: 10px;
							box-shadow: 15px 15px 6px #888888;">
							<img style="display: inline; margin:0px" src="img/robot.png">
							The Late Night Programmer's BFF
				</h1>
			</div> <!-- end of jumbotron-->
		</header>

		<section>
			{{-- Main page content will be yielded here --}}
			@yield('content')
		</section>

		<footer>
		<br>
		<br>
		<br>
			Late Night Programmer's BFF&copy; {{ date('Y') }}
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
		@yield('body')
	</div> <!-- end of div container -->
</body>
</html>