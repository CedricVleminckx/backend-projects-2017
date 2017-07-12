{{-- extend the parent tpl --}}
@extends('layouts.master')

@section('content')
  <h1>My account</h1>
  <div style="margin:25px; margin-bottom:50px;">
    {!! Form::model($user->toArray(), ['url' => ['/account/post', $user->id]]) !!}
    {!! Form::token() !!}
    <p>Name: {!! Form::text('name') !!}</p>
    <p>Lastname: {!! Form::text('lastName') !!}</p>
    <p>Email: {!! Form::text('email') !!}</p>
    <p>Phonenumber: {!! Form::text('phoneNumber') !!}</p>
    <p>Address: {!! Form::text('address', null, array('id' => 'address')) !!}</p>
    <p>Birthdate(m/d/y): {!! Form::date('birthdate', \Carbon\Carbon::now()); !!}</p>
    <a href="{{url('/account')}}"><button class="w3-button w3-light-grey" type="button" name="cancel">Cancel</button></a>
    <button class="w3-button w3-light-grey" type="submit" name="edit">Submit</button>
    {!! Form::close() !!}
  </div>

  <script>
    function initialize() {
      var input = document.getElementById('address');
      var autocomplete = new google.maps.places.Autocomplete(input);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@endsection
