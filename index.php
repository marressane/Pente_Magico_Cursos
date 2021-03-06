<?php

require_once("modal-login.php");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Pente Magico| Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

   

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>info@pentemagico.co.mz</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(+258) 841068822</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                     
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                      <li onclick="document.getElementById('id01').style.display='block'" ><a href="#"><span  style="width: 60px;" class="fa fa-user"></span> Login</a></li>
                      <li><a href="#"><span class="fa fa-user-plus"></span> Registrar-se</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><span>Pente M??gico</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li class="active"><a href="index.php">Home</a></li> 
            <li><a href="courses.php">Cursos</a></li>            
            <li><a href="gallery.php">Galeria</a></li>
            <li><a href="contact.php">Contactos</a></li>             
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/1.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
      <h4>Bem Vindo ao Pente M??gico </h4>
        <span></span>
        <h2>Sua escola de beleza</h2>
        <p>Aprender para Empreender...</p>
        <a href="#" class="mu-read-more-btn">Ler Mais</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/2.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Inscreva-te e Reserva a tua vaga</h4>
        <span></span>
        <h2>Fa??a a Sua Incri????o nos Nossos Cursos</h2>
    <p>Garanta a sua vaga na melhor escola de Cabeleireiro em Mo??ambique</p>
        <a href="#" class="mu-read-more-btn">Incrisver-se</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/3.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
      <h4>Ganhe a sua Magia</h4>
        <span></span>
        <h2>Seja M??gico da Beleza Conosco</h2>
        <p>Venha aprender com os melhores, e torne-se um deles...</p> 
    
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Cursos bem elaborados</h3>
              <p>Temos os cursos que voce procura para tornar-se um profissional de beleza e com agenda super lotada</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Professores Qualificados</h3>
              <p>O Pente M??gico dispoe de formadores especialistas em cada um dos cursos oferecidos, com uma vasta experiencia no mundo do glamour </p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Melhores Condi????es</h3>
              <p>Temos um espaco personalizado para as aulas, climatizado e com todas o equipamento para que as suas aulas sejam excelentes</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                  <h2>Sobre Pente M??gico</h2>             
                  </div>
                  <!-- End Title -->
                  <p> PENTE MAGICO e um centro de formacao em cabeleireiro, fundado em 2012, conta actualmente com mais de 100 profissionais formados, ja firmes no mercado e com um sucesso inquestionavel no mundo do glmour. </p>
                <p> No inicio tinha apenas duas trabalhadodoras, actualmente conta com 10 trabalhadores altamente qualificados e preparados para exercer qualquer actividade no mundo da beleza e estetica. O nosso grupo alvo sao homens e mulheres, sobretudo raparigas na tenra idade, que tenham garra e vontade de aprender para empreender, criando deste modo oportunidades </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https:" target="mutube-video">
                  <img src="assets/img/about-us.jpg" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  

  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
            <h2>Nossos Cursos</h2>
              <p>Temos os melhores cursos na area de Beleza e Estetica:</p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                    <a href="#">Inscrever-se</a>
                      <span><i class="fa fa-clock-o"></i>90Dias</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                  <h4><a href="#">Curso de Penteados</a></h4>
                    <p>Neste curso, voce ira aprender tecnicas para fazer penteados, desde os casuais ate
                       aos cerimoniais com destaque para Noivas.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                      <span class="mu-course-price" href="#">MZN 10.000</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                    <a href="#">Inscrever-se</a>
                      <span><i class="fa fa-clock-o"></i>75Dias</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                  <h4><a href="#">Curso de Maquilhagem</a></h4>
                    <p>Este curso e direcionado a quem queira ser Artista de make up, ensinamos desde a maquilhagem basica ate para eventos...</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                      <span class="mu-course-price" href="#">MZN 5000</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                    <a href="#">Inscrever-se</a>
                      <span><i class="fa fa-clock-o"></i>45Dias</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                  <h4><a href="#">Curso de Tratamento Facial</a></h4>
                    <p>No curso e Tratamento Facial, voce vai conhecer a seu tipo de pele, bem como conhecer os cuidados a
                       ter</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                      <span class="mu-course-price" href="#">MZN 2000</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                    <a href="#">Inscrever-se</a>
                      <span><i class="fa fa-clock-o"></i>3 Semanas</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                  <h4><a href="#">Curso de Manicure e pedicure</a></h4>
                    <p>No curso de manicure e Pedicure voce aprendera a cuidar das maos e dos pes, colocar e fazer manutencao de unhas.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                      <span class="mu-course-price" href="#">MZN 5000</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                    <a href="#">Inscrever-se</a>
                      <span><i class="fa fa-clock-o"></i>75Dias</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                  <h4><a href="#">Curso de Dreadlocks</a></h4>
                    <p>Aqui voce vai aprender a iniciar dreads, com gel bem como com croche, </p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                      <span class="mu-course-price" href="#">MZN 4000</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                    <a href="#">Inscrever-se</a>
                      <span><i class="fa fa-clock-o"></i>45Dias</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                  <h4><a href="#">Trancas</a></h4>
                    <p>Neste curso voce vai aprender a fazer diversas trancas, com cabelo e meixas.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                      <span class="mu-course-price" href="#">MZN 5000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->



  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <h4>Links</h4>
                <ul>
                  <li><a href="admin/index.php">Minha Conta</a></li>
                  <li><a href="#">Sobre</a></li>
                  <li><a href="">Blog</a></li>
                  <li><a href="">Cursos</a></li>
         
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <h4>Cursos</h4>
                <ul>
                  <li><a href="#"> Penteados</a></li>
                  <li><a href="">Maquilhagem</a></li>
                  <li><a href="">Manicure e Pedicure</a></li>
                  <li><a href="">Tratamento Facial</a></li>
                  <li><a href="">Dreadlocks</a></li>                 
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <h4>News letter</h4>
                <p>Subscreva-te e fique a par da novidade e ofertas</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscrever</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <h4>Contactos</h4>
                <address>
                  <p>Endere??o:</p>
                  <p>Phone: (+258) 841068822 </p>
                  <p>Website: www.pentemagico.co.mz</p>
                  <p>Email: info@pentemagico.co.mz</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
        <p>&copy; All Right Reserved. Designed by <a href="http://www.pentemagico.co.mz/" rel="nofollow">Angela Maressane</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>