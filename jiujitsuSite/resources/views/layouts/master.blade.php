<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="oldie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="oldie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="oldie ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <link rel="stylesheet" media="screen" href="{{ asset('/css/reset.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('/css/screen.css') }}" />


  <!-- Core CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- AddOn/Plugin CSS -->
  <link href="{{ asset('assets/css/navy.css') }}" rel="stylesheet" title="Color">
  <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">

  <!-- Icons/Glyphs -->
  <link href="{{ asset('assets/fonts/fontello.css') }}" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
  <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <header>
    <div class="navbar">

      <div class="navbar-header">
        <div class="container">

          <ul class="info pull-left">
            <li><a href="#"><i class="icon-mail-1 contact"></i> jiu.jitsu.humbeek@gmail.com</a></li>
            <li><i class="icon-mobile contact"></i> 02/269.45.09</li>
          </ul><!-- /.info -->

          <ul class="social pull-right">
            <li><a href="https://www.facebook.com/JiuJitsuHumbeek"><i class="icon-s-facebook"></i></a></li>
            <li><a href="https://twitter.com/JiuJitsuHumbeek"><i class="icon-s-twitter"></i></a></li>
            <li><a href="https://www.pinterest.com/JiuJitsuHumbeek/"><i class="icon-s-pinterest"></i></a></li>
          </ul><!-- /.social -->

          <!-- ============================================================= LOGO MOBILE ============================================================= -->

          <a class="navbar-brand" href="{{url('/home')}}"><img src="{{asset('assets/images/logo.svg')}}" class="logo" alt=""></a>

          <!-- ============================================================= LOGO MOBILE : END ============================================================= -->

          <a class="navbar-toggle btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>

        </div><!-- /.container -->
      </div><!-- /.navbar-header -->

      <div class="yamm">
        <div class="navbar-collapse collapse">
          <div class="container">

            <!-- ============================================================= LOGO ============================================================= -->

            <a class="navbar-brand" href="{{url('/home')}}"><img src="{{url('assets/images/logo.svg')}}" class="logo" alt=""></a>

            <!-- ============================================================= LOGO : END ============================================================= -->


            <!-- ============================================================= MAIN NAVIGATION ============================================================= -->

            <ul class="nav navbar-nav">

              <li class="dropdown">
                <a href="{{url('/home')}}" class="dropdown-toggle" data-toggle="dropdown">Home</a>

                <ul class="dropdown-menu">
                  <li><a href="{{url('/home/geschiedenis')}}">Geschiedenis</a></li>
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.dropdown -->

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Foto's</a>
              </li><!-- /.dropdown -->


              <li class="dropdown">
                <a href="{{url('/kalender')}}" class="dropdown-toggle" data-toggle="dropdown">Kalender</a>
                @if (Auth::guest())

                @elseif(Auth::user()->name == 'Cedric')
                <ul class="dropdown-menu">
                  <li><a href="{{url('/bewerken')}}">Bewerken</a></li>
                </ul><!-- /.dropdown-menu -->
                @endif
              </li><!-- /.dropdown -->


              <li class="dropdown">
                <a href="{{url('/contact')}}" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
              </li><!-- /.dropdown -->

              @if (Auth::guest())
              <li class="dropdown">
                <a href="{{url('/login')}}" class="dropdown-toggle" data-toggle="dropdown">Inloggen</a>
              </li><!-- /.dropdown -->
              @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
              @endif

            </ul><!-- /.nav -->

            <!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->

          </div><!-- /.container -->
        </div><!-- /.navbar-collapse -->
      </div><!-- /.yamm -->
    </div><!-- /.navbar -->
  </header>

    <!-- content -->
      @yield('content')



<footer class="dark-bg">
  <div class="container inner">
    <div class="row">

      <div class="col-md-3 col-sm-6 inner">
        <h4>Wie zijn we?</h4>
        <a href="index.html"><img class="logo img-intext" src="assets/images/logo-white.svg" alt=""></a>
        <p>Jiu-Jitu Akademie Humbeek biedt onderwijs, training en de mogelijkheid tot het deelnemen aan wedstrijden in Jiu-Jitsu. Deze budovorm kan bij de vereniging worden beoefend als pedagogisch spel, als sport, als zelfverdediging en als beweging culturele activiteit.</p>
        <a href="about.html" class="txt-btn">Meer over ons</a>
      </div><!-- /.col -->

      <div class="col-md-3 col-sm-6 inner">
        <h4>Recent</h4>

        <div class="row thumbs gap-xs">

          <div class="col-xs-6 thumb">
            <figure class="icon-overlay icn-link">
              <a href="#"><img src="assets/images/art/recent01.jpg" alt=""></a>
            </figure>
          </div><!-- /.thumb -->

          <div class="col-xs-6 thumb">
            <figure class="icon-overlay icn-link">
              <a href="#"><img src="assets/images/art/recent02.jpg" alt=""></a>
            </figure>
          </div><!-- /.thumb -->

          <div class="col-xs-6 thumb">
            <figure class="icon-overlay icn-link">
              <a href="#"><img src="assets/images/art/recent03.jpg" alt=""></a>
            </figure>
          </div><!-- /.thumb -->

          <div class="col-xs-6 thumb">
            <figure class="icon-overlay icn-link">
              <a href="#"><img src="assets/images/art/recent04.jpg" alt=""></a>
            </figure>
          </div><!-- /.thumb -->

        </div><!-- /.row -->
      </div><!-- /.col -->


      <div class="col-md-3 col-sm-6 inner">
        <h4>Neem contact op</h4>
        <p>Mail, bel of schrijf ons.</p>
        <ul class="contacts">
          <li><i class="icon-location contact"></i> Meiskensbeekstraat 43, 1851 Humbeek</li>
          <li><i class="icon-mobile contact"></i> 02/269.45.09</li>
          <li><a href="#"><i class="icon-mail-1 contact"></i> jiu.jitsu.humbeek@gmail.com</a></li>
        </ul><!-- /.contacts -->
      </div><!-- /.col -->

      <div class="col-md-3 col-sm-6 inner">
        <h4>Blijf op de hoogte</h4>
        <p>Weet je graag als eerste op de hoogte zijn van de allerlaatste nieuwtjes, schrijf je dan in op onze nieuwsbrief.</p>
        <form id="newsletter" class="form-inline newsletter" role="form">
          <label class="sr-only" for="exampleInputEmail">Email adres</label>
          <input type="email" class="form-control" id="exampleInputEmail" placeholder="Vul je email adres in">
          <button type="submit" class="btn btn-default btn-submit">Inschrijven</button>
        </form>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- .container -->

  <div class="footer-bottom">
    <div class="container inner">
      <p class="pull-left">© 2017 JJAH. All rights reserved.</p>
    </div><!-- .container -->
  </div><!-- .footer-bottom -->
</footer>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}})"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easytabs.min.js')}}"></script>
<script src="{{asset('assets/js/viewport-units-buggyfill.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<script>
  /*===================================================================================*/
  /*	GOOGLE MAPS (JAVASCRIPT API)
  /*===================================================================================*/

  function initMap() {
    var mapOptions = {
        center				: new google.maps.LatLng(50.970768,4.386903),
        zoom				: 16,
        disableDefaultUI	: true,
        scrollwheel			: false
      },
      map = new google.maps.Map(document.getElementById('map'), mapOptions);
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsThTiX71-TukkCYpgMYU90rcC347Ax90&callback=initMap"></script>


</body>
</html>
