@extends('admin.layout')

@section('title')
    Admin-orders
@endsection

@section('heading')
    New Orders
@endsection

@section('content')
<table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">fname</th>
        <th scope="col">lname</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">state</th>
        <th scope="col">country</th>
        <th scope="col">postal</th>
        <th scope="col">qty</th>
        <th scope="col">Amount</th>
        <th scope="col">Order Type</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $key=>$order)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$order->fname}}</td>
        <td>{{$order->lname}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->state}}</td>
        <td>{{$order->country}}</td>
        <td>{{$order->postal}}</td>
        <td>{{$order->qty}}</td>
        <td>{{$order->amount}}</td>
        <td>@if ($order->type == 0)
            Cash On Delivery
            @else
            Card Payment             
        @endif</td>
        <td><a href="{{ route('admin.order.edit',$order->id) }}" class="btn btn-success">Complete</a></td>
        <td><a href="{{ route('admin.order.show',$order->id) }}" class="btn btn-danger">Detail</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection