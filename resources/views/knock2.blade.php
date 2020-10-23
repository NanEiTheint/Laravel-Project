@extends('master')
@section('title','Knockout Round Season 2')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">2 </span>Knock Out Round</h1>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/2.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">C Ko</h5>
						<p class="text-center">အမှောင်ထဲကသူစိမ်းများကြောင်း</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/b0Jpc9ObdLI" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Khoon Wadi Pyae</h5>
						<p class="text-center">Lay Yin Pyan 2 </p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/crrn7qVEZNA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Novem Htoo</h5>
						<p class="text-center">Faint</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/9GtHQzGg79E" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Aye Thazin Maung</h5>
						<p class="text-center">နေဝင်သွားတဲ့နံနက်ခင်း</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/5mjzSm0_s6A" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/8.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">A Day </h5>
						<p class="text-center">Nauk Htet Ma Shi</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/i2_pmaWHmws" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Kim Kim</h5>
						<p class="text-center">A Bal Kyout So Taw</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/Cug0csU1gbE" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/6.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Twins Star</h5>
						<p class="text-center">DeTwinPanZinLyinDwinMar</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/ixFec72hvCw" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Sai Tein Kha Aung</h5>
						<p class="text-center">MaungKhawYarLiteMharLar</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/wwfOg2niPQc" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
			
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/14.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">David Htoo</h5>
						<p class="text-center">NaungKaungLayAhTwat</p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/ypXY2tI8OtM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/13.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Harsaylar</h5>
						<p class="text-center">Law Ka Hin Lin Pyin</p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/0KHdxKEx1DQ" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/15.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Ju Jue</h5>
						<p class="text-center">A Thea Kuei Nyah Nyi Khine</p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/eYGepOd85zs" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/32.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Pan Pan Kye Mon</h5>
						<p class="text-center">Dote Kha Myit</p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/5TH3psLs4-o" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/10.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Hein Zaw Lin</h5>
						<p class="text-center">မူပိုင်ရှင်မကြီးမမခိုင်</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/Up0rM9J6ri0" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/9.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Yamone Zin Oo</h5>
						<p class="text-center">A Thae Kwal Ma Nay Nae</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/8aghE6VOPV8" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/12.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Zin Mar Moe Sett</h5>
						<p class="text-center">Yan Thu Taw Chaut Par</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/IUhgt3Q4rrA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/11.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Grin Go </h5>
						<p class="text-center">A Lwan Yelt Nya</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/otnIx17Yrm0" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/29.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Khine</h5>
						<p class="text-center">NarYiPawKaMyatYaySattMyar</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/YRihUOgrBBA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/27.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Judson Fish</h5>
						<p class="text-center">This Love</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/fDXbAfu7JAI" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/28.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Nyo Mie Mie Htun</h5>
						<p class="text-center">Toxic</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/SHnoZYSuub0" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/30.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Oram</h5>
						<p class="text-center">YinKhoneTanAYinHneeSone</p>
						<p class="text-center lead">TEAM KP</p>
						<a href="https://youtu.be/K7nYGaql214" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/19.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Paul Austin</h5>
						<p class="text-center">NOUT SONE YIN KWIN </p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/vnHbQXlzkog" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/16.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Lynn Khatt</h5>
						<p class="text-center">Ta Nay Sar A Lwe Myar</p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/jgL1YZoWRgg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/17.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">June Rose </h5>
						<p class="text-center">A the Kwe a Htein a Mhat</p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/2EjwjOBD1hM" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/18.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Htin Gyi</h5>
						<p class="text-center">Kyu Shin Hlay Khar Yin</p>
						<p class="text-center lead">TEAM RZN</p>
						<a href="https://youtu.be/mRx22A7EBvg" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/23.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Melody Khong</h5>
						<p class="text-center">Where Have You Been</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/Pq590xLLWT4" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/20.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Solomon King</h5>
						<p class="text-center">Say</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/x4ZOQPxFrkA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/22.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Arkar Aung Khin Win</h5>
						<p class="text-center">Bal Lo Lote Ya Ma Lal</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/Kvn3zzSb_0s" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/21.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Just</h5>
						<p class="text-center">Eyes, Nose, Lips</p>
						<p class="text-center lead">TEAM YC</p>
						<a href="https://youtu.be/F95jVL1OvxA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/24.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Tar Tar</h5>
						<p class="text-center">Tate Paing Tae Min</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/tbwlw4_UIgA" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/26.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Grace Mami</h5>
						<p class="text-center">A Chit Art Sis</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/QRgAq0CPyQ4" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/25.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Hazel</h5>
						<p class="text-center">Moe Yay Sat Myar</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/F7ATE44eWYo" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 py-3">
				<div class="card">
					<img src="{{asset('myasset/images/Knock_out_2/31.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Nicholas Pasangma</h5>
						<p class="text-center">Moe Yay Sat Myar</p>
						<p class="text-center lead">TEAM NINI</p>
						<a href="https://youtu.be/iOZSRBUnbgo" class="btn btn-outline-danger btn-block my-3">Play Video</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<h2 class="container pt-5">Live Show Round </span> ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>

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
			
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2001.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2002.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2003.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2004.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2005.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2006.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2007.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2008.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2009.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2010.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2011.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2012.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2013.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2014.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2015.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-3  col-sm-4 py-3">
				<img src="{{asset('myasset/images/Knock_Out_2_winner/KW2016.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	
	<!-- <h1 class="container live1_1_winner">Congratulation All............................</h1> -->
	

	<div class="container py-5">
		<a href="{{route('battle2page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('live2page')}}" class="btn btn-danger px-4">Next</a>
	</div>
@endsection