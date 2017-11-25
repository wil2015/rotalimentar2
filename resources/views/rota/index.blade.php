@extends('rota.app')

@section ('nos')
  <!--==========================
  About Section
  ============================-->

  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Conheçam a Rotalimentar</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">O seu parceiro para atividades voltadas ao agronegócio</p>
             
               
        </div>
      </div>
        <div class="row">
              <div class="col-md-6">
                  <div class="embed-responsive embed-responsive-16by9 ">
                      
                      <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/rSd-VWQGkvk" frameborder="0" allowfullscreen></iframe>
                  <!--   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->
                  </div>
              </div>                          
              <div class="col-md-6">  
                  <div class="embed-responsive embed-responsive-16by9">
                      
                      <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/aiO25Qq7n0Y" frameborder="0" allowfullscreen></iframe>
                  <!--   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->
                  </div>
              </div>
        </div>       
    </div>
    
    

   
  </section>
@endsection

@section('servicos')
  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nossos Serviços</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">O seu parceiro para atividades voltadas ao agronegócio</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="">Negócios</a></h4>
          <p class="service-description">Reunir Compradores e Vendedores Idoneos. Divulgação do seu produto em nosso Marketplace.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Controle de Pragas</a></h4>
          <p class="service-description"> Assistência em Biotecnologia, manejo e agricultura orgânica. De olho na agricultura sustentável.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Logística</a></h4>
          <p class="service-description">Qualidade e economia na entrega de seu produto</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="">Ecologicamente Correto</a></h4>
          <p class="service-description">Na busca de Certificações em agricultura e Sustentabilidade.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="">Bom Para todos</a></h4>
          <p class="service-description">Serviços de assessoria/consultoria para empresa solucionar problemas com pessoal de confiança e experiente</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="">Marketplace</a></h4>
          <p class="service-description">Uma Plataforma aberta à todos as empresas da área alimentar (humana e animal): Fazendas agrícolas ou pecuárias, industrias, multinacionais e comércio.</p>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('sub')
  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Assine nossas Noticiass</h3>
          <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="#">Assine</a>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('portifolio')
  <!--==========================
  Porfolio Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Parceiros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Alguns dos Nossos Colaboradores</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 hovereffect">
            <img src="img/parceiros/akifaz2.png"  class="img-thumbnail" alt=""  width="420" height="320">
            <div class="overlay">
                 <p class="info">Comercialização e fabricação da cor da tinta para automoveis ou qualquer outro metal.</p>
             </div>
            
        </div>

        <div class="col-md-3 hovereffect">
            <img src="img/parceiros/beta2.jpg"  class="img-thumbnail" alt="">
            <div class="overlay">
               <p class="info">Consultorias, projetos e equipamentos em gastrnomia. <a href="http://www.servcomex.com.br/">Site</a></p>
             </div>
        </div>

        <div class="col-md-3 hovereffect">
            <img src="img/parceiros/cengesa.jpg"  class="img-thumbnail" alt="">
             <div class="overlay">
               <p class="info">CENGESA – Valdo Pistorio Hugo Ferro ---- Autônomo Commodities</p>
             </div>
        </div>

        <div class="col-md-3 hovereffect">
            <img src="img/parceiros/ibecon.png"  class="img-thumbnail" alt="">
            <div class="overlay">

               <p class="info">Comunidade online de agricultores do Brasil.</p>
             </div>
         
        </div>

        <div class="col-md-3">
            <div class="hovereffect">
            <a href="https://www.dhnbtrade.com/" target="_blank">
                <img src="img/parceiros/DHN.jpg"  class="img-thumbnail" alt="Cinque Terre">
                <div class="overlay">
                  <p class="info">DHN - Comercialização de diversas commodities, principalmente açúcar para exportação e mercado interno.</p>
                </div>
            </a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="hovereffect">
              <img src="img/parceiros/JAT.jpg"  class="img-thumbnail" alt="Cinque Terre">
              <div class="overlay">
                <p class="info">JAT Comm - Comercialização de commodities e consultoria de novos negócios no mercado nacional e internacional.</p>
              </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="hovereffect">
            <img src="img/parceiros/ream.png"  class="img-thumbnail" alt="Cinque Terre">
             <div class="overlay">
                <p class="info">Serviços em RH e cursos direcionados ao agronegocio.</p>
              </div>
             </div>
        </div>

        <div class="col-md-3">
             <div class="hovereffect">
             <a href="http://www.suppliersabroad.com/" target="_blank">
                <img src="img/parceiros/Suppliers.png"  class="img-thumbnail" alt="Cinque Terre">
                <div class="overlay">
                   
                  <p class="info">Empresa Internacional especializada em comércio Global.</p>
                </div>
              </a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="hovereffect">
            <a href="http://www.servcomex.com.br/" target="_blank">
                <img src="img/parceiros/servconvex.png"  class="img-thumbnail" alt="Cinque Terre">
                <div class="overlay">
                  <p class="info">Empresa especializada em logística direcionada ao comércio exterior, seja importação e/ou exportação.</p>
                </p>
                </div>
              </a>
            </div>          
        </div>
         <div class="col-md-3">
            
               <div class="hovereffect">
                 <img src="img/parceiros/beto.png"  class="img-thumbnail" alt="Cinque Terre">
                
                  <div class="overlay">
                        <p class="info">Comercialização de mudas em geral.</p>
                  </div>
               </div>
                      
        </div>

        <div class="col-md-3">
             <div class="hovereffect">
                <img src="img/parceiros/gandini.jpeg"  alt="Cinque Terre" class="img-thumbnail">
                  <div class="overlay">
                       <p class="info"> Contabilidade e Assessoria Empresarial Advogado Ricardo Gandini (OAB/MS 15.209) Contador Sebastião Gandini.</p>
                  </div>
               </div>
        </div>

      </div>
    </div>
  </section>
