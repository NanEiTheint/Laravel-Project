@extends('master')
@section('title','Live Semi Final Season 2')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">2</span> Live Semi Final</h1>
	<p class="container lead">ကဲပရိတ်သတ်ကြီးရေ သင်တို့ကြိုက်နှစ်သက်တဲ့ ပြိုင်ပွဲဝင်များကို မဲပေးလိုပါက
	📢📢📢....................</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2001.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2002.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2003.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2004.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2005.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2006.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2007.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_2_winner/lw2008.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<h1 class="text-center py-5">Live Semi Final 
		<span class="pl-3">
			<i class="fas fa-microphone-alt text-danger"></i>
		</span>
	</h1>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Solomon King</h4>
						<p class="text-center lead">Su Taung</p>
						<h4 class="text-center text-danger">55509</h4>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/CKeuK3Xt-ho" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/2.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Melody Khong</h4>
						<p class="text-center lead">Kho Lone Yar</p>
						<h4 class="text-center text-danger">55512</h4>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/wF_zBxSKmNY" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Paul Austin</h4>
						<p class="text-center lead">Fight Song</p>
						<h4 class="text-center text-danger">55513</h4>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/gSJbroaOOpQ" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Lynn Khatt</h4>
						<p class="text-center lead">A Linn Saing Yae Tha Chin</p>
						<h4 class="text-center text-danger">55516</h4>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/bNY861eMurg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Hazel</h4>
						<p class="text-center lead">Kha Yay Lann Diary</p>
						<h4 class="text-center text-danger">55503</h4>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/i5-AEWjdFSU" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/6.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Nicholas Pasangma</h4>
						<p class="text-center lead">Shwe Pin Lal</p>
						<h4 class="text-center text-danger">55502</h4>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/_zATVjV6ApQ" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Novem Htoo</h4>
						<p class="text-center lead">Khin Myar Yae A Kyaung</p>
						<h4 class="text-center text-danger">55506</h4>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/4dxzz1GmspM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Semi_final_2/8.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Nyo Mie Mie Htun </h4>
						<p class="text-center lead">Ma Nyi Mya Chin</p>
						<h4 class="text-center text-danger">55505</h4>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/pBTGKGJxFgA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
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
	<div class="container pb-5">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pr-5">
				<iframe src="https://www.youtube.com/embed/pJ_iwOQARuM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-2 py-3"></div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pl-5">
				<iframe src="https://www.youtube.com/embed/IkWWid5kNbg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
	<h2 class="container pt-5">Live Final ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_2/g1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_2/g2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_2/g3.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Semi_Final_2/g4.jpg')}}" class="img-fluid">
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
				<img src="{{asset('myasset/images/Semi_Final_2_Winner/w1.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('live2page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('final2page')}}" class="btn btn-danger px-4">Next</a>
	</div>

	@endsection