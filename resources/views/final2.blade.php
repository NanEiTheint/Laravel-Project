@extends('master')
@section('title','Live Final Season 2')
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
			        <h1 class="display-3">The Voice Myanmar 2019</h1>
			        <button class="btn btn-secondary" id="btnVideo">Pause</button>
			        <!-- <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p> -->
			      </div>
			    </div>
			  </div>
		</header>
	</div>
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">2 </span>Live Final</h1>
	<p class="container lead">ကဲပရိတ်သတ်ကြီးရေ သင်တို့ကြိုက်နှစ်သက်တဲ့ ပြိုင်ပွဲဝင်များကို မဲပေးလိုပါက
	📢📢📢....................</p>
	<div class="container pb-5">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Final_2/liveV2004.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Final_2/liveV2005.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Final_2/liveV2009.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Final_2/liveV2013.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<h1 class="text-center py-5">Live Final 
		<span class="pl-3">
			<i class="fas fa-microphone-alt text-danger"></i>
		</span>
	</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Final_2/2.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Hazel </h4>
						<p class="text-center lead">Tit Kyawt Nhit Kyawt Tay Ko Thi</p>
						<h4 class="text-center text-danger">55503</h4>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/Q6GF5onC_Sw" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Final_2/3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Novem Htoo </h4>
						<p class="text-center lead">Nut Kyaw</p>
						<h4 class="text-center text-danger">55506</h4>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/545LSkKhERg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Final_2/1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Melody Khong</h4>
						<p class="text-center lead">Jatsin Htet Ka Lah yet Pya</p>
						<h4 class="text-center text-danger">55512</h4>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/kOK2KqV0Ygs" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Final_2/4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Paul Austin</h4>
						<p class="text-center lead">Thakin</p>
						<h4 class="text-center text-danger">55513</h4>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/zeYp5tWjSpU" class="btn btn-outline-danger btn-block my-3">Play Video</a>
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

			<div class="col-lg-5 col-md-5 my-4 embed-responsive embed-responsive-1by1">
				<iframe src="https://www.youtube.com/embed/cGGizKuxT8E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-1 col-md-1  my-4"></div>
			<div class="col-lg-5 col-md-5  my-4 embed-responsive embed-responsive-1by1">
				<iframe src="https://www.youtube.com/embed/_rZoO5LtBG0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-5 col-md-5 my-4 embed-responsive embed-responsive-1by1">
				<iframe src="https://www.youtube.com/embed/chj1388CBlE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-1 col-md-1  my-4"></div>
			<div class="col-lg-5 col-md-5  my-4 embed-responsive embed-responsive-1by1">
				<iframe src="https://www.youtube.com/embed/kwGGPBbYcGM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

		</div>
		
	</div>
	<div class="container py-5">
		<div class="row">
			<div class="col-11  embed-responsive embed-responsive-21by9">
				<iframe src="https://www.youtube.com/embed/VnX_FMX1UFM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<h2 class="container pt-5">The Voice Myanmar Season <span class="text-danger font-italic">2</span> Winner is 📢📢📢.............</h2>
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
				<img src="{{asset('myasset/images/cover/winner2.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('semiFinal2page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
	</div>
	@endsection