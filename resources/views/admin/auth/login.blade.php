<!DOCTYPE html>
<html>

<!-- Mirrored from themesdesign.in/admiry/red/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 06:02:13 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Kissan-Admin Panel</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel='stylesheet' id='toastr-style-css'
    href='{{asset("toastr.min.css")}}' type='text/css' media='all' />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center mt-0 m-b-15">
                    <a href="index.html" class="logo logo-admin"><img src="{{asset('kisaan.png')}}" height="94" alt="logo"></a>
                </h3>

                <h4 class="text-muted text-center font-18"><b>Sign In To Admin Panel</b></h4>

                <div class="p-3">
                    <form class="form-horizontal m-t-20" action="{{ route('admin.login.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="text" name="email" required placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="password" name="password" required placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/tether.min.js')}}"></script>
    <!-- Tether for Bootstrap -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('toastr.min.js')}}"></script>
	@toastr_render
    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

<!-- Mirrored from themesdesign.in/admiry/red/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 06:02:13 GMT -->

</html>