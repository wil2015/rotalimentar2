<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Rotalimentar</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="agricultura, consultoria, vendas, alimentos, importacao, exportacao" name="keywords">
  <meta content="Uma plataforma online de vendas para o mercado interno, exportação, importação, consultoria e marketing. Aberta a todos as empresas da área alimentar." name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="Rotalimentar">
  <meta property="og:image" content="">
  <meta property="og:url" content="http://rotalimentar.com">
  <meta property="og:type" content="agricultura.alimentos" />
  <meta property="og:site_name" content="Rotalimentar">
  <meta property="og:description" content="Uma plataforma online de vendas para o mercado interno, exportação, importação, consultoria e marketing. Aberta a todos as empresas da área alimentar.">

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
   

      <style type="text/css">

    .gallery

    {

        display: inline-block;

        margin-top: 20px;

    }

    .close-icon{

    	border-radius: 50%;

        position: absolute;

        right: 5px;

        top: -10px;

        padding: 5px 8px;

    }

    .form-image-upload{

        background: #e8e8e8 none repeat scroll 0 0;

        padding: 15px;

    }

    #produtos{
      background-color: lightblue;
      padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 400px;
    padding-left: 80px;
      
    }
    a.list-group-item {
    height:auto;
    min-height:220px;
    }
    a.list-group-item.active small {
        color:#fff;
    }
    .stars {
        margin:20px auto 1px;    
    }

   .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align:center;
  cursor: default;
}
.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: transperent;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect:hover .overlay {
  background-color: rgba(255, 255, 255);
}
.hovereffect img {
  display: block;
  position: relative;
}
.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: right;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  -webkit-transform: translateY(90px);
  -ms-transform: translateY(90px);
  transform: translateY(90px);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(5px);
  -ms-transform: translateY(5px);
  transform: translateY(5px);
  margin:0px;
}

.hovereffect p.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #000;
  border: 1px solid #fff;
  background-color: yellow;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  font-weight: normal;
  margin: 7px;
}

.hovereffect:hover p.info {
  opacity: 0.8;
  filter: alpha(opacity=100);
  -webkit-transform: scale(0.9);
  -ms-transform: scale(0.9);
  transform: scale(0.9);
}

.hovereffect p.info:hover {
  box-shadow: 0 0 5px #fff;
}


</style>

  
  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
   
</head>

<body >

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

        <h1>Bem vindo a Rotalimentar</h1>
        <h2>Nós auxiliamos <span class="rotating">Fornecedores, Compradores</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Quem Somos</a>
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
     <!--     <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>  -->
          <li><a href="#contact">Contate-nos</a></li>
          <li class="menu-has-children"><a href="https://plataformarotalimentar.top">Marketplace</a>
            <!--    <ul>
                  <li><a href="">Em Construçãos</a></li>
                  <li><a href="#">Compradores</a></li>
                  <li><a href="">Serviços</a></li>
                   <li><a href="">Mercado Futuro</a></li>  
                </ul>  -->
          </li>
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
  @yield('produtosnnnnn')
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
  
 
  <!--==========================
  Team Section
  ============================-->

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
