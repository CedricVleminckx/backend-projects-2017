{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Jiujitsu')
<link rel="stylesheet" media="screen" href="{{ asset('/css/foto.css') }}" />
@section('content')

<main>
  <section id="who-we-are">
    <div class="container inner-left">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset( $foto ) }}" alt="">
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
</main>

@endsection
