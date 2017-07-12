{{-- extend the parent tpl --}}
@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/costum.css') }}">

<h1>My wishlist!</h1>
@if(count($wishes)==0)
  <h2>Your wishlist is empty...</h2>
@else
<table style="width:50%">
  <thead>
    <tr>
      <th>productname</th>
      <th>Size</th>
      <th>Quantity</th>
      <th>Price/item</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($wishes as $wish)
    <tr>
      <td><a href="{{url('/shop')}}/{{$wish->category_id}}/product/{{$wish->productNumber}}">{{$wish->productName}}</a></td>
      <td>{{$wish->sizeOrderd}}</td>
      <td>{{$wish->quantity}}</td>
      <td>€{{$wish->price}}</td>
      <td>
        {!! Form::open(array('url' => '/wishlist/' . $wish->orders_id . '/orderWishlist', 'method' => 'POST')) !!}
         {!! csrf_field() !!}
        <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Delete</button>
        {!! Form::close() !!}
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

<button data-toggle="modal" data-target="#order" type="button" class="btn">Order wishlist</button>

<!-- Modal for wishlist orders-->
<div class="modal fade" id="order" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title">Order wishlist</h1>
      </div>
      <h2>Order details</h2>
      <table style="width:100%">
        <thead>
          <tr>
            <th>productname</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Price/item</th>
          </tr>
        </thead>
      @foreach($wishes as $wish)
      <div class="modal-body">
        {!! Form::open(['url' => '/orderWishlist' , 'method'=>'POST']) !!}
        <tr>
          <td>{{$wish->productName}}</td>
          <td>{{$wish->sizeOrderd}}</td>
          <td>{{$wish->quantity}}</td>
          <td>€{{$wish->price}}</td>
        </tr>
      </div>
      @endforeach
    </tbody>
  </table>
      <h2>Is this information correct?</h2>
      <div style="margin:25px; margin-bottom:50px;">
        <p>Email: {{ $user->email }}</p>
        <p>Phonenumber: {{ $user->phoneNumber }}</p>
        <p>Address: {{ $user->address }}</p>
        <button data-toggle="modal" data-target="#editContact" class="w3-button w3-light-grey"   data-dismiss="modal" type="button" name="edit">Edit contact details</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-default" >Order</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<!-- Modal for wishlist contact edit orders-->
<div class="modal fade" id="editContact" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title">Order wishlist</h1>
      </div>
      <h2>Order details</h2>
      <table style="width:100%">
        <thead>
          <tr>
            <th>productname</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Price/item</th>
          </tr>
        </thead>
      @foreach($wishes as $wish)
      <div class="modal-body">
        {!! Form::open(['url' => '/orderWishlist' , 'method'=>'POST']) !!}
        <tr>
          <td>{{$wish->productName}}</td>
          <td>{{$wish->sizeOrderd}}</td>
          <td>{{$wish->quantity}}</td>
          <td>€{{$wish->price}}</td>
        </tr>
      </div>
      @endforeach
    </tbody>
  </table>
      <h2>Is this information correct?</h2>
      <div style="margin:25px; margin-bottom:50px;">
        {!! Form::model($user->toArray(), ['url' => ['/orderWishlist/update']]) !!}
        {!! Form::token() !!}
        <p>Email: {!! Form::text('email') !!}</p>
        <p>Phonenumber: {!! Form::text('phoneNumber') !!}</p>
        <p>Address: {!! Form::text('address', null, array('id' => 'address')) !!}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-default" >Order</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

</div>


@endif
@endsection
