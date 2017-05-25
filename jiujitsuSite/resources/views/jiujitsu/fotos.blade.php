{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Jiujitsu')
<link rel="stylesheet" media="screen" href="{{ asset('/css/fotos.css') }}" />
@section('content')

<main>
  <section id="who-we-are">
    <div class="container inner-left">
      <div class="row">
      @if(Auth::id() == 1)
        <div class="col-md-10">
          {!! Form::open(array('url' => '/fotos/upload', 'files' => true)); !!}
          {!! Form::file('image[]', array('multiple'=>true)) !!}
          <button type="submit" class="btn btn-info btn-sm"><i class="glyphicon"></i>Submit</button>
          </div>
          @foreach($fotos as $foto)
          <div class="col-md-6">
            <img src="{{ asset( $foto->foto) }}" alt="">
          </div>
          @endforeach

      @else
        @foreach($fotos as $foto)
        <div class="col-md-6">
          <img src="{{ asset( $foto->foto) }}" alt="">
        </div>
        @endforeach
      @endif
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
</main>

@endsection
