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
            <p>{{$event->content}}</p>
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

              <h2>Inschrijven</h2>

              <form id="courseregistrationform" class="forms" action="/api/courses/1/registrations" method="post">

                <div class="row">
                    <div class="col-sm-6">
                        <input type="hidden" name="id" value="1"/>
                        <input type="text" name="lastname" class="form-control" placeholder="Naam (Verplicht)">
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="firstname" class="form-control" placeholder="Voornaam (Verplicht)">
                  </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="age" class="form-control" placeholder="Leeftijd (Verplicht)">
                  </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="row">
                  <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" placeholder="Email (Verplicht)">
                  </div><!-- /.col -->
                </div><!-- /.row -->

                <button type="submit" class="btn btn-default btn-submit">Inschrijven</button>

              </form>

              <div id="response"></div>

            </div><!-- ./col -->

            <div class="col-sm-6 outer-top-md inner-left-sm border-left">

              <h2>Waar?</h2>
              <p>{{$event->location}}</p>

              <h2>Wanneer?</h2>
              <p>{{$event->when}}</p>

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
