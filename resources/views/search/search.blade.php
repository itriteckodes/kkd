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
    <title>Kisaan shop.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/home/images/favicon.png') }}">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->
    @include('stylesheet/stylesheet')
    <link rel='stylesheet' id='toastr-style-css' href='{{ asset('toastr.min.css') }}' type='text/css' media='all' />
</head>

<body class="js">
    <!-- Preloader -->
    @include('preloader/preloader')
    <!--End  Preloader -->
    <!--header-->
    @include('header/header')
    <!-- End header-->
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ url('index') }}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="#">Search Results</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!--Single Widget-->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Search Results</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                   
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @if ($products != null)
                                            
                                        
                                        @foreach ($products as $product)
                                            
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="">
                                                        <img class="default-img"
                                                            src="{{ $product->image }}"
                                                            alt="#">
                                                        <img class="hover-img"
                                                            src="{{ $product->image }}"
                                                            alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                                title="Quick View" href="#"><i
                                                                    class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to
                                                                    Wishlist</span></a>
                                                            <a title="Compare" href="#"><i
                                                                    class="ti-bar-chart-alt"></i><span>Add to
                                                                    Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" id="{{ $product->id }}" class="add-cart" href="{{ url('cart') }}">Add to
                                                                cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">{{ $product->name }}</a></h3>
                                                    <div class="product-price">
                                                        <span>{{ $product->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <h3 class="text-center">No Product Found</h3>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!--End single widget-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!--Other section-->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Fungicide Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#"
                                        role="tab">Agriculture</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"
                                        role="tab">Pesticides</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"
                                        role="tab">Weedicides</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Crop
                                        Supplement</a></li>
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#"
                                        role="tab">Fungicide</a></li>
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                            src="assets/home/images/greenlet/Fungicide/Codex.jpg"
                                                            alt="#">
                                                        <img class="hover-img"
                                                            src="assets/home/images/greenlet/Fungicide/Codex.jpg"
                                                            alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                                title="Quick View" href="#"><i
                                                                    class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to
                                                                    Wishlist</span></a>
                                                            <a title="Compare" href="#"><i
                                                                    class="ti-bar-chart-alt"></i><span>Add to
                                                                    Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="{{ url('cart') }}">Add to
                                                                cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">Codex</a></h3>
                                                    <div class="product-price">
                                                        <span>1029.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--End single widget-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End other section-->

    <!--other widget-->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>CropSupplement Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#"
                                        role="tab">Agriculture</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"
                                        role="tab">Pesticides</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"
                                        role="tab">Weedicides</a></li>
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#"
                                        role="tab">Crop Supplement</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"
                                        role="tab">Fungicides</a></li>
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                            src="assets/home/images/greenlet/Crop suplement/triplet.jpg"
                                                            alt="#">
                                                        <img class="hover-img"
                                                            src="assets/home/images/greenlet/Crop suplement/triplet.jpg"
                                                            alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                                title="Quick View" href="#"><i
                                                                    class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to
                                                                    Wishlist</span></a>
                                                            <a title="Compare" href="#"><i
                                                                    class="ti-bar-chart-alt"></i><span>Add to
                                                                    Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="{{ url('cart') }}">Add to
                                                                cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">triplet</a></h3>
                                                    <div class="product-price">
                                                        <span>999.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                            src="assets/home/images/greenlet/Crop suplement/gramino.jpg"
                                                            alt="#">
                                                        <img class="hover-img"
                                                            src="assets/home/images/greenlet/Crop suplement/gramino.jpg"
                                                            alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                                title="Quick View" href="#"><i
                                                                    class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to
                                                                    Wishlist</span></a>
                                                            <a title="Compare" href="#"><i
                                                                    class="ti-bar-chart-alt"></i><span>Add to
                                                                    Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">gramino</a></h3>
                                                    <div class="product-price">
                                                        <span>999.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--End single widget-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 --}}


    <!--End other widget-->
    <!-- Start Footer Area -->
    @include('footer/footer')
    <!-- Start Footer Area -->
    <!--Whatsapp-->
    @include('whatsapp/whatsapp')
    <!--End Whatsapp-->
    <!-- Jquery -->
    @include('javascript/javascript')

    <script src="{{ asset('toastr.min.js') }}"></script>
    @toastr_render
    <script>
        $(document).ready(function() {
            $('.add-cart').click(function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ url('user/cart/add') }}",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.error) {
                            toastr.warning('Item Out of Stock');

                        } else {
                            toastr.success('Item Added to Cart');
                            $('#cartValue').html(response.qty);
                        }
                    }
                });
            });
        });

    </script>
    <!--End Jquery -->
</body>

</html>
