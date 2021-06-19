@extends('admin.layout')

@section('title')
    Admin-Dashboard
@endsection

@section('heading')
    Dasboard
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-primary">
            <span class="mini-stat-icon"><i class="mdi mdi-cart-outline"></i></span>
            <div class="mini-stat-info text-right text-white">
                <span class="counter">{{ App\Models\Product::all()->count() }}</span>
                Total Products
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-primary">
            <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
            <div class="mini-stat-info text-right text-white">
                <span class="counter">{{ App\Models\Category::all()->count() }}</span>
                Total Categories
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-primary">
            <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
            <div class="mini-stat-info text-right text-white">
                <span class="counter">{{ App\Models\Order::all()->count() }}</span>
                Total Orders
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-primary">
            <span class="mini-stat-icon"><i class="mdi mdi-account-multiple"></i></span>
            <div class="mini-stat-info text-right text-white">
                <span class="counter">{{ App\Models\User::all()->count() }}</span>
                Registered Users
            </div>
        </div>
    </div>
</div>
@endsection