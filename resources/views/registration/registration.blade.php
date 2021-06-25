<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel='stylesheet' id='toastr-style-css' href='{{ asset('toastr.min.css') }}' type='text/css' media='all' />
		<!--favicon-->
        <link rel="icon" type="image/png" href="{{asset('assets/home/images/favicon.png')}}">
		<!--end favicon-->
		<!-- MATERIAL DESIGN-->
		<link rel="stylesheet" href="{{asset('assets/home/registration/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('assets/home/registration/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('assets/home/registration/images/background.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="{{asset('assets/home/registration/images/registration-form-1.jpg')}}" alt="">
				</div>
				<form action="{{ route('user.register') }}" method="POST">
					@csrf
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" name="fname" placeholder="First Name" class="form-control" required>
						<input type="text" name="lname" placeholder="Last Name" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" class="form-control" name="email" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control" required>
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
			<script src="{{asset('assets/home/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
		<script src="{{ asset('toastr.min.js') }}"></script>
    @toastr_render
	</body>

</html>