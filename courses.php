
<?php

require_once("modal-login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Pente Magico| Cursos</title>

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
                      <li><a href="#"><span class="fa fa-user"></span> Registrar-se</a></li>
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
          <a class="navbar-brand" href="index.html"><span>Pente Mágico</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li><a href="index.php">Home</a></li> 
          <li class="active"><a href="courses.php">Cursos</a></li>            
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
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Nossos Cursos</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Cursos</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Inscrever-se</Inscrever-se></a>
                          <span><i class="fa fa-clock-o"></i>90 Dias</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Curso de Penteados</a></h4>
                        <p>Neste curso, voce ira aprender tecnicas para fazer penteados, desde os casuais ate
                     aos cerimoniais com destaque para Noivas.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                          <span class="mu-course-price" href="#">MZN5000.00</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Inscrever-se</a>
                          <span><i class="fa fa-clock-o"></i>60DIas</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Curso de Maquilhagem</a></h4>
                        <p>.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                          <span class="mu-course-price" href="#">MZN5000.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Inscrever-se</a>
                          <span><i class="fa fa-clock-o"></i>90Dias</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Tratamento facial</a></h4>
                        <p>Neste curso, voce ira aprender tecnicas para fazer penteados, desde os casuais ate aos cerimoniais com destaque para Noivas.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                          <span class="mu-course-price" href="#">MZN5000.00</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Inscrever-se</a>
                          <span><i class="fa fa-clock-o"></i>60DIas</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Curso de Trancas Africanas </a></h4>
                        <p>Neste curso, voce ira aprender tecnicas para fazer penteados, desde os casuais ate aos cerimoniais com destaque para Noivas.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                          <span class="mu-course-price" href="#">MZN5000.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Inscrever-se</a>
                          <span><i class="fa fa-clock-o"></i>90Dias</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Curso de Dreadlocks</a></h4>
                        <p>Neste curso, voce ira aprender tecnicas para fazer penteados, desde os casuais ate aos cerimoniais com destaque para Noivas.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                          <span class="mu-course-price" href="#">MZN5000.00</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Inscrever-se</a>
                          <span><i class="fa fa-clock-o"></i>60DIas</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Curso de Manicure e Pedicure</a></h4>
                        <p>Neste curso, voce ira aprender tecnicas para fazer penteados, desde os casuais ate aos cerimoniais com destaque para Noivas.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="course-detail.php">Detalhes</a>
                          <span class="mu-course-price" href="#">MZN5000.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start course pagination -->
                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span class="fa fa-angle-left"></span> Prev 
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                         Next <span class="fa fa-angle-right"></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end course pagination -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categorias</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Penteados</a></li>
                      <li><a href="">Maquilhagem</a></li>
                      <li><a href="">Dreadlocks</a></li>
                      <li><a href="">Manicure & Pedicure</a></li>
                      <li><a href="">Tranças Africanas</a></li>
                      <li><a href="">Tratamento Facial</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Cursos Populares</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Dreadlocks</a></h4>                      
                          <span class="popular-course-price">MZN10.000</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Maquilhagem</a></h4>                      
                          <span class="popular-course-price">MZN5.000</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Penteado de Noivas</a></h4>                      
                          <span class="popular-course-price">MZN3000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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
                  <li><a href="">Minha Conta</a></li>
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
                  <li><a href="#">Curso 1</a></li>
                  <li><a href="">Curso 1</a></li>
                  <li><a href="">Curso 1</a></li>
                  <li><a href="">Curso 1</a></li>
                  <li><a href="">Curso 1</a></li>                 
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
                  <p>Endereço:</p>
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