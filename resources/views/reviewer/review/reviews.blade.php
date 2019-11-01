@extends('layout.web.web')
@section('title',' Reviews')
@section('content')
	
	<main>
		<div class="reviews_summary">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<figure>
								<img src="{{ asset('asset/front/img/logo-company.png') }}" alt="">
							</figure>
							<small>Shop</small>
							<h1>Good Electronics</h1>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00 - based on 234 reviews</em></span>
						</div>
						<div class="col-lg-4 review_detail">
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>5 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>4 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>3 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>2 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress last">
										<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>1 stars</strong></div>
							</div>
							<!-- /row -->
						</div>
					</div>
				</div>
				<!-- /container -->
			</div>
		</div>
		<!-- /reviews_summary -->
		
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
					<div class="review_card">
						<div class="row">
							<div class="col-md-2 user_info">
								<figure><img src="{{ asset('asset/front/img/avatar1.jpg') }}" alt=""></figure>
								<h5>Marika</h5>
							</div>
							<div class="col-md-10 review_content">
								<div class="clearfix add_bottom_15">
									<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
									<em>Published 54 minutes ago</em>
								</div>
								<h4>"Avesome Experience"</h4>
								<p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
								<ul>
									<li><a href="#0"><i class="icon_like_alt"></i><span>Useful</span></a></li>
									<li><a href="#0"><i class="icon_dislike_alt"></i><span>Not useful</span></a></li>
									<li><span>Share</span> <a href="#0"><i class="ti-facebook"></i></a> <a href="#0"><i class="ti-twitter-alt"></i></a> <a href="#0"><i class="ti-google"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- /row -->
						<div class="row reply">
							<div class="col-md-2 user_info">
								<figure><img src="{{ asset('asset/front/img/avatar.jpg') }}" alt=""></figure>
							</div>
							<div class="col-md-10">
								<div class="review_content">
									<strong>Reply from Good Electronics</strong>
									<em>Published 3 minutes ago</em>
									<p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
								</div>
							</div>
						</div>
						<!-- /reply -->
					</div>
					<!-- /review_card -->
					<div class="review_card">
						<div class="row">
							<div class="col-md-2 user_info">
								<figure><img src="{{ asset('asset/front/img/avatar4.jpg') }}" alt=""></figure>
								<h5>Lukas</h5>
							</div>
							<div class="col-md-10 review_content">
								<div class="clearfix add_bottom_15">
									<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>5.00/5.00</em></span>
									<em>Published 54 minutes ago</em>
								</div>
								<h4>"Avesome Experience"</h4>
								<p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
								<ul>
									<li><a href="#0"><i class="icon_like_alt"></i><span>Useful</span></a></li>
									<li><a href="#0"><i class="icon_dislike_alt"></i><span>Not useful</span></a></li>
									<li><span>Share</span> <a href="#0"><i class="ti-facebook"></i></a> <a href="#0"><i class="ti-twitter-alt"></i></a> <a href="#0"><i class="ti-google"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /review_card -->
					<div class="review_card">
						<div class="row">
							<div class="col-md-2 user_info">
								<figure><img src="{{ asset('asset/front/img/avatar6.jpg') }}" alt=""></figure>
								<h5>Marika</h5>
							</div>
							<div class="col-md-10 review_content">
								<div class="clearfix add_bottom_15">
									<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
									<em>Published 54 minutes ago</em>
								</div>
								<h4>"Avesome Experience"</h4>
								<p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
								<ul>
									<li><a href="#0"><i class="icon_like_alt"></i><span>Useful</span></a></li>
									<li><a href="#0"><i class="icon_dislike_alt"></i><span>Not useful</span></a></li>
									<li><span>Share</span> <a href="#0"><i class="ti-facebook"></i></a> <a href="#0"><i class="ti-twitter-alt"></i></a> <a href="#0"><i class="ti-google"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- /row -->
						<div class="row reply">
							<div class="col-md-2 user_info">
								<figure><img src="{{ asset('asset/front/img/avatar.jpg') }}" alt=""></figure>
							</div>
							<div class="col-md-10">
								<div class="review_content">
									<strong>Reply from Good Electronics</strong>
									<em>Published 3 minutes ago</em>
									<p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
								</div>
							</div>
						</div>
						<!-- /reply -->
					</div>
					<!-- /review_card -->
					<div class="review_card">
						<div class="row">
							<div class="col-md-2 user_info">
								<figure><img src="{{ asset('asset/front/img/avatar7.jpg') }}" alt=""></figure>
								<h5>Lukas</h5>
							</div>
							<div class="col-md-10 review_content">
								<div class="clearfix add_bottom_15">
									<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>5.00/5.00</em></span>
									<em>Published 54 minutes ago</em>
								</div>
								<h4>"Avesome Experience"</h4>
								<p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
								<ul>
									<li><a href="#0"><i class="icon_like_alt"></i><span>Useful</span></a></li>
									<li><a href="#0"><i class="icon_dislike_alt"></i><span>Not useful</span></a></li>
									<li><span>Share</span> <a href="#0"><i class="ti-facebook"></i></a> <a href="#0"><i class="ti-twitter-alt"></i></a> <a href="#0"><i class="ti-google"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /review_card -->
					<div class="pagination__wrapper add_bottom_15">
						<ul class="pagination">
							<li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
							<li><a href="#0" class="active">1</a></li>
							<li><a href="#0">2</a></li>
							<li><a href="#0">3</a></li>
							<li><a href="#0">4</a></li>
							<li><a href="#0" class="next" title="next page">&#10095;</a></li>
						</ul>
					</div>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				<div class="col-lg-4">
					<div class="box_general company_info">
						<h3>Good Electronics</h3>
						<p>Illud scripserit mei an, sea te sonet partem contentiones. Eu quo corrumpit euripidis, enim sadipscing eos an. Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.</p>
						<p><strong>Address</strong><br>97845 Baker st. 567<br>Los Angeles - US</p>
						<p><strong>Website</strong><br><a href="#0">www.goodelectronics.com</a></p>
						<p><strong>Email</strong><br><a href="#0">info@goodelectronics.com</a></p>
						<p><strong>Telephone</strong><br>+54 423 565624</p>
						<p class="follow_company"><strong>Follow us</strong><br><a href="#0"><i class="social_facebook_circle"></i></a><a href="#0"><i class="social_twitter_circle"></i></a><a href="#0"><i class="social_googleplus_circle"></i></a><a href="#0"><i class="social_instagram_circle"></i></a></p>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
	