@extends('master')
@section('title','Live Final Season 1')
@section('contect')
	<div class="container py-3 mt-5">
		<header>
			  <div class="overlay"></div>
			  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
			    <source src="{{asset('myasset/images/myanmar1.mp4')}}" type="video/mp4">
			  </video>
			  <div class="container h-100">
			    <div class="d-flex h-100 text-center align-items-center">
			      <div class="w-100 text-white">
			        <h1 class="display-3">The Voice Myanmar 2018</h1>
			        <button class="btn btn-secondary" id="btnVideo">Pause</button>
			        <!-- <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p> -->
			      </div>
			    </div>
			  </div>
		</header>
	</div>
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">1 </span>Live Final</h1>
	<p class="container">ကဲပရိတ်သတ်ကြီးရေ သင်တို့ကြိုက်နှစ်သက်တဲ့ ပြိုင်ပွဲဝင်များကို မဲပေးလိုပါက <a href="">thevoice.mptvote.com </a>တွင် ဝင်ရောက်ပြီး စိတ်ကြိုက်Voting ပေးပို့နိုင်ပါပြီရှင်
	📢📢📢..........</p>
	<h1 class="text-danger container py-5 text-center">Thaw Di "TEAM YC"</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="card">
					<img src="{{asset('myasset/images/final_1/final1005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p class="text-center lead">အမိန့်</p>
						<a href="https://youtu.be/QvdK_maxLMM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="card">
					<img src="{{asset('myasset/images/final_1/final1001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p class="text-center lead">One Moment In Time</p>
						<a href="https://youtu.be/NIql8oJCqgE" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h1 class="text-danger container py-5 text-center">Ngwe Soe "TEAM LYNN"</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="card">
					<img src="{{asset('myasset/images/final_1/final1008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p class="text-center lead">အသည်းကွဲဧည့်သည်</p>
						<a href="https://youtu.be/e6Z4Abbeges" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="card">
					<img src="{{asset('myasset/images/final_1/final1004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p class="text-center lead">ရာဇဝင်များရဲ့သတို့သမီး</p>
						<a href="https://youtu.be/2vMPu3u8ZrQ" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h1 class="text-danger container py-5 text-center">Mark Jason "TEAM NINI"</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="card">
					<img src="{{asset('myasset/images/final_1/final1006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p class="text-center lead">All Of Me</p>
						<a href="https://youtu.be/McLeWpAUJsM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="card">
					<img src="{{asset('myasset/images/final_1/final1002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p class="text-center lead">သဘာဝနှင့်တွေ့ဆုံခြင်း</p>
						<a href="https://youtu.be/GkGXUL2THJg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<h1 class="text-center py-5">V Special 
		<span class="pl-3">
			<i class="fas fa-microphone-alt text-danger"></i>
		</span>
	</h1>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-5 col-sm-5 col-md-5 col-5 embed-responsive embed-responsive-1by1">
				<iframe src="https://www.youtube.com/embed/i0h6osGuK5I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
			<div class="col-lg-5 col-sm-5 col-md-5 col-5 embed-responsive embed-responsive-1by1">
				<iframe src="https://www.youtube.com/embed/ksdeWAOUMSY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		
	</div>
	<h2 class="container pt-5">The Voice Myanmar Season <span class="text-danger font-italic">1</span> Winner is 📢📢📢.............</h2>
	<div class="container py-5 blind">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-3 text-center">
				<a class="text-decoration-none wrapper" id="result">
					<span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-danger"></i>
                        <h1 class="fas fa-stack-1x fa-inverse result_hover">Result</h1>
                    </span>
				</a>
			</div>
		</div>
	</div>
	<div class="container live1_2_winner py-5">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 px-5">
				<img src="{{asset('myasset/images/cover/con1.gif')}}" class="img-fluid">
			</div>
			<div class="col-lg-5 col-md-8 col-sm-8 mx-5">
				<img src="{{asset('myasset/images/cover/winner1.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('semiFinal1page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
	</div>

	@endsection
