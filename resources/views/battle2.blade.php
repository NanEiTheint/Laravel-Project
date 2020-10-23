@extends('master')
@section('title','Battles Season 2')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">2</span> Battles</h1>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
			
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/12.png')}}" class="img-fluid">
							<h6 class="text-center">Tar Tar</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/46.jpg')}}" class="img-fluid">
							<h6 class="text-center">Pai Soe</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team NINI</p>
						<p class="text-center lead">Sa Da Tit Sone</p>
						<a href="https://youtu.be/QDqceaGEqn0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/39.jpg')}}" class="img-fluid">
							<h6 class="text-center">Zin Mar Moe Sett</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/32.jpg')}}" class="img-fluid">
							<h6 class="text-center">David Htoo</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team RZN</p>
						<p class="text-center lead">Nga Yae Tatto</p>
						<a href="https://youtu.be/MJWu6LRfyg8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/40.jpg')}}" class="img-fluid">
							<h6 class="text-center">Lynn Khatt</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/17.jpg')}}" class="img-fluid">
							<h6 class="text-center">Grin Go</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">Yuu Chin Yaung Saun Ma Nay Nat</p>
						<a href="https://youtu.be/Lse6G85Yvxo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/27.jpg')}}" class="img-fluid">
							<h6 class="text-center">Grace Mami</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/5.jpg')}}" class="img-fluid">
							<h6 class="text-center">Khine</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Like I'm Gonna Lose You</p>
						<a href="https://youtu.be/Wo4hYJha_lc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/35.jpg')}}" class="img-fluid">
							<h6 class="text-center">Hpong Hpong</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/4.jpg')}}" class="img-fluid">
							<h6 class="text-center">Twins Star</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team NINI</p>
						<p class="text-center lead"><!-- UBaNyuntYaeChitDoteKha/KyarParDal Kawar -->ကြာပါတယ်ကွာ/ဦးဘညွန့်ရဲ့ချစ်ဒုက္ခ</p>
						<a href="https://youtu.be/4KJPsVNsncY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/3.jpg')}}" class="img-fluid">
							<h6 class="text-center">Novem Htoo</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/48.jpg')}}" class="img-fluid">
							<h6 class="text-center">Khine Zang</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">A Toe Ma Kha Ta Hnin Si </p>
						<a href="https://youtu.be/Ex2408mCT2c" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/9.png')}}" class="img-fluid">
							<h6 class="text-center">Aung Naing Min</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/44.jpg')}}" class="img-fluid">
							<h6 class="text-center">Harsaylar</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team RZN</p>
						<p class="text-center lead">KyoePaKattNiteNgiTwalChin</p>
						<a href="https://youtu.be/-59ofVqVyLw" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/2.jpg')}}" class="img-fluid">
							<h6 class="text-center">Khoon Wadi Pyae</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/41.jpg')}}" class="img-fluid">
							<h6 class="text-center">Aye Thazin Mg</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team NINI</p>
						<p class="text-center lead">PhayPhayLayNetNyeikNyeikLay</p>
						<a href="https://youtu.be/7jpw30iuqOk" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/26.jpg')}}" class="img-fluid">
							<h6 class="text-center">Yamone Zin Oo</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/43.jpg')}}" class="img-fluid">
							<h6 class="text-center">Triz</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">Let's Go/Welcome To The Party</p>
						<a href="https://youtu.be/7jOlbtKcLmg" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/37.jpg')}}" class="img-fluid">
							<h6 class="text-center">Phyo Htet Ko </h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/24.jpg')}}" class="img-fluid">
							<h6 class="text-center">C Ko</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Myint Na Sin Yae Pin Lal</p>
						<a href="https://youtu.be/5iFwsJT60no" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/7.jpg')}}" class="img-fluid">
							<h6 class="text-center">Hein Zaw Lin</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/15.png')}}" class="img-fluid">
							<h6 class="text-center">Zay Yè Paing </h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">Nhit Taite Tay</p>
						<a href="https://youtu.be/XefU7N52ICQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/16.jpg')}}" class="img-fluid">
							<h6 class="text-center">Hazel</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/20.jpg')}}" class="img-fluid">
							<h6 class="text-center">Melody Khong</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team NINI</p>
						<p class="text-center lead">Tate Chit Yin Kar Mal</p>
						<a href="https://youtu.be/-ETy66HY3p8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/19.jpg')}}" class="img-fluid">
							<h6 class="text-center">Paul Austin</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/47.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ester Moon Mai</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team RZN</p>
						<p class="text-center lead">You Are The Reason</p>
						<a href="https://youtu.be/Hdkjs-aZw0Q" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/6.jpg')}}" class="img-fluid">
							<h6 class="text-center">Just</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/33.jpg')}}" class="img-fluid">
							<h6 class="text-center">Lhyan Wai Myat</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">If I Lose Myself</p>
						<a href="https://youtu.be/xOnCrC_vxuY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/21.jpg')}}" class="img-fluid">
							<h6 class="text-center">Solomon King</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/45.jpg')}}" class="img-fluid">
							<h6 class="text-center">Roi San </h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">Hallelujah</p>
						<a href="https://youtu.be/lXqST9wOcTs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/14.png')}}" class="img-fluid">
							<h6 class="text-center">Thunn</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/25.jpg')}}" class="img-fluid">
							<h6 class="text-center">Sai Thein Kha Aung</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team NINI</p>
						<p class="text-center lead">Yin Kwin Nann Daw</p>
						<a href="https://youtu.be/wVgpdM9hIp4" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/28.jpg')}}" class="img-fluid">
							<h6 class="text-center">June Rose </h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/34.jpg')}}" class="img-fluid">
							<h6 class="text-center">Oram</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team RZN</p>
						<p class="text-center lead">Sone Ma</p>
						<a href="https://youtu.be/N2fLj5Bh-lI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/11.png')}}" class="img-fluid">
							<h6 class="text-center">Nyo Mie Mie Htun</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/8.png')}}" class="img-fluid">
							<h6 class="text-center">Kyal Zin </h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Juu Di</p>
						<a href="https://youtu.be/ILCHSYOPVck" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/1.jpg')}}" class="img-fluid">
							<h6 class="text-center">A Day</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/13.png')}}" class="img-fluid">
							<h6 class="text-center">Pan Pan Kye Mon</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team RZN</p>
						<p class="text-center lead">Mee Htal Toe Mae Achit </p>
						<a href="https://youtu.be/CZn21b2gLBE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/30.jpg')}}" class="img-fluid">
							<h6 class="text-center">Biko</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/10.png')}}" class="img-fluid">
							<h6 class="text-center">Nicholas</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team NINI</p>
						<p class="text-center lead">El Thae</p>
						<a href="https://youtu.be/SfTAZ0Ln6oY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/22.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ya Ti</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/36.jpg')}}" class="img-fluid">
							<h6 class="text-center">Arkar Aung Khin Win</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">ZatTawHtalMharALwanSone</p>
						<a href="https://youtu.be/avDWJEEOBbc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/23.jpg')}}" class="img-fluid">
							<h6 class="text-center">Khant Shine</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/29.jpg')}}" class="img-fluid">
							<h6 class="text-center">Htin Gyi</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team RZN</p>
						<p class="text-center lead">NauntSoneTaBawHtar</p>
						<a href="https://youtu.be/8oHjWksbyKA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/38.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ronnie</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/42.jpg')}}" class="img-fluid">
							<h6 class="text-center">Kim Kim</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Hollywood</p>
						<a href="https://youtu.be/X4_c6ufoQSs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/18.jpg')}}" class="img-fluid">
							<h6 class="text-center">Jue Jue</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_2/31.jpg')}}" class="img-fluid">
							<h6 class="text-center">Judson Fish</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Kyoe Nay Say Chin Tal</p>
						<a href="https://youtu.be/ChZPbevCjlE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
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
	<h1 class="text-center py-5 battle1">Season<span class="text-danger">2</span> Battles Result is...............</h1>
	<div class="container battle1">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/3.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/4.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/5.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/6.jpg')}}" class="img-fluid">
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/7.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/8.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/9.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/10.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/11.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/12.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/13.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/14.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/15.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/16.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-53">
				<img src="{{asset('myasset/images/Battle_2_winner/17.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/18.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/19.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/20.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/21.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/22.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/23.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/24.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/25.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/26.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/27.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/28.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/29.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/30.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/31.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_2_winner/32.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>

	<div class="container  py-5 result_header" id="winner">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/Battle_2_winner/g1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/Battle_2_winner/g2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/Battle_2_winner/g3.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/Battle_2_winner/g4.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>

		
	<div class="container py-5">
		<a href="{{route('blind2page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('knock2page')}}" class="btn btn-danger px-4">Next</a>
	</div>	
	@endsection