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
            {!! Form::text('when', '', ['class' => 'form-control']) !!}
          <h4>Prijs</h4>
            {!! Form::text('when', '', ['class' => 'form-control']) !!}
          <h4>Type:</h4>
            {!! Form::text ('when', '', ['class' => 'form-control']) !!}
          </body>
          <a href="{{ url('/blog/admin') }}">cancel</a>
          <button type="submit" class="btn btn-info btn-sm"><i class="glyphicon"></i>Submit</button>
          </form>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
@endsection
