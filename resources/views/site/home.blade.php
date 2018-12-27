
@extends('layouts.site')

@section('content')

<section class="main-content">
	<section class="banner-section">
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{url('/')}}/images/slide.png" alt="First Slide">
					<div class="overlay"></div>
					<div class="carousel-caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">								
									<h1>Make good things happen</h1>
									<p>Join over 22 million people supporting charity and personal causes</p>
									<a href="#" class="btn btn-theme">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{url('/')}}/images/slide.png" alt="Second Slide">
					<div class="overlay"></div>
					<div class="carousel-caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">								
									<h1>Make good things happen</h1>
									<p>Join over 22 million people supporting charity and personal causes</p>
									<a href="#" class="btn btn-theme">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{url('/')}}/images/slide.png" alt="Third Slide">
					<div class="overlay"></div>
					<div class="carousel-caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">								
									<h1>Make good things happen</h1>
									<p>Join over 22 million people supporting charity and personal causes</p>
									<a href="#" class="btn btn-theme">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section><!--/.Banner-Section-->
	<section class="how-it-works-sec">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 m-auto">
					<div class="inner-sec">
						<div class="head-sec">
							<h3>How it works</h3>
							<p>FOUR SIMPLE INSTRUMENTS TO GROW  YOUR BUSINESS</p>
						</div>
						<div class="content-part">
							<p>Moluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. No matter how many times your amazing, absolutely brilliant - Lorem ipsum dolor sit amet, vix an natum labitur eleifend, mel amet a laoreet menandri</p>
							<div class="status-part">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class="card-sec">
											<div class="card-icon">
												<img src="images/dollar.png" alt="Icon">
											</div>
											<div class="card-content">
												<h6>300 CRORE +</h6>
												<p>Raised</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class="card-sec">
											<div class="card-icon">
												<img src="{{url('/')}}/images/user.png" alt="Icon">
											</div>
											<div class="card-content">
												<h6>2,500,000+</h6>
												<p>Supporters</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class="card-sec">
											<div class="card-icon">
												<img src="{{url('/')}}/images/bell.png" alt="Icon">
											</div>
											<div class="card-content">
												<h6>80,000+</h6>
												<p>Fundraiser</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class="card-sec">
											<div class="card-icon">
												<img src="{{url('/')}}/images/contact.png" alt="Icon">
											</div>
											<div class="card-content">
												<h6>75 Glen Creek St.</h6>
												<p>Address</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="clear"></div>
	</section><!--/.how-it-works-sec-->
	<section class="newsletter-sec">
	<img src="{{url('/')}}/images/news-back.png" class="bg-image" alt="Background">
	<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 m-auto">
					<div class="inner-sec">
						<div class="head-sec">
							<h3>Newsletter</h3>
						</div>
						<div class="content-part">
							<form class="form-newsletter" name="" method="post" action="">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><img src="{{url('/')}}/images/newsletter.png" alt="Icon"></span>
									</div>
									<input type="email" class="form-control" name="" value="" placeholder="ex. parveen@avainfotech.com">
								</div>
								<div class="btn-sec">
									<input type="submit" class="btn btn-theme" value="Subscribe">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section><!--/.newsletter-sec-->
	<section class="browse-sec">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="head-sec">
						<h3>BROWSE FUNDRAISER</h3>
						<p>Moluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat<br />cupidatat non proident, sunt in culpa qui officia deserunt</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Health</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Fashion</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Energy</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Education</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Video Games</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Sports</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Community</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Food & Craft</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><h5>Transportaion</h5></a>
						</div>
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/categories.png" alt="Image">
						<div class="overlay">
							<a href="#"><img src="images/all-arrow.svg" alt="Icon"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section><!--/.browse-sec-->
	<section class="get-founded-sec">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="head-sec">
						<h3>GET FUNDED</h3>
						<p>Moluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <br />cupidatat non proident, sunt in culpa qui officia deserunt</p>
					</div>
				</div>
			</div>
			<!-- Swiper Slider HTML Include Here -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="inner-sec">
							<div class="img-wrap">
								<img src="{{url('/')}}/images/invest-section.png" alt="Image">
							</div>
							<div class="content-sec">
								<h6>Lorem ipsum dollar</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
								<div class="progress">
									<div class="progress-bar" style="width:30%"><span>30%</span></div>
								</div>
								<div class="founded-info">
									<span>Raised: $5000</span>
									<span>Equity: 1.21%</span>
									<span>Investor: 925</span>
								</div>
								<div class="btn-sec">
									<a href="#" class="btn btn-theme">Get Funded</a>
								</div>
							</div>
						</div>
					</div><!--/.Slide End Here -->
					<div class="swiper-slide">
						<div class="inner-sec">
							<div class="img-wrap">
								<img src="{{url('/')}}/images/invest-section.png" alt="Image">
							</div>
							<div class="content-sec">
								<h6>Lorem ipsum dollar</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
								<div class="progress">
									<div class="progress-bar" style="width:30%"><span>30%</span></div>
								</div>
								<div class="founded-info">
									<span>Raised: $5000</span>
									<span>Equity: 1.21%</span>
									<span>Investor: 925</span>
								</div>
								<div class="btn-sec">
									<a href="#" class="btn btn-theme">Get Funded</a>
								</div>
							</div>
						</div>
					</div><!--/.Slide End Here -->
					<div class="swiper-slide">
						<div class="inner-sec">
							<div class="img-wrap">
								<img src="{{url('/')}}/images/invest-section.png" alt="Image">
							</div>
							<div class="content-sec">
								<h6>Lorem ipsum dollar</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
								<div class="progress">
									<div class="progress-bar" style="width:30%"><span>30%</span></div>
								</div>
								<div class="founded-info">
									<span>Raised: $5000</span>
									<span>Equity: 1.21%</span>
									<span>Investor: 925</span>
								</div>
								<div class="btn-sec">
									<a href="#" class="btn btn-theme">Get Funded</a>
								</div>
							</div>
						</div>
					</div><!--/.Slide End Here -->
					<div class="swiper-slide">
						<div class="inner-sec">
							<div class="img-wrap">
								<img src="{{url('/')}}/images/invest-section.png" alt="Image">
							</div>
							<div class="content-sec">
								<h6>Lorem ipsum dollar</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
								<div class="progress">
									<div class="progress-bar" style="width:30%"><span>30%</span></div>
								</div>
								<div class="founded-info">
									<span>Raised: $5000</span>
									<span>Equity: 1.21%</span>
									<span>Investor: 925</span>
								</div>
								<div class="btn-sec">
									<a href="#" class="btn btn-theme">Get Funded</a>
								</div>
							</div>
						</div>
					</div><!--/.Slide End Here -->
					<div class="swiper-slide">
						<div class="inner-sec">
							<div class="img-wrap">
								<img src="{{url('/')}}/images/invest-section.png" alt="Image">
							</div>
							<div class="content-sec">
								<h6>Lorem ipsum dollar</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
								<div class="progress">
									<div class="progress-bar" style="width:30%"><span>30%</span></div>
								</div>
								<div class="founded-info">
									<span>Raised: $5000</span>
									<span>Equity: 1.21%</span>
									<span>Investor: 925</span>
								</div>
								<div class="btn-sec">
									<a href="#" class="btn btn-theme">Get Funded</a>
								</div>
							</div>
						</div>
					</div><!--/.Slide End Here -->
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section><!--/.get-founded-sec-->
	<section class="invest-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="head-sec">
						<h3>Invest</h3>
						<p>Moluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <br />cupidatat non proident, sunt in culpa qui officia deserunt</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="inner-sec">
						<div class="img-wrap">
							<img src="{{url('/')}}/images/invest-section.png" alt="Banner">
						</div>
						<div class="content-sec">
							<div class="price-sec">
								<a href="#" class="btn btn-theme">Invest</a>
								<span>Investment:$5000</span>
							</div>
							<h6>Lorem ipsum dolor</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="inner-sec">
						<div class="img-wrap">
							<img src="{{url('/')}}/images/invest-section.png" alt="Banner">
						</div>
						<div class="content-sec">
							<div class="price-sec">
								<a href="#" class="btn btn-theme">Invest</a>
								<span>Investment:$5000</span>
							</div>
							<h6>Lorem ipsum dolor</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="inner-sec">
						<div class="img-wrap">
							<img src="{{url('/')}}/images/invest-section.png" alt="Banner">
						</div>
						<div class="content-sec">
							<div class="price-sec">
								<a href="#" class="btn btn-theme">Invest</a>
								<span>Investment:$5000</span>
							</div>
							<h6>Lorem ipsum dolor</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="inner-sec">
						<div class="img-wrap">
							<img src="{{url('/')}}/images/invest-section.png" alt="Banner">
						</div>
						<div class="content-sec">
							<div class="price-sec">
								<a href="#" class="btn btn-theme">Invest</a>
								<span>Investment:$5000</span>
							</div>
							<h6>Lorem ipsum dolor</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="inner-sec">
						<div class="img-wrap">
							<img src="{{url('/')}}/images/invest-section.png" alt="Banner">
						</div>
						<div class="content-sec">
							<div class="price-sec">
								<a href="#" class="btn btn-theme">Invest</a>
								<span>Investment:$5000</span>
							</div>
							<h6>Lorem ipsum dolor</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="inner-sec">
						<div class="img-wrap">
							<img src="{{url('/')}}/images/invest-section.png" alt="Banner">
						</div>
						<div class="content-sec">
							<div class="price-sec">
								<a href="#" class="btn btn-theme">Invest</a>
								<span>Investment:$5000</span>
							</div>
							<h6>Lorem ipsum dolor</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section><!--/.invest-section-->

@endsection