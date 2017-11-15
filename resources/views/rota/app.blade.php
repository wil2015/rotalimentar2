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

  @section('navigation')
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class=""  src="{{ asset('img/logo.png') }}" alt="Imperial">
        </div>

        <h1>Benvindo a Rota Aliemntar</h1>
        <h2>Nos ajudamos <span class="rotating">Compradores, Vendedores, Certificadores</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Iniciando</a>
          <a href="#services" class="btn-services">Nossos Serviços</a>
        </div>
      </div>
    </div>
  </section>
  
  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Quem Somos</a></li>
          <li><a href="#services">Nossos Serviços</a></li>
          <li><a href="#portfolio">Parceiros</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contatenos</a></li>
          <!--
          <li class="menu-has-children"><a href="">Drop Down</a>

            
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      -->
      </nav>
    

      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
  @show
 
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
