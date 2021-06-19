<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth:user'], function () {
    Route::get('/', function () {
        return view('index/index');
    });
    
    Route::get('cart',function(){
        return view('cart/cart');
    });
    Route::get('checkout',function(){
        return view('checkout/checkout');
    });
    Route::get('index', function () {
        return view('index/index');
    })->name('home');
    Route::get('preloader', function () {
        return view('preloader/preloader');
    });
    Route::get('header', function () {
        return view('header/header');
    });
    Route::get('footer', function () {
        return view('footer/footer');
    });
    Route::get('team', function () {
        return view('team/team');
    });
    Route::get('whatsapp', function () {
        return view('whatsapp/whatsapp');
    });
    Route::get('aboutus', function () {
        return view('about/about');
    });
    
    Route::get('contact',function(){
        return view('contact/contact');
    });
    Route::get('services',function(){
        return view('services/services');
    });
    
    Route::get('pesticides',function(){
        return view('pesticides/pesticides');
    });
    Route::get('greenlet',function(){
        return view('greenlet/greenlet');
    });
    Route::get('warble',function(){
        return view('warble/warble');
    });
});

Route::get('login', function () {
    return view('login/login');
})->name('login');

Route::get('reg', function () {
    return view('registration/registration');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    
    ///////////////////////// Admin Routes ////////////////////////

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
        Route::view('login', 'admin.auth.login')->name('login');
        Route::post('login', 'AuthController@login')->name('login.store');

        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('logout', 'AuthController@logout')->name('logout');
            Route::view('dashboard', 'admin.index.index')->name('dashboard');
            Route::resource('product','ProductController');
            Route::resource('order','OrderController');
            Route::resource('category','CategoryController');
        });

    });

    ////////////////////////// User Routes ////////////////////////


    Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function () {
        Route::post('register', 'UserController@store')->name('register');
        Route::post('login', 'AuthController@login')->name('login');
        Route::group(['middleware' => 'auth:user'], function () {
        Route::get('logout', 'AuthController@logout')->name('logout');
        Route::post('cart/increment', 'CartController@increment');
        Route::resource('product','ProductController');
        Route::post('cart/decrement', 'CartController@decrement');
        Route::post('cart/remove', 'CartController@remove');
        Route::get('cart/clear', 'CartController@clear');
        Route::post('cart/add', 'CartController@add');
        Route::post('order/pay', 'PaymentController@stripepay')->name('stripe.pay');
        Route::resource('order','OrderController');
        });
        
    });
});
