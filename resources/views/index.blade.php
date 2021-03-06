
@extends('master')
@section('title','The Voice Myanmar')
@section('contect')



<div class="container container-carousel pt-5 mt-5 carousel-image">
		<div class="carousel slide" id="headerCarousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#headerCarousel" data-slide-to="1" class=""></li>
				<li data-target="#headerCarousel" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				 <div class="carousel-item active">
				 	<img src="{{asset('myasset/images/cover/cover7.jpg')}}" class="d-block w-100">
				 	<div class="img-overlay"></div>
				 	<div class="carousel-caption">
				 		<h3>The Voice Myanmar Season 3</h3>
				 		<p>The voice myanmar season 3 is started in August 23 of 2020</p>
				 	</div>
				 </div>
				 <div class="carousel-item">
				 	<img src="{{asset('myasset/images/cover/cover11.jpg')}}" class="d-block w-100">
				 	<div class="img-overlay"></div>
				 	<div class="carousel-caption">
				 		<!-- <h3>Season 3</h3>
				 		<p>Now, blind auditions level of season 3 is broadcasting </p> -->
				 		<h3>Season 3 Winner's Prize</h3>
				 		<p>Solo Album + 200 Lakhs + Car</p>
				 	</div>
				 </div>
				 <div class="carousel-item">
				 	<img src="{{asset('myasset/images/cover/cover9.jpg')}}" class="d-block w-100">
				 	<div class="img-overlay"></div>
				 	<div class="carousel-caption">
				 		<h3>Coach</h3>
				 		<p>Coachs of The Voice Myanmar Season 3</p>
				 	</div>
				 </div>
			</div>
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
	  </a>
	</div>