@endsection

@section ('testemunhas')
  <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-1.jpg" alt=""></div>
            <h4>Saul Goodman</h4>
            <span>Lawless Inc</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection

@section('equipe')
  <!--==========================
  Team Section
  ============================-->
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nosso Time</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection

  @section ('form')

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contate Nos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Cadastre-se e teremos uma solução</p>
        </div>
      </div>

      <iframe
      id="JotFormIFrame-61617174583662"
      onload="window.parent.scrollTo(0,0)"
      allowtransparency="true"
      src="https://form.jotformz.com/61617174583662"
      frameborder="0"
      style="width: 1px;
      min-width: 100%;
      height:1399px;
      border:none;"
      scrolling="no">
    </iframe>
    <script type="text/javascript">
      var ifr = document.getElementById("JotFormIFrame-61617174583662");
      if(window.location.href && window.location.href.indexOf("?") > -1) {
        var get = window.location.href.substr(window.location.href.indexOf("?") + 1);
        if(ifr && get.length > 0) {
          var src = ifr.src;
          src = src.indexOf("?") > -1 ? src + "&" + get : src  + "?" + get;
          ifr.src = src;
        }
      }
      window.handleIFrameMessage = function(e) {
        var args = e.data.split(":");
        if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[2]); } else { iframe = document.getElementById("JotFormIFrame"); }
        if (!iframe)
          return;
        switch (args[0]) {
          case "scrollIntoView":
            iframe.scrollIntoView();
            break;
          case "setHeight":
            iframe.style.height = args[1] + "px";
            break;
          case "collapseErrorPage":
            if (iframe.clientHeight > window.innerHeight) {
              iframe.style.height = window.innerHeight + "px";
            }
            break;
          case "reloadPage":
            window.location.reload();
            break;
        }
        var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
        if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
          var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
          iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
        }
      };
      if (window.addEventListener) {
        window.addEventListener("message", handleIFrameMessage, false);
      } else if (window.attachEvent) {
        window.attachEvent("onmessage", handleIFrameMessage);
      }
      </script>

      <!--
      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
        -->
      </div>
    </div>
  </section>

@endsection  
@section('rodape')
  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

@endsection
  
