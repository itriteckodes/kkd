<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Kisaan Shop</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/home/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/home/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/home/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="assets/home/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="assets/home/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="assets/home/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/home/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="assets/home/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="assets/home/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/home/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="assets/home/css/slicknav.min.css">
	
	<!-- Kisaan StyleSheet -->
	<link rel="stylesheet" href="assets/home/css/reset.css">
	<link rel="stylesheet" href="assets/home/style/style.css">
    <link rel="stylesheet" href="assets/home/css/responsive.css">

	
	
</head>
<body class="js">
	<!--header section-->
	@include('preloader/preloader')	
	
	@include('header/header')
    <!-- End header section-->
    <!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Get in touch</h4>
									<h3>Write us a message</h3>
								</div>
								<form class="form" method="post" action="{{ route('user.contact.store') }}">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="" required>
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="phone" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<textarea name="message" placeholder="" required>
												</textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Send Message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Call us Now:</h4>
									<ul>
										<li>+92 313 6503931</li>
										<li>+92 300 9707093</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="MuhammadSalmanKhan277@gmail.com">info@gmail.com</a></li>
										<li><a href="haseebnaqvi11@gmail.com">info@gmail.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Our Address:</h4>
									<ul>
										<li>Satellite Town Shop No#467 Bhalwal Sargodha</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
	<!-- Map Section -->
	<!--div class="map-section">
		<div id="myMap"></div>
	</div-->
	<!--/ End Map Section -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->	

    <!--start footer Area-->
	@include('footer/footer')
	<!--End Footer Area-->

	<!--whatsapp-->
	@include('whatsapp/whatsapp')
	<!--whatsapp End-->

		
		
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="assets/home/js/jquery.min.js"></script>
    <script src="assets/home/js/jquery-migrate-3.0.0.js"></script>
	<script src="assets/home/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/home/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/home/js/bootstrap.min.js"></script>
    <!-- Slicknav JS -->
	<script src="assets/home/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="assets/home/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="assets/home/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="assets/home/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="assets/home/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="assets/home/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="assets/home/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="assets/home/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="assets/home/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="assets/home/js/easing.js"></script>
	<!-- Active JS -->
	<script src="assets/home/js/active.js"></script>
</body>
</html>