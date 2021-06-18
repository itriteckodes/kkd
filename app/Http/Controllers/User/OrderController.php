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

        if(Auth::guard('user')->user()==null){
            $user_id = null;
        }else{
           $user_id = Auth::guard('user')->user()->id;
        }


        $amount = (Session::get('cart')['amount']);
         $order = Order::create([
             'user_id' => $user_id,
             'order_code' => rand(100000, 999999),
             'qty' =>Session::get('cart')['qty'],
             'subtotal' =>Session::get('cart')['amount'],
             'amount'=>$amount
         ]+$request->all());
         foreach(Cart::products() as $product){
             OrderItems::create([
                 'product_id' => $product->id,
                 'order_id' => $order->id,
                 'qty' => $product['qty']
             ]);
            //  $productt = Product::find($product->id);
            //  $productt->stock=$productt->stock-$product['qty'];
            //  $productt->update();
         }
         $code = $order->order_code;
        //   $order->email = 'siddiqueakbar560@gmail.com';
            // $data = ['code' => $order->order_code];
            // Mail::send('mail', $data, function ($message) use ($order){
            //     $message->from('admin@mail.com','Admin');
            //     $message->to($order->email, 'Fixer')
            //     ->subject('Order tracking code');
            // }); 

            if ($order->type == 0) {
                 Session::forget('cart');
                 toastr()->success('Order Placed Successfully','Success');
                 return redirect()->route('home');   
            }
            elseif ($order->type == 1) {
                Session::forget('cart');
                toastr()->success('Order Placed Successfully','Success');
              return redirect()->route('home');     
            }
            elseif ($order->type == 2) {
                $order->delete();
                return view('stripe.stripe')->with('amount',$amount)->with('code',$code);
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