<!-- Team -->

	<h1 class="text-center py-5 my-2">Season<span class="text-danger font-italic">3</span> Teams</h1>
	<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 pt-5">
					<div class="card">
						<div>
							<img src="{{asset('myasset/images/cover/b4.jpg')}}" class="image card-img-top border" alt="...">
						</div>

						<div class="card-body text-center">
							<h4 class="my-2">Kyar Pauk</h4>
							<p class="my-2"><span class="text-danger font-italic font-weight-bold">12</span> Auditions</p>
							<div class="details_button" data-target="#detailModalKyar" data-toggle="modal">
								<button class="btn btn-outline-danger btn-block">View Details</button>	
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 pt-5">
					<div class="card">
						<div>
							<img src="{{asset('myasset/images/cover/b3.jpg')}}" class="image card-img-top border" alt="...">
						</div>

						<div class="card-body text-center">
							<h4 class="my-2">R Zarni</h4>
							<p class="my-2"><span class="text-danger font-italic font-weight-bold">12</span> Auditions</p>
							<div class="details_button" data-target="#detailModalR" data-toggle="modal">
								<button class="btn btn-outline-danger btn-block">View Details</button>	
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 pt-5">
					<div class="card">
						<div>
							<img src="{{asset('myasset/images/cover/b1.jpg')}}" class="image card-img-top border" alt="...">
						</div>
						<div class="card-body text-center">
							<h4 class="my-2">Ni Ni</h4>
							<p class="my-2"><span class="text-danger font-italic font-weight-bold">12</span> Auditions</p>
							<div class="details_button" data-target="#detailModalNi" data-toggle="modal">
								<button class="btn btn-outline-danger btn-block">View Details</button>	
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 pt-5">
					<div class="card">
						<div>
							<img src="{{asset('myasset/images/cover/b2.jpg')}}" class="image card-img-top border" alt="...">
						</div>
						<div class="card-body text-center">
							<h4 class="my-2">YC</h4>
							<p class="my-2"><span class="text-danger font-italic font-weight-bold">12</span> Auditions</p>
							<div class="details_button" data-target="#detailModalYc" data-toggle="modal">
								<button class="btn btn-outline-danger btn-block">View Details</button>	
							</div>
							

						</div>
					</div>
				</div>
				
			</div>
	</div>

	<h1 class="text-center pt-5 pb-2 mt-5">V Special</h1>
	<hr class="divider py-3"/>
	<div class="container">
		<header>
			  <div class="overlay"></div>
			  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
			    <source src="{{asset('myasset/images/cover/coming.mp4')}}" type="video/mp4">
			  </video>
			  <div class="container h-100">
			    <div class="d-flex h-100 text-center align-items-center">
			      <div class="w-100 text-white">
			        <h1 class="display-3">Coachs & Presenter</h1>
			        <button class="btn btn-secondary" id="btnVideo">Pause</button>
			        <!-- <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p> -->
			      </div>
			    </div>
			  </div>
		</header>
	</div>
	
	<!-- Winner -->
	<h1 class="text-center py-5">Winners</h1>
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-2 pt-5"></div> -->
			<div class="col-md-6 pt-5">
				<div class="card">
					<div class="winner1">
						<img src="{{asset('myasset/images/cover/soe3.jpg')}}" class="image card-img-top border" alt="...">
					</div>
					<div class="card-body text-center">
						<h4 class="my-2">Ngwe Soe</h4>
						<p class="my-2">Season<span class="text-danger font-italic font-weight-bold">1</span> Winner</p>
						<div class="py-3" data-target="#detailModalYc" data-toggle="modal">
							<a href="{{route('winner1page')}}" class="btn btn-outline-danger btn-block">View Details</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 pt-5">
				<div class="card">
					<div>
						<img src="{{asset('myasset/images/cover/novem2.jpg')}}" class="image card-img-top border" alt="...">
					</div>
					<div class="card-body text-center">
						<h4 class="my-2">Novem Htoo</h4>
						<p class="my-2">Season<span class="text-danger font-italic font-weight-bold">2</span> Winner</p>
						<div class="py-3" data-target="#detailModalYc" data-toggle="modal">
							<div class="details_button" data-target="#detailModalYc" data-toggle="modal">
							<a href="{{route('winner2page')}}" class="btn btn-outline-danger btn-block">View Details</a>
						</div>	
						</div>
						

					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Popular song -->
	<h1 class="text-center py-5">Season<span class="text-danger font-italic">3</span> Popular Songs</h1>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/LtEA_b1zKeM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Yuzana</h5>
						<p class="text-center">Patipaka</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				
				<div class="card">
					<iframe src="https://www.youtube.com/embed/MimJVOiIdNE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Annie</h5>
						<p class="text-center">Min Ma Shi Tae Naut</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3  my-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/0Yw1EyzwceI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Khin Yandnar Soe</h5>
						<p class="text-center">Nge Kyawn Shwe</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3  my-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/Ut2CT2skL3o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Lin Myaing</h5>
						<p class="text-center">ချစ်တိုင်းလည်းမညား</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3  my-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/xI7mdZE9SdM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Ba Wa</h5>
						<p class="text-center">No Woman No Cry</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/PO6SEhrEIwU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Ye Khant</h5>
						<p class="text-center">ညို့သောပင်လယ်ဆွဲငင်သောလမင်း</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/ONEnFPSIOQk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Toe Gyii</h5>
						<p class="text-center">တစ်ခါတုန်းက </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe  src="https://www.youtube.com/embed/O1r-xOiXEPI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Japan Gyi</h5>
						<p class="text-center">ငါ့ဘဝ"</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe  src="https://www.youtube.com/embed/PqdeqpGbQv0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Naw Pyae Sone Aye Kyu</h5>
						<p class="text-center">Psychosocial</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe  src="https://www.youtube.com/embed/wxtWC-H2f6A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Pan</h5>
						<p class="text-center">Oh my beloved father</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe src="https://www.youtube.com/embed/SDcpcgMzu78" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">Zaw Khun:</h5>
						<p class="text-center">မတွေ့ခဲ့ကြရင်</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-4 col-sm-6 py-3 my-3">
				<div class="card">
					<iframe  src="https://www.youtube.com/embed/yAciQDJDaX8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
					<div class="card-body">
						<h5 class="text-center">May Myat Noe Khine</h5>
						<p class="text-center">ဆေး</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Lucky Hand Band -->
	<h1 class="text-center pt-5">Lucky Hand Band</h1>
	<div class="container py-5 mb-5 lucky">
		<div class="row">
			<div class="col-lg-3 col-md-3 py-5 my-3 embed-responsive embed-responsive-21by9">
				<iframe src="https://www.youtube.com/embed/gwrT0UwuTZc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-1 col-md-1 my-3"></div>
			<div class="col-lg-3 col-md-3 py-5 my-3 embed-responsive embed-responsive-21by9">
				<iframe src="https://www.youtube.com/embed/DiSI3F0Psug" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-1 col-md-1 my-3"></div>
			<div class="col-lg-3 col-md-3 py-5 my-3 embed-responsive embed-responsive-21by9">
				<iframe src="https://www.youtube.com/embed/ZpCnp8zTrZ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			
		</div>
		
	</div>

	<!-- Modal for Team Detail -->
	<div class="modal fade" id="detailModalKyar">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-danger">Team Kyar Pauk</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-6">
	        			<img src="{{asset('myasset/images/cover/b4.jpg')}}" class="img-fluid">
	        		</div>
	        		<div class="col-md-6">
	        			<h2 class="py-2">Blind Auditions Level</h2>

	        			<h6 class="text-danger">1. Annie</h6>
						<h6 class="text-danger">2. Shwe Hmone</h6>
	        			<h6 class="text-danger">3. Lin Myaing</h6>
	        			<h6 class="text-danger">4. Ko Htike</h6>
	        			<h6 class="text-danger">5. Nwai 9</h6>
	        			<h6 class="text-danger">6. Thiri Hnin Eain</h6>
	        			<h6 class="text-danger">7. Aung Kaung Khant</h6>
	        			<h6 class="text-danger">8. Japan Gyi</h6>
	        			<h6 class="text-danger">9. Toe Gyii</h6>
	        			<h6 class="text-danger">10. Zorina</h6>
	        			<h6 class="text-danger">11. Ba Wa</h6>
	        			<h6 class="text-danger">12. Twan Pee</h6>
	        		</div>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="detailModalR">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-danger">Team R Zarni</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-6">
	        			<img src="{{asset('myasset/images/cover/b3.jpg')}}" class="img-fluid">
	        		</div>
	        		<div class="col-md-6">
	        			<h2 class="py-2">Blind Auditions Level</h2>
	        			
	        			<h6 class="text-danger">1. Janus</h6>
						<h6 class="text-danger">2. Naw Pyae Sone Aye Kyu</h6>
	        			<h6 class="text-danger">3. Aung Paing Thu Naing</h6>
	        			<h6 class="text-danger">4. Htike Gyi</h6>
	        			<h6 class="text-danger">5. Ye Khant</h6>
	        			<h6 class="text-danger">6. Salai T Lian</h6>
	        			<h6 class="text-danger">7. N Oo L</h6>
	        			<h6 class="text-danger">8. Sein June</h6>
	        			<h6 class="text-danger">9. Nway Oo</h6>
	        			<h6 class="text-danger">10. Naw Zarli</h6>
	        			<h6 class="text-danger">11. Su Mon</h6>
	        			<h6 class="text-danger">12. Aung Pi</h6>
	        		</div>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="detailModalNi">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-danger">Team Ni Ni</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-6">
	        			<img src="{{asset('myasset/images/cover/b1.jpg')}}" class="img-fluid">
	        		</div>
	        		<div class="col-md-6">
	        			<h2 class="py-2">Blind Auditions Level</h2>
	        			
	        			<h6 class="text-danger">1. Change</h6>
						<h6 class="text-danger">2. Pan</h6>
	        			<h6 class="text-danger">3. Khine Thadar Seint</h6>
	        			<h6 class="text-danger">4. Khin Yadanar Soe</h6>
	        			<h6 class="text-danger">5. Htet Gyin</h6>
	        			<h6 class="text-danger">6. Ni Htoo</h6>
	        			<h6 class="text-danger">7. T Kar</h6>
	        			<h6 class="text-danger">8. Zaw Khun</h6>
	        			<h6 class="text-danger">9. Saw Kyaw Thura Min</h6>
	        			<h6 class="text-danger">10. Zar Ni</h6>
	        			<h6 class="text-danger">11. Yan Myo</h6>
	        			<h6 class="text-danger">12. G</h6>
	        		</div>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="detailModalYc">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-danger">Team YC</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-6">
	        			<img src="{{asset('myasset/images/cover/b2.jpg')}}" class="img-fluid">
	        		</div>
	        		<div class="col-md-6">
	        			<h2 class="py-2">Blind Auditions Level</h2>
	        			
	        			<h6 class="text-danger">1. Nay Chi Moe Oo</h6>
						<h6 class="text-danger">2. ဖြုန်းတီး</h6>
	        			<h6 class="text-danger">3. Thin Yu</h6>
	        			<h6 class="text-danger">4. Linn Wai</h6>
	        			<h6 class="text-danger">5. Shwe Thway</h6>
	        			<h6 class="text-danger">6. Han So Ree</h6>
	        			<h6 class="text-danger">7. Moe Thar</h6>
	        			<h6 class="text-danger">8. Naw Jar Lay</h6>
	        			<h6 class="text-danger">9. May Myat Noe Khine</h6>
	        			<h6 class="text-danger">10. IV Htoo</h6>
	        			<h6 class="text-danger">11. Jen Jeng</h6>
	        			<h6 class="text-danger">12. Error</h6>
	        		</div>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	@endsection