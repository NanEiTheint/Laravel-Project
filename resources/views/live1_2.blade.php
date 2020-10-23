@extends('master')
@section('title','Live Show Round2 Season 1')
@section('contect')
	<div class="container py-3 mt-5">
		<header>
			  <div class="overlay"></div>
			  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
			    <source src="{{asset('myasset/images/../images/myanmar1.mp4')}}" type="video/mp4">
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">1</span> Live Show Round<span class="text-danger font-italic">2</span></h1>
	<p class="container lead">ကဲပရိတ်သတ်ကြီးရေ သင်တို့ကြိုက်နှစ်သက်တဲ့ ပြိုင်ပွဲဝင်များကို မဲပေးလိုပါက <a href="">thevoice.mptvote.com </a>တွင် ဝင်ရောက်ပြီး စိတ်ကြိုက်Voting ပေးပို့နိုင်ပါပြီရှင်
	📢📢📢..........</p>
	<div class="container">
		<div class="row">
			
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Hnin Eaindray Shin</h4>
						<p class="text-center">ငါ့ရဲ့ Rebecca</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/l08NdrC543A" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/2.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Jawa Aung Moon</h4>
						<p class="text-center">မောဟစားသူများ</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/MR78R3kvwxM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Ye Naing Htoo</h4>
						<p class="text-center">Delilah</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/GLhmksvhVSk" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Sai N</h4>
						<p class="text-center">I Don't Want To Miss A Thing</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/K131wHTgBgg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/6.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Oishi</h4>
						<p class="text-center">Thinking Out Loud</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/clwAKlpD6qA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Thaw Di</h4>
						<p class="text-center">အမိန်</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/05H-l1wbS6M" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Myat Myat Myo Htet</h4>
						<p class="text-center">Symphony</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/NLLS3Jf2HWs" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/8.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Khaing Myae Thitsar</h4>
						<p class="text-center">Girl On Fire</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/NW7QxzqtHDg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h1 class="text-center py-5">V Specials 
		<span class="pl-3">
			<i class="fas fa-microphone-alt text-danger"></i>
		</span>
	</h1>
	<div class="container py-3">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-6">
				<h1 class="text-center text-danger">Team KP</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-6">
				<h1 class="text-center text-danger">Team YC</h1>
			</div>
		</div>
	</div>

	<div class="container pb-5">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pr-5">
				<iframe src="https://www.youtube.com/embed/oTjSqY3X5go" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-2 py-3"></div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pl-5">
				<iframe src="https://www.youtube.com/embed/PvSn4XxR0Lw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<h1 class="container py-5">Continue Competition <span class="pl-3">
			<i class="fas fa-microphone-alt text-danger">  ......................</i>
		</span>
	</h1>

	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/12.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Wai Hnin Maung</h4>
						<p class="text-center">သူငယ်ချင်း အတွက်</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/USBOr9B2nac" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/14.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Andrew</h4>
						<p class="text-center">ပါးပါးလေးပါ</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/lZD6E5AMD9s" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/13.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Mark Jason</h4>
						<p class="text-center">All Out Of Love</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/jrsAc_5SN6U" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/15.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Grace Monica</h4>
						<p class="text-center">Colors Of The Wind</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/ZMLRI0SUc30" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/16.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Ip Shen Paung</h4>
						<p class="text-center">ဆူးလေး</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/2v5QFJzwXbY" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/11.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Pyae Say Maung</h4>
						<p class="text-center">ဝေးပြီဘေဘီ</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/94suQT68it0" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/9.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Ce Ce</h4>
						<p class="text-center">Hero</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/RSai3BEkDlU" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/../images/Live_Show_1_2/10.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Ngwe Soe</h4>
						<p class="text-center">အမေ့ရုပ်ရည်</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/sQK7bUFqFyc" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<h1 class="text-center py-5">V Specials 
		<span class="pl-3">
			<i class="fas fa-microphone-alt text-danger"></i>
		</span>
	</h1>
	<div class="container py-3">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-6">
				<h1 class="text-center text-danger">Team NINI</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-6">
				<h1 class="text-center text-danger">Team LYNN</h1>
			</div>
		</div>
	</div>

	<div class="container pb-5">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pr-5">
				<iframe src="https://www.youtube.com/embed/uzcFlTZG76w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-2 py-3"></div>

			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pl-5">
				<iframe src="https://www.youtube.com/embed/Rv7rxX6OOJs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			
		</div>
	</div>
	<h2 class="container pt-5">Live Semi Final ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>
	<div class="container pt-3 pb-5">
		<div class="row">
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/../images/Live_Show_1_2/liveg12001.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/../images/Live_Show_1_2/liveg12002.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/../images/Live_Show_1_2/liveg12003.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/../images/Live_Show_1_2/liveg12004.jpg')}}" class="img-fluid">
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
				<img src="{{asset('myasset/images/../images/cover/con1.gif')}}" class="img-fluid">
			</div>
			<div class="col-lg-7 col-md-4 col-sm-4">
				<img src="{{asset('myasset/images/../images/Live_Show_1_2_winner/1.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('live1_1page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('semiFinal1page')}}" class="btn btn-danger px-4">Next</a>
	</div>
	@endsection