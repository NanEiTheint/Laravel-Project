@extends('master')
@section('title','Blind Auditions Season 1')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">1 </span>Blind Auditions</h1>
	<div class="container">
		<div class="row">
			<!-- 1 -->
			<!-- <div class="col-12">1</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">1</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/12.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/3L0TjcjKlhY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">2</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/24.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/URpgSZLpJ28" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">3</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/48.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/EsMzN_ZdzxU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">4</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/36.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/1abw-4mI5dg" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 2 -->
			<!-- <div class="col-12">2</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">5</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/47.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/WqfKeRYSczc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">6</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/35.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/2U5TnW6h-DA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">7</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/23.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/9Hbvf9Qhw90" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">8</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/11.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/rHF-1wtm7yo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 3 -->
			<!-- <div class="col-12">3</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">9</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/22.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/uaCrz0bSs0E" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">10</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/10.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/c88lp-C6JSQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">11</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/34.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/pHoI7gosusw" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">12</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/46.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/Yad23vazvY8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 4 -->
			<!-- <div class="col-12">4</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">13</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/9.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/8XuRMwmhnvM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">14</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/21.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/mXrBCenZF5s" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">15</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/33.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/7JdQRwvmnYM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">16</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/45.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/Cvcelw1upN8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 5 -->
			<!-- <div class="col-12">5</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">17</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/32.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/061o8vz1KuY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">18</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/8.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/fgPfBaIcqaE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">19</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/20.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/BcwCBcPh4tI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">20</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/44.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/EmEPx1t9UGc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 6 -->
			<!-- <div class="col-12">6</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">21</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/hry9KuAF0QU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">22</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/19.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/UXZtNWFlQxU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">23</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/31.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/5z3VBJz15CI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">24</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/43.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/SKlEmgsNyks" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 7 -->
			<!-- <div class="col-12">7</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">25</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/18.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/BXsu6YiJRg0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">26</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/30.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/Z5h8da8Nqm8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">27</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/42.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/cDfdZseHs04" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">28</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/6.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/KG7T3xkeq5w" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 8 -->
			<!-- <div class="col-12">8</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">29</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/4ZsjgP1_6dc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">30</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/17.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/5gnFA46MhcA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">31</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/29.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/jtF5fhyfUVA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">32</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/41.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/acL4HSJXvB4" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 9 -->
			<!-- <div class="col-12">9</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">33</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/28.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/EFosIpVVy7Q" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">34</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/40.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/RVXW3Tgjip8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">35</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/16.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/QcIA0A2cAD0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">36</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/21tddhlJmBc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 10 -->
			<!-- <div class="col-12">10</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">37</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/39.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/p7pvhYIzzkY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">38</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/15.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/dVLEQnXjsoA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">39</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/27.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/p6aJtA45knc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">40</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/oq7vtZV-pU8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 11 -->
			<!-- <div class="col-12">11</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">41</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/14.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/effbvl5n4w8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">42</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/2.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/IErNlI7gv1A" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">43</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/38.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/7vs4xNpOQyE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">44</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/26.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/KL3TqVEyPG0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 12 -->
			<!-- <div class="col-12">12</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">45</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/dVOQXdlyiMk" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">46</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/13.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/05zr_xVeQu0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">47</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/25.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/6XA9ZKc44No" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">48</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind1/37.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/yHwJrgPcrJs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	<h1 class="text-center py-5">Coaches Perform
		<span class="pl-3">
			<i class="fas fa-microphone-alt text-danger"></i>
		</span>
	</h1>
	<div class="container py-5">
		<div class="row">
			<div class="col-12  embed-responsive embed-responsive-21by9">
				<iframe src="https://www.youtube.com/embed/0pHa1Scq-Ic" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<h2 class="container pt-5">Battles ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>
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
			<!-- <div class="col-md-3 text-center" id="interview">
				<a class="text-decoration-none wrapper" id="result">
					<span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-danger"></i>
                        <i class="fas fa-microphone-alt fa-stack-1x fa-inverse result_hover"></i>
                    </span>
				</a>
			</div> -->
		</div>
	</div>
	<h1 class="text-center py-5 result_header">Season<span class="text-danger">1</span> Blind Auditions Result is...............</h1>
	<div class="container  result_header" id="winner">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 pt-4">
				<img src="{{asset('myasset/images/Team_kyat_Paul_1/kyar1g.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pt-4">
				<img src="{{asset('myasset/images/Team_Ni_Ni_1/ni1g.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pt-4">
				<img src="{{asset('myasset/images/Team_Lyn_Lyn_1/lynn1g.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pt-4">
				<img src="{{asset('myasset/images/Team_YC_1/yc1g.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<!-- <h1 class="text-center py-5 blind1_interview">Season<span class="text-center font-italic">3</span> Blind Auditions' Winner Interviews</h1> -->
	
	

	<div class="container py-5">
		<a href="{{route('homepage')}}" class="btn btn-danger px-4 mx-5">Back</a>
		<a href="{{route('battle1page')}}" class="btn btn-danger px-4">Next</a>

	</div>	
	
