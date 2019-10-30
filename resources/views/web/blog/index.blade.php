@extends('layout.web.web')
@section('title','Blog')

@section('content')

<main>
		<section class="hero_single general">
			<div class="wrapper">
				<div class="container">
					<h1>ReviewStore Blog</h1>
					<p>ReviewStore helps grow your business using customer reviews</p>
				</div>
			</div>
		</section>
		<!-- /hero_single -->
		
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-9">
					<div class="row">

						@foreach($blogs as $blog )

						<div class="col-md-6">
							<article class="blog">
								<figure>
									<a href="blog-post.html"><img src="{{asset('storage/uploads/admin/blog/'.$blog->image)}}" alt="">
										<div class="preview"><span>Read more</span></div>
									</a>
								</figure>
								<div class="post_info">
									<small> {{ $blog->blog_category->name }}- {{  date('d M, Y',strtotime($blog->created_at)) }}</small>
									<h2><a href="blog-post.html">{{ $blog->title }} </a></h2>
									<p>{{ htmlspecialchars_decode($blog->description) }}</p>
									<ul>
										<li>
											<div class="thumb"><img src="{{asset('storage/uploads/admin/blog/'.$blog->image)}}" alt=""></div> Admin
										</li>
										<li><i class="ti-comment"></i>20</li>
									</ul>
								</div>
							</article>
							<!-- /article -->
						</div>

						@endforeach

						
						
						<!-- /col -->
					</div>
					<!-- /row -->

					<div class="pagination__wrapper add_bottom_30">
						<ul class="pagination">
							<li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
							<li>
								<a href="#0" class="active">1</a>
							</li>
							<li>
								<a href="#0">2</a>
							</li>
							<li>
								<a href="#0">3</a>
							</li>
							<li>
								<a href="#0">4</a>
							</li>
							<li><a href="#0" class="next" title="next page">&#10095;</a></li>
						</ul>
					</div>
					<!-- /pagination -->
					
				</div>
				<!-- /col -->

				<aside class="col-lg-3">
					<div class="widget search_blog">
						<div class="form-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Search..">
							<span><input type="submit" value="Search"></span>
						</div>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Latest Post</h4>
						</div>
						<ul class="comments-list">


								@foreach($latest_blogs as $blog )

							<li>
								<div class="alignleft">
									<a href="#0"><img src="{{asset('storage/uploads/admin/blog/'.$blog->image)}}" alt="" ></a>
								</div>
								<small>{{ $blog->blog_category->name }}- {{  date('d-m-Y',strtotime($blog->created_at)) }}</small>
								<h3><a href="#" title=""> {{ $blog->title }} </a></h3>
							</li>

								@endforeach
						
							
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Categories</h4>
						</div>
						@foreach($blog_categories as $blog_category )
						<ul class="cats">
							<li><a href="#">{{ $blog_category->name }} <span>(12)</span></a></li>
							
						</ul>
						@endforeach
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<a href="#">Food</a>
							<a href="#">Bars</a>
							<a href="#">Cooktails</a>
							<a href="#">Shops</a>
							<a href="#">Best Offers</a>
							<a href="#">Transports</a>
							<a href="#">Restaurants</a>
						</div>
					</div>
					<!-- /widget -->
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->

@push('extra-css')
  <link rel="stylesheet" href="{{asset('asset/front/css/blog.css')}}">
@endpush
@endsection