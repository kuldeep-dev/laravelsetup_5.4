<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Swiper Slider CSS Include Here -->
<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/swiper.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/bootstrap-reboot.css">
<!-- Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/style.css">
<script type="text/javascript" src="{{url('/')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
<title>Crowd Funding</title>
</head>
<body>
<main class="main-wrapper">
<header class="main-header">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a href="{{url('/')}}" class="navbar-brand"><img src="{{url('/')}}/images/AroCrowdfund.png" alt="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="main-menu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">How it works</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Invest</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Get Funded</a>
					</li>

					@if (Auth::guest())
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register')}}">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login')}}">Login</a>
					</li>
					@else
					
					<li class="nav-item avatar">
						<a class="nav-link" href="">  
							<img src="">
						</a>
						<!-- <a class="nav-link" href=""> 
						<img src="">
						</a> -->
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">Sign Out
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
</header><!--/.header-->

@yield('content')


<section class="client-sec">
		<div class="container">
			<div class="row">
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/Logo-one.png" alt="Logo">
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/Logo-Two.png" alt="Logo">
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/Logo-Three.png" alt="Logo">
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/Logo-one.png" alt="Logo">
					</div>
				</div>
				<div class="cust-col-5">
					<div class="inner-sec">
						<img src="{{url('/')}}/images/Logo-Two.png" alt="Logo">
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section><!--/.Client-Section-->
</section><!--/.main-content-->
<footer class="st-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="contact-sec">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="inner-sec">
								<div class="icon-sec">
									<img src="{{url('/')}}/images/foot-phone.svg" alt="Phone">
								</div>
								<h5>Phone</h5>
								<p>(+1-888-000-111)</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="inner-sec">
								<div class="icon-sec">
									<img src="{{url('/')}}/images/foot-address.svg" alt="Phone">
								</div>
								<h5>Address</h5>
								<p>12od, Strikerate st, us1010a</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="inner-sec">
								<div class="icon-sec">
									<img src="{{url('/')}}/images/foot-email.svg" alt="Phone">
								</div>
								<h5>Email</h5>
								<p>info@domainname.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
				<div class="foot-link">
					<h6>Quick Links</h6>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">How it works</a></li>
						<li><a href="#">Invest</a></li>
						<li><a href="#">Get Funded</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
				<div class="foot-link">
					<h6>About Us</h6>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
				<div class="foot-link">
					<h6>Just Giving</h6>
					<ul>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
				<div class="social-link">
					<h6>Follow Us</h6>
					<ul>
						<li><a href="#"><img src="{{url('/')}}/images/foot-facebook.svg" alt="Facebook"></a></li>
						<li><a href="#"><img src="{{url('/')}}/images/foot-linked.svg" alt="Linked In"></a></li>
						<li><a href="#"><img src="{{url('/')}}/images/foot-twitter.svg" alt="Twitter"></a></li>
						<li><a href="#"><img src="{{url('/')}}/images/foot-youtube.svg" alt="Youtube"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-sec">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="inner-sec">
						<p>Copyright &copy; 2018. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!--/st-footer-->
</main>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{url('/')}}/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/popper.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/bootstrap.min.js"></script>
<!-- Swiper Slider JavaScript Include Here -->
<script type="text/javascript" src="{{url('/')}}/js/swiper.min.js"></script>
<script>
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 3,
		spaceBetween: 30,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		// Responsive breakpoints
		breakpoints: {
			// when window width is <= 992px
			992: {
				slidesPerView: 2,
				spaceBetween: 20
			},
			// when window width is <= 992px
			640: {
				slidesPerView: 1,
				spaceBetween: 10
			},
		}
	});
	// Add or Remove Class 
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 567) {
			$(".main-header").addClass("darkHeader");
		} else {
			$(".main-header").removeClass("darkHeader");
		}
	});
</script>
</body>
</html>
