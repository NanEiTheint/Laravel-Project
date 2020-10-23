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
					<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle text-light downs" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				         Season
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <!-- <a class="dropdown-item" href="#">Season 1</a> -->

					        <div class="dropdown dropright">
								  <a  class="dropdown-item dropdown-toggle season1" data-toggle="dropdown" data-hover="dropdown">Season 1</a>
								  <div class="dropdown-menu season1item">
								    	<a class="dropdown-item" href="{{route('blind1page')}}">Blind Auditions</a>
					          			<a class="dropdown-item" href="{{route('battle1page')}}">Battle</a>
					          			<a class="dropdown-item" href="{{route('live1_1page')}}">Live Show 1</a>
					          			<a class="dropdown-item" href="{{route('live1_2page')}}">Live Show 2</a>
					          			<a class="dropdown-item" href="{{route('semiFinal1page')}}">Semi Final</a>
					          			<a class="dropdown-item" href="{{route('final1page')}}">Final</a>
								  </div>
							</div>
					
					          
					         <!--  <a class="dropdown-item" href="#">Season 2</a> -->
					         <div class="dropdown dropright">
								  <a  class="dropdown-item dropdown-toggle season2" data-toggle="dropdown" data-hover="dropdown">Season 2</a>
								
								  <div class="dropdown-menu season2item">
								    	<a class="dropdown-item" href="{{route('blind2page')}}">Blind Auditions</a>
					          			<a class="dropdown-item" href="{{route('battle2page')}}">Battle</a>
					          			<a class="dropdown-item" href="{{route('knock2page')}}">Knock Out</a>
					          			<a class="dropdown-item" href="{{route('live2page')}}">Live Show</a>
					          			<a class="dropdown-item" href="{{route('semiFinal2page')}}">Semi Final</a>
					          			<a class="dropdown-item" href="{{route('final2page')}}">Final</a>
								  </div>
							</div>
				          <!-- <a class="dropdown-item" href="#">Season 3</a> -->
				          <div class="dropdown dropright">
								  <a  class="dropdown-item dropdown-toggle season3" data-toggle="dropdown" data-hover="dropdown">Season 3</a>
								
								  <div class="dropdown-menu season3item">
								    	<a class="dropdown-item" href="{{route('blind3page')}}">Blind Auditions</a>
					          			<!-- <a class="dropdown-item" href="#">Battle</a>
					          			<a class="dropdown-item" href="#">Knock Out</a>
					          			<a class="dropdown-item" href="#">Live Show</a>
					          			<a class="dropdown-item" href="#">Semi Final</a>
					          			<a class="dropdown-item" href="#">Final</a> -->
								  </div>
							</div>
				        </div>
				      </li>

					<li class="nav-item"><a href="{{route('coachpage')}}" class="nav-link text-light">Coach</a></li>
					
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