<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesdesign.in/admiry/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 06:00:28 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <link rel='stylesheet' id='toastr-style-css'
		href='{{asset("toastr.min.css")}}' type='text/css' media='all' />
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        @yield('style')
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo">Admiry</a>-->
                        <a href="{{ route('admin.dashboard')}}" class="logo"><img src="{{asset('kisaan.png')}}" height="92" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="text-center">
                            <img src="{{asset('avatar.png')}}" alt="" class="rounded-circle">
                        </div>
                        <div class="user-info">
                            <h4 class="font-16">{{ Auth::guard('admin')->user()->name }}</h4>
                            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dasboard </span>
                                    {{-- <span class="badge badge-primary pull-right"></span> --}}
                                </a>
                            </li>    
                            
                            <li>
                                <a href="{{ route('admin.category.index') }}" class="waves-effect">
                                    <i class="mdi mdi-format-indent-increase
                                    "></i>
                                    <span> Category </span>
                                    {{-- <span class="badge badge-primary pull-right"></span> --}}
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span>Product</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('admin.product.create') }}">Add Product</a></li>
                                    <li><a href="{{ route('admin.product.index') }}">All Products</a></li>
                                    {{-- <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li> --}}
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cube-outline"></i> <span> Orders</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('admin.order.index') }}">New Orders</a></li>
                                    <li><a href="{{ route('admin.order.create') }}">Completed Orders</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('admin.contact.index') }}" class="waves-effect">
                                    <i class="mdi mdi-format-indent-increase
                                    "></i>
                                    <span>Messages</span>
                                    {{-- <span class="badge badge-primary pull-right"></span> --}}
                                </a>
                            </li>

                            {{-- 
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                </ul>
                            </li> --}}

   
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                              

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('avatar.png')}}" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a> --}}
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">@yield('heading')</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                            @yield('content')
                        </div><!-- container-fluid -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2020 - 2021 Kissan - By TritekKodes
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/tether.min.js')}}"></script><!-- Tether for Bootstrap -->
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

        <!--Morris Chart-->
        <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{asset('assets/pages/dashborad.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="{{asset('toastr.min.js')}}"></script>
	@toastr_render
        @yield('scripts')

    </body>

<!-- Mirrored from themesdesign.in/admiry/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 06:01:04 GMT -->
</html>