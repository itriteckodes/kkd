<?php

namespace App\Http\Controllers\User;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::guard('user')->user() == null) {
            $user_id = null;
        } else {
            $user_id = Auth::guard('user')->user()->id;
        }


        $amount = (Session::get('cart')['amount']);
        foreach (Cart::products() as $product) {
            $mproduct = Product::find($product->id);
            if ($product->stock > $product['qty']) {
                $mproduct->update([
                    'stock' => $product->stock - $product['qty']
                ]);
            }
            else
            {
                toastr()->error("item out of stock");
                return redirect()->back();
            }
        
        }
        $order = Order::create([
            'user_id' => $user_id,
            'order_code' => rand(100000, 999999),
            'qty' => Session::get('cart')['qty'],
            'subtotal' => Session::get('cart')['amount'],
            'amount' => $amount
        ] + $request->all());
        foreach (Cart::products() as $product) {

            OrderItems::create([
                'product_id' => $product->id,
                'order_id' => $order->id,
                'qty' => $product['qty']
            ]);
        }
        $code = $order->order_code;

        if ($order->type == 0) {
            Session::forget('cart');
            toastr()->success('Order Placed Successfully', 'Success');
            return redirect()->route('home');
        } elseif ($order->type == 1) {
            $order->delete();
            return view('stripe.stripe')->with('amount', $amount)->with('code', $code);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
