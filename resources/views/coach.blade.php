@extends('master')
@section('title','Coach')
@section('contect')
	<div class="container py-5 mt-5">
		<header>
			  <div class="overlay"></div>
			  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
			    <source src="{{asset('myasset/images/myanmar1.mp4')}}" type="video/mp4">
			  </video>
			  <div class="container h-100">
			    <div class="d-flex h-100 text-center align-items-center">
			      <div class="w-100 text-white">
			        <h1 class="display-3">The Voice Myanmar</h1>
			        <button class="btn btn-secondary" id="btnVideo">Pause</button>
			        <!-- <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p> -->
			      </div>
			    </div>
			  </div>
		</header>
	</div>
	<h1 class="text-center py-5">The Voice Myanmar's Coaches</h1>
	<div class="container py-5">
		<div class="row">
			<!-- <div class="col-lg-2 col-md-2 col-sm-2"></div> -->
			<div class="col-lg-12 py-5">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-lg-6 col-md-6">
				      <img src="{{asset('myasset/images/cover/l1.jpg')}}" class="card-img" alt="...">
				    </div>
				    <div class="col-lg-6 col-md-6">
				      <div class="card-body">
				      	<h2 class="text-center py-4">Coach Information</h2>
						<h5>Name:<span class="text-danger pl-3">Lynn Lynn</span></h5>
						<h5>Age:<span class="text-danger pl-3">43</span></h5>
						<h5>Season:<span class="text-danger pl-3">1</span></h5>
						<h5>Facebook:<span class="text-danger pl-3">Htwe Lynn Ko</span></h5>
						<h5>Team:<span class="text-danger pl-3">#TEAMLYNN</span></h5>
						<h5>Singer Type:<span class="text-danger pl-3">Rock</span></h5>
				        
				        <a href="https://www.youtube.com/playlist?list=PLs3Byjq9HV9OHqJRYJMJyX9f9IL-FW-Ih" class="btn btn-danger mt-5 mx-3">Hit Songs</a>
				         <a href="https://www.facebook.com/watch/?v=1955761461332838" class="btn btn-danger mt-5">V Special</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-12 py-5">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-lg-6 col-md-6">
				      <img src="{{asset('myasset/images/cover/n1.jpg')}}" class="card-img" alt="...">
				    </div>
				    <div class="col-lg-6 col-md-6">
				      <div class="card-body">
				      	<h2 class="text-center py-4">Coach Information</h2>
						<h5>Name:<span class="text-danger pl-3">Ni Ni Khin Zaw</span></h5>
						<h5>Age:<span class="text-danger pl-3">32</span></h5>
						<h5>Season:<span class="text-danger pl-3">1, 2, 3</span></h5>
						<h5>Facebook:<span class="text-danger pl-3">Ni Ni Khin Zaw</span></h5>
						<h5>Team:<span class="text-danger pl-3">#TEAMNINI</span></h5>
						<h5>Singer Type:<span class="text-danger pl-3">Pop</span></h5>
				        
				        <a href="https://www.youtube.com/playlist?list=PLs3Byjq9HV9NHp-RjHYTjwKrrnAGplV-g" class="btn btn-danger mt-5 mr-3">Hit Songs</a>
				         <a href="https://www.facebook.com/watch/?v=1958549644387353" class="btn btn-danger mt-5">V Special</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-12 py-5">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-lg-6 col-md-6">
				      <img src="{{asset('myasset/images/cover/k1.jpg')}}" class="card-img" alt="...">
				    </div>
				    <div class="col-lg-6 col-md-6">
				      <div class="card-body">
				      	<h2 class="text-center py-4">Coach Information</h2>
						<h5>Name:<span class="text-danger pl-3">Kyar Pauk</span></h5>
						<h5>Age:<span class="text-danger pl-3">43</span></h5>
						<h5>Season:<span class="text-danger pl-3">1, 2, 3</span></h5>
						<h5>Facebook:<span class="text-danger pl-3">Kyar Pauk</span></h5>
						<h5>Team:<span class="text-danger pl-3">#TEAMKP</span></h5>
						<h5>Singer Type:<span class="text-danger pl-3">Punk, Rock</span></h5>
				        
				        <a href="https://www.youtube.com/playlist?list=PLs3Byjq9HV9Mab6PI0Y-icr8jlsc0FwnK" class="btn btn-danger mt-5 mr-3">Hit Songs</a>
				         <a href="https://www.facebook.com/watch/?v=1958695594372758" class="btn btn-danger mt-5">V Special</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-12 py-5">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-lg-6 col-md-6">
				      <img src="{{asset('myasset/images/cover/y1.jpg')}}" class="card-img" alt="...">
				    </div>
				    <div class="col-lg-6 col-md-6">
				      <div class="card-body">
				      	<h2 class="text-center py-4">Coach Information</h2>
						<h5>Name:<span class="text-danger pl-3">Yan Yan Chan</span></h5>
						<h5>Age:<span class="text-danger pl-3">44</span></h5>
						<h5>Season:<span class="text-danger pl-3">1, 2, 3</span></h5>
						<h5>Facebook:<span class="text-danger pl-3">Yan Yan Chan</span></h5>
						<h5>Team:<span class="text-danger pl-3">#TEAMYC</span></h5>
						<h5>Singer Type:<span class="text-danger pl-3">Rap</span></h5>
				        
				        <a href="https://www.youtube.com/playlist?list=PLs3Byjq9HV9OjNo2uK0rpwmI4w_qKltOH" class="btn btn-danger mt-5 mr-3">Hit Songs</a>
				         <a href="https://www.facebook.com/watch/?v=1958695437706107" class="btn btn-danger mt-5">V Special</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-12 py-5">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-lg-6 col-md-6">
				      <img src="{{asset('myasset/images/cover/r1.jpg')}}" class="card-img" alt="...">
				    </div>
				    <div class="col-lg-6 col-md-6">
				      <div class="card-body">
				      	<h2 class="text-center py-4">Coach Information</h2>
						<h5>Name:<span class="text-danger pl-3">R Zarni</span></h5>
						<h5>Age:<span class="text-danger pl-3">42</span></h5>
						<h5>Season:<span class="text-danger pl-3">2, 3</span></h5>
						<h5>Facebook:<span class="text-danger pl-3">Zarni Myonyunt</span></h5>
						<h5>Team:<span class="text-danger pl-3">#TEAMRZN</span></h5>
						<h5>Singer Type:<span class="text-danger pl-3">Rock</span></h5>
				        
				        <a href="https://www.youtube.com/playlist?list=PL32iJBOE4EKc1yN2qZN7339MNu7lsUBr5" class="btn btn-danger mt-5 mr-3">Hit Songs</a>
				         <a href="https://www.facebook.com/watch/?v=351376232919477" class="btn btn-danger mt-5">V Special</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('homepage')}}" class="btn btn-danger px-4 mx-5">Back</a>

	</div>	
	@endsection