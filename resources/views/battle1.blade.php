@extends('master')
@section('title','Battles Season 1')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">1</span> Battles</h1>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
			
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1047.jpg')}}" class="img-fluid">
							<h6 class="text-center">Wai Hnin Pwint</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1048.jpg')}}" class="img-fluid">
							<h6 class="text-center"> Wai Hnin Maung</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Ni Ni</p>
						<p class="text-center lead">Havana</p>
						<a href="https://youtu.be/nbZ2tH6EGSk" class="btn btn-outline-danger btn-block">Play Video</a>
						<!-- <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="https://youtu.be/nbZ2tH6EGSk" class="btn btn-outline-danger">PlayV</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="https://youtu.be/nbZ2tH6EGSk" class="btn btn-outline-danger">SpecialV</a>
							</div>
						</div> -->
						
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1043.jpg')}}" class="img-fluid">
							<h6 class="text-center">Tsaw Tsaw </h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1044.jpg')}}" class="img-fluid">
							<h6 class="text-center">Yoe Yoe</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">ဒုတိယလူ</p>
						<a href="https://youtu.be/O4bgcMU8FCo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1045.jpg')}}" class="img-fluid">
							<h6 class="text-center">Julia Htay</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1046.jpg')}}" class="img-fluid">
							<h6 class="text-center">Woofer</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">ဒီလိုလုပ်လိုက်ပါလား</p>
						<a href="https://youtu.be/f1fJEIzw3_k" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1041.jpg')}}" class="img-fluid">
							<h6 class="text-center">Hlaing Myo Thu</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1042.jpg')}}" class="img-fluid">
							<h6 class="text-center">Jubilee Tun</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Ni Ni</p>
						<p class="text-center lead">If I Ain't Got You</p>
						<a href="https://youtu.be/qXuSlW4GqhA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1038.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ce Ce</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1040.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ryan Htun</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Lynn</p>
						<p class="text-center lead">I'll Always Love You</p>
						<a href="https://youtu.be/3HGcJUll6rM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1037.jpg')}}" class="img-fluid">
							<h6 class="text-center">Waii Ryan</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1039.jpg')}}" class="img-fluid">
							<h6 class="text-center">JaWah Aung Moon</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Rock 'n' Roll Show</p>
						<a href="https://youtu.be/_GGl3L3Osbo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1035.jpg')}}" class="img-fluid">
							<h6 class="text-center">Bawa</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1036.jpg')}}" class="img-fluid">
							<h6 class="text-center">Susan Aye</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Accident</p>
						<a href="https://youtu.be/gCHLJFKMhXw" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1033.jpg')}}" class="img-fluid">
							<h6 class="text-center">Aww Aww</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1034.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ip Shen Paung</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Lynn</p>
						<p class="text-center lead">ခေါ်သံ</p>
						<a href="https://youtu.be/2FHRuQxKd_I" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1032.jpg')}}" class="img-fluid">
							<h6 class="text-center">Priscilla Htike</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1031.jpg')}}" class="img-fluid">
							<h6 class="text-center">Thaw Di</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">Halo</p>
						<a href="https://youtu.be/zqxPUSGmbdw" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1030.jpg')}}" class="img-fluid">
							<h6 class="text-center">Aung Gyi</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1029.jpg')}}" class="img-fluid">
							<h6 class="text-center">Hsu Lae Hnin</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Lynn</p>
						<p class="text-center lead">အရည်ပျော်ခြင်း</p>
						<a href="https://youtu.be/Tqm6mbuW0vc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1027.jpg')}}" class="img-fluid">
							<h6 class="text-center">Micky</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1028.jpg')}}" class="img-fluid">
							<h6 class="text-center">Oishi</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">Don't Let Me Down</p>
						<a href="https://youtu.be/QP2B2uE68XQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1026.jpg')}}" class="img-fluid">
							<h6 class="text-center">Jason Ace</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1025.jpg')}}" class="img-fluid">
							<h6 class="text-center">Mark Jason</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Ni Ni</p>
						<p class="text-center lead">All Of Me</p>
						<a href="https://youtu.be/0FwqSnHI_RA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1023.jpg')}}" class="img-fluid">
							<h6 class="text-center">Khaing Myae Thit Sar</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1024.jpg')}}" class="img-fluid">
							<h6 class="text-center">Lito</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">မိုးစက်တင်လေ</p>
						<a href="https://youtu.be/6gaAv6mfaGw" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1022.jpg')}}" class="img-fluid">
							<h6 class="text-center">Keh Keh</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1021.jpg')}}" class="img-fluid">
							<h6 class="text-center">Myet Myet Myo Htet</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">မိုးစက်တင်လေ</p>
						<a href="https://youtu.be/1g-FevfobOs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1020.jpg')}}" class="img-fluid">
							<h6 class="text-center">Andrew</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1019.jpg')}}" class="img-fluid">
							<h6 class="text-center">Zaw Lay</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Ni Ni</p>
						<p class="text-center lead">ငါကျေနပ်ပါတယ်</p>
						<a href="https://youtu.be/01UlXBjQ4eg" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1017.jpg')}}" class="img-fluid">
							<h6 class="text-center">Aung Zin Phyo</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1018.jpg')}}" class="img-fluid">
							<h6 class="text-center">Nang Zar Chi Lynn</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Nynn</p>
						<p class="text-center lead">အဝါရောင်လမ်းကလေး</p>
						<a href="https://youtu.be/8uhJDLSsS-Q" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1015.jpg')}}" class="img-fluid">
							<h6 class="text-center">Thet Noe Wai</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1016.jpg')}}" class="img-fluid">
							<h6 class="text-center">Zaw Ye Naing</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Ni Ni</p>
						<p class="text-center lead">စွဲလမ်းမှုပြဿနာ</p>
						<a href="https://youtu.be/cph2ZdXcupM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1014.jpg')}}" class="img-fluid">
							<h6 class="text-center">Eain Linn Naung</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1013.jpg')}}" class="img-fluid">
							<h6 class="text-center">Pyae Say Maung</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Nynn</p>
						<p class="text-center lead">ဒီလိုလုပ်လိုက်ပါလား</p>
						<a href="https://youtu.be/grHXrD5gIuU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1009.jpg')}}" class="img-fluid">
							<h6 class="text-center">Htar Htar</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1010.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ngwe Soe</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Nynn</p>
						<p class="text-center lead">ချစ်သူများရဲ့မနက်ဖြန်</p>
						<a href="https://youtu.be/Jwd9RqaHt14" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1002.jpg')}}" class="img-fluid">
							<h6 class="text-center">Phyo Hay Mar Oo</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1001.jpg')}}" class="img-fluid">
							<h6 class="text-center">Sai N</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">စိတ်ကူးတောင်ပံများ</p>
						<a href="https://youtu.be/lYYQh9ftms4" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1007.jpg')}}" class="img-fluid">
							<h6 class="text-center">Hnin Eaindray Shin</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1008.jpg')}}" class="img-fluid">
							<h6 class="text-center">Wai Wai Hlaing Oo</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">အရှုံးထက်ပိုသော</p>
						<a href="https://youtu.be/LPXykyYeXoE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1004.jpg')}}" class="img-fluid">
							<h6 class="text-center">Jennet Pari</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1003.jpg')}}" class="img-fluid">
							<h6 class="text-center">Sandy</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team YC</p>
						<p class="text-center lead">Closer</p>
						<a href="https://youtu.be/Y9By_kNYU8g" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1011.jpg')}}" class="img-fluid">
							<h6 class="text-center">Grace Monica</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1012.jpg')}}" class="img-fluid">
							<h6 class="text-center">Thet Htar Su</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team Ni Ni</p>
						<p class="text-center lead">အိမ်စောင့်သူ</p>
						<a href="https://youtu.be/4xXE3Jrpnig" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 py-3">
				<div class="card">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1005.jpg')}}" class="img-fluid">
							<h6 class="text-center">Timmy</h6>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="{{asset('myasset/images/Battle_1/battle1006.jpg')}}" class="img-fluid">
							<h6 class="text-center">Ye Naing Htoo</h6>
						</div>
					</div>
					<div class="card-body">
						<p class="text-center lead">Team KP</p>
						<p class="text-center lead">Rolling In The Deep</p>
						<a href="https://youtu.be/moWKBXnIWb0" class="btn btn-outline-danger btn-block">Play Video</a>
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
	<h1 class="text-center py-5 battle1">Season<span class="text-danger">1</span> Battles Result is...............</h1>
	<div class="container battle1">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/4.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/bw1018.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/6.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/3.jpg')}}" class="img-fluid">
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/7.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/8.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/9.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/10.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/11.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/12.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/13.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/14.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/15.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/16.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-53">
				<img src="{{asset('myasset/images/Battle_1_winner/17.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/18.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/19.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/20.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/21.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/22.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/23.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 py-3">
				<img src="{{asset('myasset/images/Battle_1_winner/5.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>

		
	<div class="container py-5">
		<a href="{{route('blind1page')}}" class="btn btn-danger px-4 mx-5">Previous</a>
		<a href="{{route('live1_1page')}}" class="btn btn-danger px-4">Next</a>
	</div>	
	@endsection