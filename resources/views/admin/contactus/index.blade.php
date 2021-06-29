@extends('admin.layout')

@section('title')
    Messages
@endsection

@section('heading')
    Messages
@endsection

@section('content')
<table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">subject</th>
        <th scope="col">message</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($contacts as $key=>$contact)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->phone}}</td>
        <td>{{$contact->subject}}</td>
        <td>{{$contact->message}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection