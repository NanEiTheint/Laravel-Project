@extends('master')
@section('title','Live Show Season 2')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">2</span> Live Show Round</h1>
	<p class="container py-5 lead">ကဲ ပရိတ်သတ်ကြီးရေ သင်တို့ကြိုက်နှစ်သက်တဲ့ပြိုင်ပွဲဝင်တေကိုယ်တိုင်က ရှင်းပြထားတဲ့ Voting အကြောင်းလေးများကတေ့ာ👇👇👇<p>

	<!-- 📢📢📢.......... -->
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/HM4MkaAxeso" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/xalRmvkyYQQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/BJdvgWZUGSg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/kNOHgRh94Y8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/FnN0JIks-ls" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/Xs2aN90vIkU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/syQjYazRfGE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/qYLFEItrD7g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/J9CSeKFM5Lk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/qULPWXoqhFo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/rqzHoX6MFbU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/gU3yaaTEWMU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/DVJpVk88lyo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/TUOQGzhUSuc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/Yw4ATaNCCCA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/vE3LfXWJORs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			
			
		</div>
	</div>
	<h1 class="text-center py-5">My Memory Of The Voice</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/bWcqOxhAUOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/BqugI9sa9Nw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/Fv7GeGxaM_g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/hNSeW9khggE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/q4LRp9ZdOMo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/qhgJKhGjj64" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/Sv_1NLbyOg0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/PKRZlboCq08" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/Lc6ABqlJTYo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/q-mz5R3Efrs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/nGrPA0Gkimk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/RtkQaFjiXpY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/2u4QKzX0-rA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/2Y4Qj_p79uc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/o4e8eDyZx2U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 py-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/7pFSS3N9ixM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
		</div>
	</div>
	<h1 class="py-5 text-center">Live Show 
		<span class="pl-3">
			<i class="fas fa-microphone-alt text-danger"></i>
		</span>
	</h1>
	<div class="container">
		<div class="row">
			
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/l4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">A Day</h4>
						<p class="text-center">Uptown Funk</p>
						<h4 class="text-center text-danger">55504</h4>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/xihxRyEiYyQ" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/l3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Hazel </h4>
						<p class="text-center">Bone</p>
						<h4 class="text-center text-danger">55503</h4>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/MKK3QYqdDn4" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/l2.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Nicholas Pasangma </h4>
						<p class="text-center">Shallow</p>
						<h4 class="text-center text-danger">55502</h4>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/njp4DSVW1lI" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/l1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Twins Star</h4>
						<p class="text-center">Honey</p>
						<h4 class="text-center text-danger">55501</h4>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/Zo1R6CNxXKk" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L8.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">C Ko</h4>
						<p class="text-center">So Cold</p>
						<h4 class="text-center text-danger">55508</h4>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/zAExjrUidgA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Judson Fish</h4>
						<p class="text-center">A Maw Pyay</p>
						<h4 class="text-center text-danger">55507</h4>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/2p44g6k6Jbc" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L6.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Novem Htoo</h4>
						<p class="text-center">Wait and Bleed</p>
						<h4 class="text-center text-danger">55506</h4>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/EnPAyvr8-8I" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Nyo Mie Mie Htun</h4>
						<p class="text-center">Nger Yae La Min</p>
						<h4 class="text-center text-danger">55505</h4>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/utL1VYDGyxM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
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
				<h1 class="text-center text-danger">Team KP</h1>
			</div>
		</div>
	</div>

	<div class="container pb-5">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pr-5">
				<iframe src="https://www.youtube.com/embed/elDUazJevas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-2 py-3"></div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pl-5">
				<iframe src="https://www.youtube.com/embed/_3qqqBf5xdY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
					<img src="{{asset('myasset/images/Live_Show_2/L10.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Solomon King </h4>
						<p class="text-center">Unchained Melody</p>
						<h4 class="text-center text-danger">55509</h4>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/1aSp2AAZJQc" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L12.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Hein Zaw Lin</h4>
						<p class="text-center">Chit Nay Phoe</p>
						<h4 class="text-center text-danger">55511</h4>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/mTZS1dwhbRE" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L9.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Melody Khong</h4>
						<p class="text-center">The Old You</p>
						<h4 class="text-center text-danger">55512</h4>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/dOR1G4UGlIs" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L11.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Yamone Zin Oo</h4>
						<p class="text-center">Hta Min Sar Yae Thout</p>
						<h4 class="text-center text-danger">55510</h4>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/TWhEaQBfWeI" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/L14.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">David Htoo</h4>
						<p class="text-center">Suh Lub</p>
						<h4 class="text-center text-danger">55514</h4>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/j0G1lzp-Q_0" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/l16.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Lynn Khatt</h4>
						<p class="text-center">A Phay Sakar</p>
						<h4 class="text-center text-danger">55516</h4>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/3tbEYFPB6Zk" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/l15.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Pan Pan Kye Mon</h4>
						<p class="text-center">ASoonYoutChitTatKaeThaw-2</p>
						<h4 class="text-center text-danger">55515</h4>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/pYNR6dBkIo8" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Live_Show_2/l13.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h4 class="text-center">Paul Austin</h4>
						<p class="text-center">Lan Khwel</p>
						<h4 class="text-center text-danger">55513</h4>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/UkBx5r5Y0Zg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
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
				<h1 class="text-center text-danger">Team YC</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-6">
				<h1 class="text-center text-danger">Team RZN</h1>
			</div>
		</div>
	</div>

	<div class="container pb-5">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pr-5">
				<iframe src="https://www.youtube.com/embed/Wt4g_uTawUs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-2 py-3"></div>

			<div class="col-lg-5 col-md-5 col-sm-5 col-5 py-3 embed-responsive embed-responsive-1by1 pl-5">
				<iframe src="https://www.youtube.com/embed/2fT0dShPwRM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			
		</div>
	</div>
	<h2 class="container pt-5">Live Semi Final ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>
	<div class="container pt-3 pb-5">
		<div class="row">
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_2/g11.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_2/g2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_2/g3.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Live_Show_2/g4.jpg')}}" class="img-fluid">
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
			<div class="col-lg-7 col-md-4 col-sm-4">
				<img src="{{asset('myasset/images/Live_Show_2_winner/w1.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="container py-5">
		<a href="{{route('knock2page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('semiFinal2page')}}" class="btn btn-danger px-4">Next</a>
	</div>
	
@endsection