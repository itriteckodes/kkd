<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function stripepay(Request $request)
    {
        $order = Order::withTrashed()->where('order_code',$request->order_code);
        Stripe::setApiKey('sk_test_51IVZcBDoZl8DJ0XN2B6ryI8a1tssqoDcso3P1IDP7GxJ1qtmPnCGh9Ywap5fBwmQkGB5LIX4luKiWLlg202VvuJU00KKpdAkHt');
        Charge::create([
            "amount" => $request->amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from australiancart for order"
        ]);
        $order->restore();
        Session::forget('cart');
        toastr()->success('Order Placed Successfully','Success');
        return redirect()->route('home');
    }
}
