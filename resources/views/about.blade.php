@extends('master')
@section('title','About')
@section('contect')
	<div class="container py-4 my-3">
		<div class="row row-cols-1 row-cols-md-2 py-5">
		  <div class="col-lg-12 col-md-12 mb-4">
		    <div class="card">
		      <img src="{{asset('myasset/images/cover/about.jpg')}}" class="card-img-top" alt="...">
		      <div class="card-body">
		        <h5 class="card-title">About</h5>
		        <p class="card-text">With million of TV & Online viewers all over the world, The Voice is one of the biggest international TV format and now it's arrived in Myanmar by MRTV4 and main sponsor by MPT.</p>
		        <p>The Voice Myanmar is started in 2018.It contain 4 coaches and 6 levels.These levels are Blind Auditions, Battles Round, Knock-out, Live Show, Live Semi Final and Live Final.Each Coach select 12 auditions in Blind Audition, 8 auditions in Battles Round, 4 auditions in Knock-out, 2 in Live Show with Voting, 1 in Live Semi Final with voting.Finally, select winner form only one coach.</p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<h1 class="text-center py-5">Activies</h1>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-4 col-md-4 py-3">
				<img src="{{asset('myasset/images/cover/a1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 py-3">
				<img src="{{asset('myasset/images/cover/a2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 py-3">
				<img src="{{asset('myasset/images/cover/a2.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>

	
	<div class="container py-5">
		<a href="{{route('homepage')}}" class="btn btn-danger px-4 mx-5">Back</a>
	</div>	
	@endsection
	