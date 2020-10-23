@extends('master')
@section('title','Contact')
@section('contect')

	<div class="jumbotron py-5 my-5">
		<h1 class="display-4 pt-5">CONTACT US</h1>
		<p class="lead">This is The Voice Myanmar Page.</p>
		<hr>
		<a href="{{route('aboutpage')}}" class="btn btn-primary">Learn More</a>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 sm-5">
				<h6>The Voice Myanmar</h6>
				<p>The Voice Myanmar Season 3</p>
				<p>Every Sunday - 8:45 PM (Onair)</p>
				<p>Every Saturday - 8:45 PM (Replay)</p>
				<p>MRTV4 channel</p>
			</div>
			<div class="col-lg-5 col-md-5 sm-5">
				<p>channel: MRTY4</p>
				<p><img src="{{asset('myasset/images/cover/facebook.ico')}}"><a href="https://www.facebook.com/thevoicemyanmar" class="mx-2">https://www.facebook.com/thevoicemyanmar</a></p>

				<p><img src="{{asset('myasset/images/cover/gram.ico')}}"><a href="https://www.instagram.com/thevoicemyanmar" class="mx-2">https://www.instagram.com/thevoicemyanmar</a> </p>

				<p><img src="{{asset('myasset/images/cover/you.ico')}}"><a href="www.youtube.thevoicemyanmar" class="mx-2">www.youtube.thevoicemyanmar</a></p>

				<p><img src="{{asset('myasset/images/cover/twitter.ico')}}"><a href=" https://twitter.com/thevoice_mm" class="mx-2"> https://twitter.com/thevoice_mm</a></p>
			</div>
			
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('homepage')}}" class="btn btn-danger px-4 mx-5">Back</a>
	</div>	
	@endsection