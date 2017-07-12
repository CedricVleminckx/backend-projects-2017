{{-- extend the parent tpl --}}
@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Modal for orders-->
  <div class="modal fade" id="order" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        @foreach($details as $detail)
          <h4 class="modal-title">Order product: {{$detail->productName}}</h4>
        </div>
        <h2>Order details</h2>
        <div class="modal-body">
          {!! Form::open(['url' => '/order/'. $detail->id , 'method'=>'POST']) !!}
            <p>Price: € {{ $detail->price }}/item</p>
            <p>Size: {!! Form::select('size', array('Small' => 'Small', 'Medium' => 'Medium', 'Large' => 'Large')) !!}</p>
            <p>Quantity: {!! Form::selectRange('quantity', 1, $detail->stockQuantity) !!}</p>
        </div>
        @endforeach
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
</div>

<!-- Modal for edit contact info-->
<div class="modal fade" id="editContact" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      @foreach($details as $detail)
        <h4 class="modal-title">Order product: {{$detail->productName}}</h4>
      </div>
      <h2>Order details</h2>
      <div class="modal-body">
        {!! Form::open(['url' => '/account/post/' . $detail->id . '/order' , 'method'=>'POST']) !!}
          <p>Price: € {{ $detail->price }}/item</p>
          <p>Size: {!! Form::select('size', array('Small' => 'Small', 'Medium' => 'Medium', 'Large' => 'Large')) !!}</p>
          <p>Quantity: {!! Form::selectRange('quantity', 1, $detail->stockQuantity) !!}</p>
      </div>
      @endforeach
      <h2>Is this information correct?</h2>
      <div style="margin:25px; margin-bottom:50px;">
        {!! Form::model($user->toArray(), ['url' => ['/account/post' . $user->id . '/order']]) !!}
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

<!-- Modal for wishlist-->
<div class="modal fade" id="wish" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      @foreach($details as $detail)
        <h4 class="modal-title">Add product: {{$detail->productName}} to wishlist</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['url' => '/wishlist/'. $detail->id , 'method'=>'POST']) !!}
          <p>Price: € {{ $detail->price }}/item</p>
          <p>Size: {!! Form::select('size', array('Small' => 'Small', 'Medium' => 'Medium', 'Large' => 'Large')) !!}</p>
          <p>Quantity: {!! Form::selectRange('quantity', 1, 10) !!}</p>
      </div>
      @endforeach
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-default" >Add to wishlist</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
</div>

<div class="w3-panel">
  @foreach($details as $detail)
    @foreach($fotos as $foto)
      <img class="mySlides" src="{{ asset($foto->foto)}}" alt="">
    @endforeach
    <h1>{{$detail->productName}}</h1>
      <p>product number: {{$detail->productNumber}}</p>
      <p>Quantity available: {{ $detail->stockQuantity }}</p>
      <p>Gender: {{ $detail->gender }}</p>
      <p>Color: {{$detail->color}}</p>
      <h2>€ {{$detail->price}}</h2>
  @endforeach
  @if(count($fotos) == 1)
    <p>No extra photos</p>
  @else
  <h3>{{count($fotos)}} Photos</h3>
    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button> <br><br>
  @endif
  @if(Auth::check())
  <button data-toggle="modal" data-target="#wish" class="w3-button w3-light-grey" type="button" name="wish">Wishlist</button>
  <button data-toggle="modal" data-target="#order" class="w3-button w3-light-grey" type="button" name="order">Order</button>
  @else
    <p>You must login or create an account to order and add items to your wishlist</p>
    <a href="{{url('/login')}}"><button class="w3-button w3-light-grey" type="button" name="button">Login</button></a>
  @endif
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
@endsection
