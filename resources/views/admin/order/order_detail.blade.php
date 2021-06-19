@extends('admin.layout')

@section('title')
    Admin-Orders
@endsection

@section('heading')
    Order-Items
@endsection

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Image</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Subtotal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $key=>$item)
      <tr>
        <td>{{$key+1}}</td>
        <td><img src="{{ $item->product->image }}" height="75" width="50" alt=""></td>
        <td>{{$item->product->name}}</td>
        <td>{{$item->product->price}}</td>
        <td>{{$item->qty}}</td>
        <td>{{$item->qty*$item->product->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection