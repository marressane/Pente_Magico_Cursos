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
          <a class="navbar-brand" href="index.php"><span>Pente Mágico</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li ><a href="index.php">Home</a></li> 
            <li><a href="courses.php">Cursos</a></li>            
            <li class="active"><a href="gallery.php">Galeria</a></li>
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
           <h2>Trabalho dos nossos alunos</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Galeria</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Galeria</h2>
            <p>Aprecie aqui alguns trabalhos feitos por nossa equipe de formador e nossos formandos</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top">              
              <ul>
                <li class="filter active" data-filter="all">Todas</li>
                <li class="filter" data-filter=".maquilhagem">Maquilhagem</li>
                <li class="filter" data-filter=".penteados">Penteados</li>
                <li class="filter" data-filter=".dreadlocks">Dreadlocks</li>
                <li class="filter" data-filter=".facial">Tratamento Facial</li>
                <li class="filter" data-filter=".mani-pedi">Manicure & pedicure</li>
                <li class="filter" data-filter=".trancas-afro">Trancas Africanas</li>

              </ul>.
            </div>
            <!-- End gallery menu -->

            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">

                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix maquilhagem">
                  <div class="mu-single-gallery">  

                    <div class="mu-single-gallery-item">

                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/1-teste.jpg"></a>
                      </div>

                      <div class="mu-single-gallery-info">

                        <div class="mu-single-gallery-info-inner">
                          <h4>Maquilhagem</h4>
                          <p>MAquilhagem turma 2020 </p>
                          <a href="assets/img/gallery/big/4.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                        
                      </div>                  
                    </div>

                  </div>
                </li>
                <!-- start single gallery image -->

                <li class="col-md-4 col-sm-6 col-xs-12 mix Penteados">
                  <div class="mu-single-gallery">  

                    <div class="mu-single-gallery-item">

                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/2.jpg"></a>
                      </div>

                      <div class="mu-single-gallery-info">

                        <div class="mu-single-gallery-info-inner">
                          <h4>Maquilhagem</h4>
                          <p>MAquilhagem turma 2020 </p>
                          <a href="assets/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                        
                      </div>                  
                    </div>

                  </div>
                </li>
 <!-- start single gallery image -->
               <li class="col-md-4 col-sm-6 col-xs-12 mix maquilhagem">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/3.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Tratamento Facial</h4>
                          <p>Tratamento Facial turma 2020</p>
                          <a href="assets/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div> 
                    </div>
                  </div>
               </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix facial">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/6.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>descripction</p>
                          <a href="assets/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix pentaados">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/7.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>decripction</p>
                          <a href="assets/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix dreadlocks">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/2.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>decripction</p>
                          <a href="assets/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix penteados">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/6.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>decripction</p>
                          <a href="assets/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix trancas-afro">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/7.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>decripction</p>
                          <a href="assets/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
                 <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix drealocks">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/8.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>decripction</p>
                          <a href="assets/img/gallery/big/8.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix mani-pedi">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/9.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>decripction</p>
                          <a href="assets/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
              </ul>            
            </div>
          </div>
          <!-- end gallery content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->
 

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
                <p>Subscreva-te e fique a par da novidade e ofertas</p>>
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

  <div id="id01" class="modal">
  
    <form class="modal-content animate" action="" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="" alt="Avatar" class="avatar">
      </div>
  
      <div class="login-container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
          
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
  
      <div class="login-container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>
  
  <script>
  // Get the modal
  var modal = document.getElementById('id01');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>





  
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