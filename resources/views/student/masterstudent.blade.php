<!DOCTYPE html>
<html>
<head>

	<title>@yield ('title')</title>
	<link rel="icon" href="{{asset('myasset/images/voicelogo.ico')}}" type="image/x-icon">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('myasset/cssfile.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/fontawesome/css/all.min.css')}}">

	<script type="text/javascript" src="{{asset('myasset/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('myasset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('myasset/jsfile.js')}}"></script>

	<script type="text/javascript">
		
	</script>
</head>

<body>
	
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark py-3 mb-5 bg-danger menu fixed-top" id="navigation">
		<div class="container">
			<a href="" class="navbar-brand">
				The Voice
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- <a href=""  class="navbar-brand">NAN</a> -->
			<div  id="myNav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{route('homepage')}}" class="nav-link text-light">Home</a></li>

					<li class="nav-item"><a href="{{route('student.index')}}" class="nav-link text-light">Student</a></li>
					
					<li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link text-light">About</a></li>
					<li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link text-light">Contact</a></li>
				</ul>
		</div>
	</nav>

	@yield("contect")

	<footer class="bg-light pt-5 mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<p>All Right Reserved &copy; Design By NAN</p>
				</div>
				<div class="col-md-6 text-right">
					<i class="fab fa-facebook-square fa-2x"></i>
					<i class="fab fa-twitter-square fa-2x"></i>
					<i class="fab fa-instagram-square fa-2x"></i>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>