{{-- extend the parent tpl --}}
@extends('layouts.master')

@section('content')
  <h1>My account</h1>
  <div style="margin:25px; margin-bottom:50px;">
    <p>Name: {{ $user->name }}</p>
    <p>Lastname: {{ $user->lastName }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Phonenumber: {{ $user->phoneNumber }}</p>
    <p>Address: {{ $user->address }}</p>
    <p>Birthdate(m/d/y): {{ $user->birthdate->format('m/d/Y') }}</p>
      <a href="{{ url('account/edit') }}"><button class="w3-button w3-light-grey"  type="button" name="edit">Edit profile</button></a>
      <a href="{{ url('/order') }}"><button class="w3-button w3-light-grey"  type="button" name="edit">View my orders</button></a>
  </div>

@endsection
