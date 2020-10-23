@extends('master')
@section('title','Live Semi Final Season 1')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">1</span> Live Semi Final</h1>
	<p class="container lead">ကဲပရိတ်သတ်ကြီးရေ သင်တို့ကြိုက်နှစ်သက်တဲ့ ပြိုင်ပွဲဝင်များကို မဲပေးလိုပါက <a href="">thevoice.mptvote.com </a>တွင် ဝင်ရောက်ပြီး စိတ်ကြိုက်Voting ပေးပို့နိုင်ပါပြီရှင်
	📢📢📢..........</p>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Khaine Myae Thitsar</h4>
						<p class="text-center lead">အချစ်မီး</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/Rh2FfyHke-M" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Thaw Di</h4>
						<p class="text-center lead">ရင်ခုန်ဘက်သို့တမ်းချင်း</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/dMfblI-8LDw" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Ip Shen Paung</h4>
						<p class="text-center lead">ပထမခြေလှမ်း</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/eDazrsbREBs" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Ngwe Soe</h4>
						<p class="text-center lead">တစ်နေ့နေ့</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/e6K6CVcSkPI" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Mark Jason</h4>
						<p class="text-center lead">အချစ်ဆုံး</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/19XTR3WGXS8" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Grace Monica</h4>
						<p class="text-center lead">Beautiful</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/UwIekSRJVUw" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Ye Naing Htoo</h4>
						<p class="text-center lead">ချောရယ်</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/Owlq9se6hIU" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_Final_1/semi1001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Hnin Eaindray Shin</h4>
						<p class="text-center lead">မနဲ့မောင်</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/DZ59UmIvKs8" class="btn btn-outline-danger btn-block my-3">Play Video</a>
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
			<div class="col-12  embed-responsive embed-responsive-21by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MTLQDA6_WLo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
	<h2 class="container pt-5">Live Final ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_1/semig1001.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_1/semig1002.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_1/semig1003.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_1/semig1004.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
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
			<div class="col-lg-3 col-md-4 col-sm-4 px-5">
				<img src="{{asset('myasset/images/cover/con1.gif')}}" class="img-fluid">
			</div>
			<div class="col-lg-9 col-md-8 col-sm-8">
				<img src="{{asset('myasset/images/cover/semi1.png')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('live1_2page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('final1page')}}" class="btn btn-danger px-4">Next</a>
	</div>

	@endsection