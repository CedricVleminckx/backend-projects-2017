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

<!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="https://www.w3schools.com/w3images/jeans.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">Buy more at webstore!</h1>
      <h1 class="w3-hide-large w3-hide-medium">Buy more at webstore!</h1>
      <h1 class="w3-hide-small">Choose a category</h1>
    </div>
  </div>

  <div class="w3-row w3-grayscale">
    @foreach($category as $cat)
      <div class="public">
        <a href="{{ url('/shop') }}/{{ $cat->id }}"><img height="170" src="{{ asset( $cat->foto) }}" alt=""></a>
        <a href="{{ url('/shop') }}/{{ $cat->id }}"><p>{{ $cat->categoryName }}<br></p></a>
      </div>
    @endforeach
  </div>

@endsection
