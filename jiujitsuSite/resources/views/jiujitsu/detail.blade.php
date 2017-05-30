{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Jiujitsu')

@section('content')

<main>

  <!-- ============================================================= SECTION – HERO ============================================================= -->

  <section id="hero" class="img-bg-bottom img-bg-soft tint-bg" style="background-image: url(assets/images/art/vrouwencursus.jpg);">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-10">
          <header>
            <h1>{{$event->eventName}}</h1>
            <p>{!! $event->content !!}</p>
          </header>
        </div><!-- /.col -->
      </div><!-- ./row -->
    </div><!-- /.container -->
  </section>

  <!-- ============================================================= SECTION – HERO : END ============================================================= -->

  <!-- ============================================================= SECTION – CONTACT FORM ============================================================= -->

  <section id="contact-form">
    <div class="container inner">

      <div class="row">
        <div class="col-sm-12">
          <div class="row">

            <div class="col-sm-6 outer-top-md inner-right-sm">
              @if(Auth::user())
                @if($event->who == 'true')
                  {!! Form::model($user, ['url' => ['/inschrijvingen/post', $event->id]]) !!}
                  <h4>Naam</h4>
                    {!! Form::text('name') !!}
                  <h4>Achternaam</h4>
                    {!! Form::text('lastname') !!}
                  <h4>Leeftijd</h4>
                    {!! Form::text('leeftijd') !!}
                  <h4>email</h4>
                    {!! Form::text('email') !!}
                  <button type="submit" class="btn btn-default btn-submit">Inschrijven</button>
                @elseif($event->who == 'false')
                  @if(Auth::user()->member == 'true')
                    {!! Form::model($user, ['url' => ['/inschrijvingen/post', $event->id]]) !!}
                    <h4>Naam</h4>
                      {!! Form::text('name') !!}
                    <h4>Achternaam</h4>
                      {!! Form::text('lastname') !!}
                    <h4>Leeftijd</h4>
                      {!! Form::text('leeftijd') !!}
                    <h4>email</h4>
                      {!! Form::text('email') !!}
                    <button type="submit" class="btn btn-default btn-submit">Inschrijven</button>
                  @else
                    <p>Om je te kunnen inschrijven moet je lid zijn van de club</p>
                  @endif
                @endif
              @else
              <p>Om je te kunnen inschrijven heb je een account nodig</p>
              <a class="btn btn-default btn-submit" href="{{ url('/register')}}">Inschrijven</a>
              @endif
            </div>
            <div class="col-sm-6 outer-top-md inner-left-sm border-left">

              <h2>Waar?</h2>
              <p>{{$event->location}}</p>

              <h2>Wanneer?</h2>
              <p>{{$event->when->format('d-m-Y')}}</p>

              <h2>Prijs?</h2>
              <p>{{$event->price}}</p>

            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>

  <!-- ============================================================= SECTION – CONTACT FORM : END ============================================================= -->

</main>

@endsection
