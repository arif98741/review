@extends('layout.web.web')
@section('title','Homepage')

@section('content')
<main>
		@include('layout.web.lib.hero')
		<!-- /hero_single -->
		
		<div class="container margin_60_35">
			<div class="main_title_3">
					<h2>Top Categories</h2>
					<p></p>
					<a href="all-categories.html">View all</a>
				</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img src="{{asset('asset/front/img/box_cat_home_1.jpg')}}" alt="">
							<div class="info">
								<small>122 Results</small>
								<em><i class="icon-comment"></i> 356 Reviews</em>
								<h3>Men's Fashion</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img src="{{asset('asset/front/img/Untitled-5-01.jpg')}}" alt="">
							<div class="info">
								<small>245 Results</small>
								<em><i class="icon-comment"></i> 123 Reviews</em>
								<h3>Women's Fashion</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img src="{{asset('asset/front/img/Untitled-1-01.jpg')}}" alt="">
							<div class="info">
								<small>95 Results</small>
								<em><i class="icon-comment"></i> 245 Reviews</em>
								<h3>Phone & Accessories</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img src="{{asset('asset/front/img/Untitled-4.jpg')}}" alt="">
							<div class="info">
								<small>123 Results</small>
								<em><i class="icon-comment"></i> 187 Reviews</em>
								<h3>Sports & Outdoor</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img src="{{asset('asset/front/img/box_cat_home_5.jpg')}}" alt="">
							<div class="info">
								<small>92 Results</small>
								<em><i class="icon-comment"></i> 221 Reviews</em>
								<h3>Electronics</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img src="{{asset('asset/front/img/box_cat_home_6.jpg')}}" alt="">
							<div class="info">
								<small>92 Results</small>
								<em><i class="icon-comment"></i> 323 Reviews</em>
								<h3>Health & Beauty</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
		<div class="bg_color_1">
		<div class="container margin_60">
			<div class="main_title_3">
				<h2>Latest Reviews</h2>
				<p></p>
				<a href="reviews-page.html">View all</a>
			</div>
			
			<div id="reccomended" class="owl-carousel owl-theme">



				<div class="item">
					<div class="review_listing">
						<div class="clearfix">
							<figure><img src="{{asset('asset/front/img/avatar1.jpg')}}" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Jhon Doe</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
						<h4>"Avesome Experience"</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                         Dolores doloremque hic vero nemo qui deleniti similique laborum.</p>
						<ul class="clearfix">
							<li><small>Published: 26.08.2018</small></li>
							<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
				</div>
				
				
				
				
				
							
				






			</div>
			<!-- /carousel -->
		</div>
		<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
		
		<div class="call_section_3">
			<div class="wrapper">
				<div class="container clearfix">
					<div class="col-lg-5 col-md-7 float-right">
						<h3>Let's Help You</h3>
						<p>ReviewStore is a review platform open to everyone. Share your experiences to help others make better choices, and help companies up their game. Our mission is to bring people and companies together to create experiences for everyone.</p>
						<!-- <p><a class="btn_1 add_top_10 wow bounceIn" href="pricing.html" data-wow-delay="0.5s">Join ReviewStore Now!</a></p> -->
					</div>
				</div>
				<!-- /container -->
			</div>
		</div>
		<!-- /call_section -->
		
	</main>
@endsection