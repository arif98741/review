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
			<a href="#">View all</a>
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
				<a href="{{ url('reviewer/row-listing') }}">View all</a>
			</div>
			
			<div id="reccomended" class="owl-carousel owl-theme">

				@foreach($reviews_data as $review_data)
				<div class="item">
					<div class="review_listing">
						<div class="clearfix">
							<figure><img src="{{url('storage/uploads/reviewer/'.$review_data->reviewer->image)}}" alt=""></figure>
							<span class="rating">

								@for($i=1; $i<=$review_data->rating; $i++)
								<i class="icon_star"></i>
								@endfor

								@if(is_numeric($review_data->rating))

									@for($j=1; $j<=5 - $review_data->rating; $j++)
									<i class="icon_star empty"></i>
									@endfor
								@else	
								@for($j=1; $j<=5 - 0; $j++)
									<i class="icon_star empty"></i>
									@endfor
								@endif

								

								<em>{{ $review_data->rating }}.00/5.00</em></span>
								<small>Shop</small>
							</div>
							<h3><strong>{{ $review_data->reviewer->fullname }}</strong> reviewed <a href="reviews-page.html">{{ $review_data->company->company_name }}</a></h3>
							<h4>"{{ $review_data->title }}"</h4>
							<p>{{ $review_data->review_text }}</p>
							<ul class="clearfix">
								<li><small>Published: {{ date('d.m.Y',strtotime($review_data->created_at)) }}</small></li>
								<li><a href="{{ url('company/profile/'.$review_data->company->id.'/'.strtolower(str_replace(' ','-',$review_data->company->company_name))) }}#position{{$review_data->id}}" class="btn_1 small">Read review</a></li>
							</ul>
						</div>
					</div>

					@endforeach


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