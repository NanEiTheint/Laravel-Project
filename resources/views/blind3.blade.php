@extends('master')
@section('title','Blind Auditions Season 3')
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
			        <h1 class="display-3">The Voice Myanmar 2020</h1>
			        <button class="btn btn-secondary" id="btnVideo">Pause</button>
			        <!-- <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p> -->
			      </div>
			    </div>
			  </div>
		</header>
	</div>
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">3 </span>Blind Auditions</h1>
	<div class="container">
		<div class="row">
			<!-- 1 -->
			<!-- <div class="col-12">1</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">1</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/MimJVOiIdNE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">2</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/JpFADO__KEk" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">3</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/PqdeqpGbQv0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">4</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/oP4SFJxYMcQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 2 -->
			<!-- <div class="col-12">2</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">5</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/wxtWC-H2f6A" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">6</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/tjcLU47Zo1A" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">7</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/2d3mGz7asMQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">8</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/eAZhnO3BJzM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 3 -->
			<!-- <div class="col-12">3</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">9</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/KHXi79VsZcM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">10</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/0Yw1EyzwceI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">11</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/pRNzJcyaU4I" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">12</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/eCG1TcWaaF4" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 4 -->
			<!-- <div class="col-12">4</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">13</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/xgBOaqXZ8Vc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">14</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/4nRApmguP5Y" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">15</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/Ut2CT2skL3o" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">16</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/_i1WkdBjMYw" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 5 -->
			<!-- <div class="col-12">5</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">17</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/_DQEkrFBs-A" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">18</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/TyIiFUVeGeg" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">19</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/xQRiVM26yEs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">20</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/58tQ8YBNbUo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 6 -->
			<!-- <div class="col-12">6</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">21</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/G7n0ZeOVbKU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">22</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/DR82rXLEmkQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">23</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/PO6SEhrEIwU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">24</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/9rvM5pomvjU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 7 -->
			<!-- <div class="col-12">7</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">25</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/DyPgNKfKvVA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">26</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/O1r-xOiXEPI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">27</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/9tUwC4U_LuQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">28</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/l7x8JsvU2AM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 8 -->
			<!-- <div class="col-12">8</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">29</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/ONEnFPSIOQk" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">30</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/jLfPjK9yXi8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">31</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/SoD8Yxui3gE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">32</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/yAciQDJDaX8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 9 -->
			<!-- <div class="col-12">9</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">33</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/oBq5nIuL89Y" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">34</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/SDcpcgMzu78" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">35</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/yFhongc2GUw" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">36</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/xI7mdZE9SdM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 10 -->
			<!-- <div class="col-12">10</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">37</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/iCNhHoZuySg" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">38</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/RXqqgJ7QHTI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">39</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/As3hah5Jdrc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">40</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/FZCOMrP8DpE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 11 -->
			<!-- <div class="col-12">11</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">41</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/r3011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/4zFw0v8U-bs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">42</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/GWWaditZKOI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">43</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/zX3DpRTIaaU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">44</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/kyar3012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/3ekvnruwHwA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 12 -->
			<!-- <div class="col-12">12</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">45</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/u3Tszbf1B9k" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">46</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/YUnBIz6F_xU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">47</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/ni3010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/sNd7-Fu-Oy8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">48</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind3/yc3001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/8TqHtUCknu8" class="btn btn-outline-danger btn-block">Play Video</a>
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
				<iframe height="315" src="https://www.youtube.com/embed/6n6Mdv9hxm4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<h2 class="container pt-5">Battle ကို ခေါ်ဆောင်သွားမယ့်သူတေကတေ့ာ 📢📢📢.............</h2>
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
	<h1 class="text-center py-5 result_header">Season<span class="text-danger">3</span> Blind Auditions Result is...............</h1>
	<div class="container  result_header" id="winner">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind3/b1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind3/b2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind3/b3.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind3/b4.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<!-- <h1 class="text-center py-5 blind1_interview">Season<span class="text-center font-italic">3</span> Blind Auditions' Winner Interviews</h1> -->
	
	

	<div class="container py-5">
		<a href="{{route('homepage')}}" class="btn btn-danger px-4 mx-5">Back</a>
		<a href="{{route('battle2page')}}" class="btn btn-danger px-4">Next</a>

	</div>	
	@endsection
