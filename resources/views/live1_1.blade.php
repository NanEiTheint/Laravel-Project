@extends('master')
@section('title','Live Show Round1 Season 1')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">1</span> Live Show Round<span class="text-danger font-italic">1</span></h1>
	<p class="container lead">ကဲပရိတ်သတ်ကြီးရေ သင်တို့ကြိုက်နှစ်သက်တဲ့ ပြိုင်ပွဲဝင်များကို မဲပေးလိုပါက <a href="">thevoice.mptvote.com </a>တွင် ဝင်ရောက်ပြီး စိတ်ကြိုက်Voting ပေးပို့နိုင်ပါပြီရှင်
	📢📢📢..........</p>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/2.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Sai N</h5>
						<p class="text-center">ရူးတဲ့အိန်ဂျယ်</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/b4AooEu5XqY" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Thaw Di</h5>
						<p class="text-center">Apologize</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/xWRd89-c4jU" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Sandy</h5>
						<p class="text-center">Rockabye</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/hgxDngKbPlM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Hsu Lae Hnin</h5>
						<p class="text-center">Sweet Child O' Mine</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/9w7QfBgVQVk" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Ngwe Soe</h5>
						<p class="text-center">ရင်ချင်းဆက်ချည်တဲ့ကြိုး</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/pRhtnlcQF7g" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/6.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h45 class="text-center">Ce Ce</h5>
						<p class="text-center">My Heart Will Go On</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/y8lwA6bK3As" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Grace Monica</h5>
						<p class="text-center">Part of Your World</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/TlUk3tALzQw" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/8.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Andrew</h5>
						<p class="text-center">လေထဲကဖယောင်းတိုင်</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/PC2SsVf4vGA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
			
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/10.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Yoe Yoe</h5>
						<p class="text-center">စဉ်းစားပါအုံး</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/Y571BHMkHFA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/12.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Jawa Aung Moon</h5>
						<p class="text-center">အမှတ်တရညနေ</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/Ru3R-g6SRO4" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/13.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Susan Aye</h5>
						<p class="text-center">Psycho Killer</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/8dLc0eHr-XI" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/14.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Ye Naing Htoo</h5>
						<p class="text-center">Love Me Tender</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/exbbMydMK2c" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/15.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Hnin Eaindray Shin</h5>
						<p class="text-center">Love of My Life</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/Ti2Vr6_LRog" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/18.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Ip Shen Paung</h5>
						<p class="text-center">ချယ်ရီလမ်း</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/11zzyCVR3aQ" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/17.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Pyae Say Maung</h5>
						<p class="text-center">Zombie</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/JO6V93kmDaU" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/24.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Woofer</h5>
						<p class="text-center">ရေတိမ်နစ်ခြင်း</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/REkdXTsL2gA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/20.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Mark Jason</h5>
						<p class="text-center">ဝေဒနာ</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/p0JyHsTMaZs" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/19.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Thet Noe Wai</h5>
						<p class="text-center">မင်းလေးကိုချစ်လို့</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/9y8RH0UgU8k" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/21.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Wai Hnin Maung</h5>
						<p class="text-center">Let's Get Loud</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/tYy4_826uBo" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/22.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Oishi</h5>
						<p class="text-center">Billionaire</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/ACGjfpjE0QM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/16.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Nang Zarchi Lynn</h5>
						<p class="text-center">နှုတ်ဆက်ခွဲခွာခြင်း</p>
						<p class="text-center lead">TEAM LYNN</p>
						<a href="https://youtu.be/FZSCndVPxYg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/11.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Myet Myet Myo Htet</h5>
						<p class="text-center">I Want To Hold Your Hand</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/89e_Y0QYYh0" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/23.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Khaine Myae Thitsar</h5>
						<p class="text-center">မဟောင်းတဲ့နေ့</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/1EemmSVF4cg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_1_1/9.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Jubilee Tun</h5>
						<p class="text-center">Making Love Out of Nothing At All</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/LqRsinrCxrM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<h2 class="container pt-5">Live Show Round<span class="text-danger font-italic">2</span> ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11025.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11026.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11027.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11028.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11029.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11030.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11031.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1/live11032.jpg')}}" class="img-fluid">
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
	<!-- <h1 class="container live1_1_winner">Congratulation All............................</h1> -->
	<div class="container live1_1_winner">
		<div class="row">
			<div class="col-lg-2">
				<img src="{{asset('myasset/images/cover/con1.gif')}}" class="img-fluid">
			</div>
			<div class="col-lg-8 pt-5 mb-5">
				<p class="lead">......................................................................</p>
			</div>
		</div>
	</div>
	<div class="container py-5 live1_1_winner">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/3.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/4.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/5.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/6.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/7.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/8.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/9.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/10.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/11.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/12.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/13.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/14.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/15.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 py-3">
				<img src="{{asset('myasset/images/Live_Show_1_1_Winner/16.jpg')}}" class="img-fluid">
			</div>

		</div>
	</div>

	<div class="container py-5">
		<a href="{{route('battle1page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('live1_2page')}}" class="btn btn-danger px-4">Next</a>
	</div>

	@endsection