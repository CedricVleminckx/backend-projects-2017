{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Jiujitsu')

@section('content')

<main>

  <!-- ============================================================= SECTION – HERO ============================================================= -->

  <section id="hero">
    <div id="owl-main" class="owl-carousel height-md owl-inner-nav owl-ui-lg">

      <div class="item" style="background-image: url(assets/images/art/home01.jpg);">
        <div class="container">
          <div class="caption vertical-center text-right">

            <h1 class="fadeInLeft-1 light-color">Jiu-Jitsu Akademie Humbeek</h1>
            <p class="fadeInLeft-2 light-color">Jiu-Jitu Akademie Humbeek biedt onderwijs, training en de mogelijkheid tot het deelnemen aan wedstrijden in Jiu-Jitsu. Deze budovorm kan bij de vereniging worden beoefend als pedagogisch spel, als sport, als zelfverdediging en als beweging culturele activiteit.</p>
            <div class="fadeInLeft-3">
              <a href="#" class="btn btn-large">Welkom!</a>
            </div><!-- /.fadeIn -->

          </div><!-- /.caption -->
        </div><!-- /.container -->
      </div><!-- /.item -->

      <div class="item" style="background-image: url(assets/images/art/vrouwencursus.jpg);">
        <div class="container">
          <div class="caption vertical-center text-right">

            <h1 class="fadeInLeft-1 light-color">Zelfverdedigings<br>cursus voor<br>vrouwen</h1>
            <p class="fadeInLeft-2 light-color">Leer jezelf verdedigen met eenvoudige, efficiënte technieken.</p>
            <div class="fadeInLeft-3">
              <a href="vrouwencursus.html" class="btn btn-large">Meer info</a>
            </div><!-- /.fadeIn -->

          </div><!-- /.caption -->
        </div><!-- /.container -->
      </div><!-- /.item -->

      <div class="item" style="background-image: url(assets/images/art/home02.jpg);">
      </div><!-- /.item -->

    </div><!-- /.owl-carousel -->
  </section>

  <!-- ============================================================= SECTION – HERO : END ============================================================= -->


  <!-- ============================================================= SECTION – PRODUCT ============================================================= -->

  <section id="product">
    <div class="container inner">

      <div class="row">

        <div class="col-sm-6 inner-right-xs text-right">
          <figure><img src="assets/images/art/techniek01.jpg" alt=""></figure>
        </div><!-- /.col -->

        <div class="col-sm-6 inner-top-xs inner-left-xs">
          <h2>Jiu-Jitsu voor jong en oud.</h2>
          <p>De minimumleeftijd in onze vereniging is 7 jaar. Er is niet echt een maximumleeftijd.</p>
        </div><!-- /.col -->

      </div><!-- /.row -->

      <div class="row inner-top-md">

        <div class="col-sm-6 col-sm-push-6 inner-left-xs">
          <figure><img src="assets/images/art/calm.jpg" alt=""></figure>
        </div><!-- /.col -->

        <div class="col-sm-6 col-sm-pull-6 inner-top-xs inner-right-xs">
          <h2>Trainingsuren.</h2>
          <p>Woensdag en vrijdag</p>
          <p>van 18:30 tot 19:30 voor de kleintjes (-11jaar)<br>van 19:00 tot 20:30 uur voor de groten (+11jaar)<br>van 19:00 tot 21:00 uur voor de gevorderden</p>
          <h2>Dojo.</h2>
          <p>Sporthal Humbeek, Nachtegaallaan 5, 1851 Humbeek</p>
        </div><!-- /.col -->

      </div><!-- /.row -->

      <div class="row inner-top-md">

        <div class="col-sm-6 inner-right-xs text-right">
          <figure><img src="assets/images/art/social.jpg" alt=""></figure>
        </div><!-- /.col -->

        <div class="col-sm-6 inner-top-xs inner-left-xs">
          <h2>Sociale media</h2>
          <p>Vind ons terug op de verschillende sociale media sites.</p>
          <a href="https://www.facebook.com/JiuJitsuHumbeek" class="btn share-facebook">Facebook</a>
          <a href="https://www.pinterest.com/JiuJitsuHumbeek/" class="btn share-pinterest">Pinterest</a>
          <a href="https://twitter.com/JiuJitsuHumbeek" class="btn share-twitter">Twitter</a>
        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>

  <!-- ============================================================= SECTION – PRODUCT : END ============================================================= -->


  <!-- ============================================================= SECTION – VISIT OUR STORE ============================================================= -->

  <section id="visit-our-store" class="img-bg img-bg-soft tint-bg" style="background-image: url(assets/images/art/image-background04.jpg);">
    <div class="container inner">

      <div class="row">
        <div class="col-md-8 col-sm-9">
          <header>
            <h1>Zelfverdedigingscursus voor vrouwen</h1>
            <p>Leer jezelf verdedigen met eenvoudige, efficiënte technieken.</p>
            <p>Voor jong en oud, geen conditie vereist.</p>
          </header>
          <a href="vrouwencursus.html" class="btn btn-large">Meer info</a>
        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>

  <!-- ============================================================= SECTION – VISIT OUR STORE : END ============================================================= -->

  <!-- ============================================================= SECTION – GET IN TOUCH ============================================================= -->

  <section id="get-in-touch" class="inner-bottom">
    <div class="container inner light-bg">
      <div class="row">
        <div class="col-md-8 col-sm-9 center-block text-center">
          <header>
            <h1>Is Jiu-Jitsu iets voor jou?</h1>
            <p>Kom gerust eens langs om het zelf eens uit te proberen.</p>
          </header>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>

  <!-- ============================================================= SECTION – GET IN TOUCH : END ============================================================= -->

  <!-- ============================================================= SECTION – MAP ============================================================= -->

  <section id="map" class="height-sm"></section>

  <!-- ============================================================= SECTION – MAP : END ============================================================= -->


</main>

@endsection
