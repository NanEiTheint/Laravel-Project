
@extends('master')
@section('title','Blind Auditions Season 2')
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
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">2 </span>Blind Auditions</h1>
	<div class="container">
		<div class="row">
			<!-- 1 -->
			<!-- <div class="col-12">1</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">1</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/7fwyEh7Xf9Y" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">2</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/J4q4DeSQgyo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">3</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/yT-Wy_5y-vg" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">4</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/GJ8UB7FhAqA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 2 -->
			<!-- <div class="col-12">2</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">5</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2001.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/IHXsozZ-XhU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">6</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/658RivpNNG0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">7</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/yGLUiTR0eNs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">8</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/KjF4fhSgcZg" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 3 -->
			<!-- <div class="col-12">3</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">9</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/oQAqZcy1IbE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">10</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/4yrRezqY9yk" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">11</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/jmF5s1ayWyo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">12</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2002.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/OqokNfFehbs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 4 -->
			<!-- <div class="col-12">4</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">13</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/zkJbfmIMRtY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">14</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/zHnYgKiHdsE" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">15</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2003.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/GvW547HgF6c" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">16</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/MI3gWukM1Bs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 5 -->
			<!-- <div class="col-12">5</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">17</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/woBAn1W85G8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">18</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/uNM7ttc4u5A" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">19</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/MpHP-eo22Z0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">20</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/LwuI_RnWWgU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 6 -->
			<!-- <div class="col-12">6</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">21</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/HiqoLSysSX8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">22</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2004.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/vVnyn5XgRD4" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">23</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/8dl0SNwmX7Q" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">24</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/_b79pAQu--w" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 7 -->
			<!-- <div class="col-12">7</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">25</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/C0iND_d0m6A" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">26</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/hvhBOOGkI_Q" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">27</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2011.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/OTTVu49E760" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">28</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/WxbT0P953wI" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 8 -->
			<!-- <div class="col-12">8</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">29</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/xqvRiMhCamQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">30</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2012.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/aClFcdTJH-4" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">31</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/YpA62-f0Uf8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">32</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/fPgOd0Gbkx0" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 9 -->
			<!-- <div class="col-12">9</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">33</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/Tgog07DqtWM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">34</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2007.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/1dbNCd6BTw8" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">35</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/80UDYABpqqs" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">36</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2006.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/7rTVisDSCfA" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 10 -->
			<!-- <div class="col-12">10</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">37</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/j72as8o-cOc" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">38</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2005.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/0H-tSrlHJzQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">39</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/N68s22y6pLU" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">40</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/PRN-WX_k8Ls" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 11 -->
			<!-- <div class="col-12">11</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">41</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2008.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/pZVVMuwLYkM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">42</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/_T4TUX7egNM" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">43</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/ni2010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/mnqBGY0DFno" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">44</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/6IxTs7tZtXo" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<!-- 12 -->
			<!-- <div class="col-12">12</div> -->
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">45</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/IvwBV7OhoIY" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">46</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/kyar2009.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/5XIGYp25SyQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">47</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/r2010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/PzREKv7w4AQ" class="btn btn-outline-danger btn-block">Play Video</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 pb-5">
				<h6 class="text-center">48</h6>
				<div class="card">
					<img src="{{asset('myasset/images/blind2/yc2010.jpg')}}" class="card-img-top">
					<div class="card-body">
						<a href="https://youtu.be/1Y9GqHiTT4M" class="btn btn-outline-danger btn-block">Play Video</a>
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
				<iframe src="https://www.youtube.com/embed/L0IotIUsAQ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
	<h1 class="text-center py-5 result_header">Season<span class="text-danger">2</span> Blind Auditions Result is...............</h1>
	<div class="container  result_header" id="winner">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind2/g1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind2/g2.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind2/g3.jpg')}}" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 py-4">
				<img src="{{asset('myasset/images/blind2/g4.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<!-- <h1 class="text-center py-5 blind1_interview">Season<span class="text-center font-italic">3</span> Blind Auditions' Winner Interviews</h1> -->
	
	

	<div class="container py-5">
		<a href="{{route('homepage')}}" class="btn btn-danger px-4 mx-5">Back</a>
		<a href="{{route('battle2page')}}" class="btn btn-danger px-4">Next</a>

	</div>	
	@endsection
