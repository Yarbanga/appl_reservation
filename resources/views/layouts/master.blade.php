<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
 <body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> 
        <!-- Monday - Saturday, 8AM to 10PM -->
        <script type="text/javascript">
          var ladate=new Date()
          document.write("Nous sommes le : ");
          document.write(ladate.getDate()+"/"+(ladate.getMonth()+1)+"/"+ladate.getFullYear())
          </script>
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Nos contacts (+226)57863502/76140233
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="#" class="logo mr-auto"><img src="assets/img/logo-simplon.png" alt=""></a>    
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('accueil')}}">Accueil</a></li>
          <li><a href="{{route('register')}}">Inscription</a></li>
          <li><a href="{{route('login')}}">Connexion</a></li>
          <li><a href="{{route('reserve')}}">Reservation</a></li>         
        </ul>
      </nav>      
    </div>
  </header><!-- Fin Header -->
  <!-- ======= Hero Section ======= -->
  

    <main id="main">
    <!-- ======= Counts Section ======= -->
    <div class="py-5 mt-5 ">
          @yield('contenu')
    </div>
  
    </main><!-- Fin #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
   
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Simplon</span></strong>.Nos meilleur offre
      </div>      
    </div>
  </footer><!--Fin Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>
 <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.j')}}s"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>