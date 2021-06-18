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
    <title>Kisaan shop</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/home/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	<link rel='stylesheet' id='toastr-style-css'
	href='{{asset("toastr.min.css")}}' type='text/css' media='all' />
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
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="assets/home/css/reset.css">
	<link rel="stylesheet" href="assets/home/style/style.css">
    <link rel="stylesheet" href="assets/home/css/responsive.css">


	
</head>
<body class="js">
<!-- Preloader -->
@include('preloader/preloader')
<!-- End Preloader -->
<!-- Header -->
@include('header/header')
<!--/ End Header -->
<!-- Breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{url('index')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="#">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

    <!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			@if (Session::has('cart'))
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							@foreach (App\Helpers\Cart::products() as $key=>$product)
							<tr class="p{{ $product->id }}">
								<td class="image" data-title="No"><img src="{{ $product->image }}" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">{{ $product->name }}</a></p>
							
								</td>
								<td class="price" data-title="Price"><span>{{ $product->price }}</span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus" productprice="{{ $product->price }}" productId="{{ $product->id }}">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[{{ $key+1 }}]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[{{ $key+1 }}]" class="input-number" id="spec{{ $product->id }}"  data-min="0" data-max="100" value="{{$product['qty']}}">
										<div class="button plus" productprice="{{ $product->price }}" productId="{{ $product->id }}">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{ $key+1 }}]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span id="prp{{ $product->id }}">{{$product->price * $product['qty']}}</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove remove-icon" productId="{{$product->id}}"></i></a></td>
							</tr>
							@endforeach
	
						
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" checked> Shipping (+100)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span id="subtotal">{{Session::get('cart')['amount']}}</span></li>
										<li class="last">You Pay<span id="total">{{Session::get('cart')['amount']}}</span></li>
									</ul>
									<div class="button5">
										<a href="{{url('checkout')}}" class="btn">Checkout</a>
										<a href="{{url('index')}}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
	@else
	<br>
	<h3 class="text-center">Your Shopping Cart Is Empty</h3>
	<br>
	<br>
	@endif
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over 100 piece</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	
    <!-- End Shop Newsletter -->
	
	
	
	<!-- Modal -->
    <!--div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"-->
                                <!-- Product Slider -->
									<!--div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/modal1.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal2.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal3.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal4.jpg" alt="#">
											</div>
										</div>
									</!--div-->
								<!-- End Product slider -->
                            <!--/div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity"-->
										<!-- Input Order -->
										<!--div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</!--div-->
										<!--/ End Input Order -->
									<!--/div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </!--div-->
        <!-- Modal end -->
        <br>
        <br>
        <!--Footer-->
        @include('footer/footer')
        <!--End Footer-->
        <!--Whatsapp-->
        @include('whatsapp/whatsapp')
        <!-- End Whatsapp-->

        <!-- Jquery -->
    <script src="assets/home/js/jquery.min.js"></script>
    <script src="assets/home/js/jquery-migrate-3.0.0.js"></script>
	<script src="assets/home/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/home/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/home/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="assets/home/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="assets/home/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="assets/home/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="assets/home/js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="assets/home/js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="assets/home/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="assets/home/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="assets/home/js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="assets/home/js/ytplayer.min.js"></script>
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
	<script src="{{asset('toastr.min.js')}}"></script>
	@toastr_render
	<script>
		let id,qty,price,total;
		$(document).ready(function(){
	
		$('.remove').click(function(e){
			e.preventDefault();
			   id = $(this).attr('productId');
			  $.ajax({
				  url : "{{url('user/cart/remove')}}",
				  type : "POST",
				  data : {
					  id : id
				  },
				  success:function(response){
					  console.log(id);
					  removeFromView(id,response);
					  updateView(response);
				  }
			  });
		  }); 
		  
		  $('.plus').click(function(){
			 id = $(this).attr('productId');
			 price = $(this).attr('productprice');
			  $.ajax({
				  url : "{{url('user/cart/increment')}}",
				  type : "POST",
				  data : {
					  id : id
				  },
				  success:function(response){
					  console.log(response);
					 if(response.error){
						toastr.error("Item out of Stock!");
						qtys=$('#spec'+id).val();
						$('#spec'+id).val(qtys-1);
					 } else {
						  $('#spec'+id).val(parseInt($('#spec'+id).val()));
							qty=$('#spec'+id).val();
						  updateView(response);
					  } 
				  }
			  });
		  });
		  
		  $('.minus').click(function(){
			   id = $(this).attr('productId');
			   price = $(this).attr('productprice');
			  $.ajax({
				  url : "{{url('user/cart/decrement')}}",
				  type : "POST",
				  data : {
					  id : id
				  },
				  success:function(response){
					   qty = parseInt($('#spec'+id).val());
					  if(qty > 0) $('#spec'+id).val(qty);
					  else {
						  removeFromView(id,response);
					  }
					  updateView(response);
				  }
			  });
		  });
	
		  function updateView(response){
			  total = parseInt(qty*price);
			  $('#cartValue').html(response.cart.qty);
			  $('#subtotal').html(response.cart.amount);
			  $('#total').html(response.cart.amount);
			  $('#prp'+id).html(total);
		  }

		   function removeFromView(id,response){
			  $('.p'+id).remove();
			  toastr.warning('Item removed from cart')
			  if (response.cart == null) location.reload();
		   }
	  });
	</script>
</body>
</html>
