<!-- Header -->
<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i>+92 313 6503931</li>
								<li><i class="ti-email"></i>info@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Store location</li>
								<!--li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></!--li-->
								<li><i class="ti-user"></i> <a href="{{url('reg')}}">My account</a></li>
								
								<li><i class="ti-power-off"></i>
									@if (Auth::guard('user')->user()!=null)
									<a href="{{route('user.logout')}}">Logout</a>
									@else
									<a href="{{url('login')}}">Login</a>
									@endif
								</li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="{{url('index')}}"><img src="{{ asset('assets/home/images/kisaan.jpg') }}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>

					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
					<form action="{{ route('user.product.store') }}" method="POST">

							<div class="search-bar">

								<select name="category_id">
									<option selected="">All Category</option>
									@foreach (App\Models\Category::all() as $category)
									<option value="{{ $category->id}}">{{ $category->name }}</option>
									@endforeach
								</select>
									<input name="search" placeholder="Search Products Here....." type="search" required>
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
							</div>
						</form>

						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="{{url('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count" id="cartValue">{{Session::has('cart')?App\Helpers\Cart::qty():0}}</span></a>
								<!-- Shopping Item -->
								{{-- <div class="shopping-item">
									<div class="dropdown-cart-header">
										<span> Items</span>
										<a href="#">View Cart</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="assets/home/images/images/aetra zain.jpg" alt="#"></a>
											<h4><a href="#">aetra zain</a></h4>
											<p class="quantity">1x - <span class="amount">300.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="assets/home/images/images/lambda.jpg" alt="#"></a>
											<h4><a href="#">lambda</a></h4>
											<p class="quantity">1x - <span class="amount">1160.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">1460</span>
										</div>
										<a href="{{url('checkout')}}" class="btn animate">Checkout</a>
									</div>
								</div> --}}
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
				<div class="container">
					<div class="cat-nav-head">
						<div class="row">
							<div class="col-12">
								<div class="menu-area">
									<!-- Main Menu -->
									<nav class="navbar navbar-expand-lg">
										<div class="navbar-collapse">	
											<div class="nav-inner">	
												<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="{{url('index')}}">Home</a></li>
													<li><a href="{{url('aboutus')}}">About us</a></li>												
													<li><a href="{{url('services')}}">Service</a></li>
													
													<li class="drop-down"><a href="#">Companies<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li class="drop-down"><a href="{{url('pesticides')}}">GK & CG company</a></li>
														    <li><a href="{{url('greenlet')}}">Greenlet company</a></li>
															<li><a href="{{url('warble')}}">Warble company</a></li>
														</ul>
													</li>
													<!--li><a href="#">Pages</a></!--li-->									
													<!--li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li-->
													<li><a href="{{url('contact')}}">Contact Us</a></li>
												</ul>
											</div>
										</div>
									</nav>
									<!--/ End Main Menu -->	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->
	