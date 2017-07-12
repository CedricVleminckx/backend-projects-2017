{{-- extend the parent tpl --}}
@extends('layouts.shop')
@section('nav')
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><a href="{{url('/home')}}"><b>WEBSTORE</b></a></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    @foreach($category as $cat)
      <a href="{{ url('/shop') }}/{{ $cat->id }}" class="w3-bar-item w3-button">{{ $cat->categoryName }}</a>
    @endforeach
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>
@endsection


@section('content')

<link rel="stylesheet" href="{{ asset('css/costum.css') }}">
@if(count($items) == 0)
  <h1>No items found for your search criteria</h1>
@endif
<div class="w3-row w3-grayscale">
  <p>{{ count($items) }} items found</p>
  @foreach($items as $item)
    <div class="public">
      <a href="{{ url('/shop') }}/{{ $item->category_id }}/product/{{ $item->productNumber }}"><img src="{{ asset( $item->foto) }}" alt=""></a>
      <a href="{{ url('/shop') }}/{{ $item->category_id }}/product/{{ $item->productNumber }}"><p>{{ $item->productName }}<br><b>€ {{ $item->price }}</b></p></a>
    </div>
  @endforeach
</div>

@endsection
