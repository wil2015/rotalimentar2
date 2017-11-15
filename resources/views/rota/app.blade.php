<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Rota Alimentar</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="{{ asset ('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="{{ asset ('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('lib/animate-css/animate.min.css')}}" rel="stylesheet">
  
    <!-- Main Stylesheet File -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">


  
  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

@section('sidebar')
         <p>   This is the master sidebar. </p>
        @show
  @yield('navigation')

  <!--==========================
  About Section
  ============================-->
  @yield('nos')
  

  <!--==========================
  Services Section
  ============================-->
  @yield('servicos')
  
  @yield('sub')

  @yield('portifolio')
  <!--==========================
  Testimonials Section
  ============================-->
  @yield('testemunhas')

  <!--==========================
  Team Section
  ============================-->
  @yield('equipe')
  <!--==========================
  Contact Section
  ============================-->
  @yield('form')
  <!--==========================
  Footer
============================-->
@yield('rodape')


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
 <!-- Required JavaScript Libraries -->
 <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
 <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
 <script src="{{ asset('lib/morphext/morphext.min.js') }}"></script>
 <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
 <script src="{{ asset('lib/stickyjs/sticky.js') }}"></script>
 <script src="{{ asset('lib/easing/easing.js') }}"></script>

 <!-- Template Specisifc Custom Javascript File -->
 <script src="{{ asset('js/custom.js') }}"></script>

 <script src="{{ asset('contactform/contactform.js') }}"></script>
 
  

</body>

</html>
