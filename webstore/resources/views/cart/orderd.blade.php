{{-- extend the parent tpl --}}
@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/costum.css') }}">

<h1>History of orders</h1>
<table style="width:50%">
  <thead>
    <tr>
      <th>productname</th>
      <th>Size</th>
      <th>Quantity</th>
      <th>Price/item</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $order)
    <tr>
      <td><a href="{{url('/shop')}}/{{$order->category_id}}/product/{{$order->productNumber}}">{{$order->productName}}</a></td>
      <td>{{$order->sizeOrderd}}</td>
      <td>{{$order->quantity}}</td>
      <td>€{{$order->price}}</td>
      <td>{{$order->updated_at->format('m/d/Y')}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
