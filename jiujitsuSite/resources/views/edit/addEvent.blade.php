{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Jiujitsu')

@section('content')
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<main>
  <section id="who-we-are">
    <div class="container inner-right">
      <div class="row">
        <div class="col-md-10">
          <body>
          {!! Form::open(['url' => '/bewerken/add/post','method' => 'POST']) !!}
          {!! Form::token() !!}
          <h4>Title:</h4>
            {!! Form::text('eventName', '', ['class' => 'form-control']) !!}
          <h4>Content:</h4>
            {!! Form::textarea('content', '', ['class' => 'form-control']) !!}
          <h4>Datum:</h4>
            {!! Form::date('when', '', ['class' => 'form-control']) !!}
          <h4>Locatie:</h4>
            {!! Form::text('location', '', ['class' => 'form-control']) !!}
          <h4>Prijs</h4>
            {!! Form::text('price', '', ['class' => 'form-control']) !!}
          <h4>Type:</h4>
            {!! Form::text ('type', '', ['class' => 'form-control']) !!}
          <h4>Voor iedereen?</h4>
            {!! Form::select('who', ['true' => 'true', 'false' => 'false']  ) !!}<br>
          </body>
          <a href="{{ url('/bewerken') }}">cancel</a>
          <button type="submit" class="btn btn-info btn-sm"><i class="glyphicon"></i>Submit</button>
          </form>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
@endsection
