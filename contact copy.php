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
    
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      
      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      
      /* Set a style for all buttons */
      button {
        background-color: #3478b8;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }
      
      button:hover {
        opacity: 0.8;
      }
      
      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }
      
      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }
      
      img.avatar {
        width: 40%;
        border-radius: 50%;
      }
      
      .container {
        padding: 16px;
      }
      .login-container{
width: 100%;
padding: 16px;
      }
      
      span.psw {
        float: right;
        padding-top: 16px;
      }
      
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
      }
      
      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }
      
      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }
      
      .close:hover,
      .close:focus {
        color: rgb(36, 123, 194);
        cursor: pointer;
      }
      
      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }
      
      @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
      }
        
      @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
      }
      
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
      }
      </style>
    

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
                      <li><a href="#"><span class="fa fa-whatsapp"></span></a></li>
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

  <!-- header -->
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

  
  <!-- Start BreadCrumb -->
  
   
    <section id="mu-page-breadcrumb"> 
      <div class="container">
          <div class=" row">
         <div class="col-md-12">

               <div class="mu-page-breadcrumb-area"><h2>Contactos</h2>
               <ol class="breadcrumb">

                <li> <a href="index.php">Home</a></li>
                <li class="active"><a href="">Contacto</a></li> 
               </ol>
      </div>
          </div>
      </div>
      </div>
    </section> 
  
      
  <!-- Close  BreadCrumb --> 

  <!-- Start Contact -->
<section id="mu-contact">
  <div class=" container">
     <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

                <div class=" mu-title">
                    <h2>Entre em contacto</h2>
                  <p>  Não exite, pode entrar em contacto para informações e esclarecimento</p>
                   </div>

                   <!-- Contact Form -->
                   <div class="mu-contact-content">           
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-contact-left">

                              <form class="contactform" method="POST" action="">

                              <p>
                                <label for="">Nome completo <span class="required">*</span></label> 
                                <input type="text" name="nome" placeholder="Digite seu nome "><br>
                              </p>
                              
                              <p> 
                                <label for="">Email <span class="required">*</span></label> 
                                <input type="text" name="email" placeholder="Digite o seu email(ex: seuemail@email.com) ">
                                      </p>

                                <p>
                                  <label for=""> Telefone <span class="required">*</span></label>
                                  <input type="text" name="telefone" placeholder="Digite o seu numero ">
                                </p>

                                <p>
                                  <label for="">Assunto<span class="required">*</span></label> 
                                  <input type="text" name="assunto" placeholder="Digite o Assunto"><br>
                                </p>
                                
                              <p class="comment-form-comment">
                             
                                      <label for="comment">Mensagem </label> 
                                      <textarea name="comment" id="" aria-required="true" placeholder="Escreve aqui Mensagem "  rows="8" cols="45"></textarea> 
                                    </p>
                  
                         

                           <!-- <p class="form-submit">  
                             <input type="submit" name="send" value="Enviar" class="mu-pot-btn">
                            </p> -->
                            <p class="form-submit">
                            <input type="submit" value="Enviar" class="mu-post-btn" name="submit">
                            </p> 

                          </form>

                        </div>
                        </div>


                         <!-- google maps  -->
                   
                      <div class="col-md-6">
                          <div class="mu-contact-right">

                          <p>  <strong>Endereço:</strong> Avenida Mao-tse-tung, Bairro Central nr 1021, Maputo-MZ</p>

                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3587.209650274916!2d32.581096014679545!3d-25.961163760440684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69baab0de35c5%3A0x93f3ded6670d56a3!2sMercado%20Janete!5e0!3m2!1spt-BR!2smz!4v1624047381411!5m2!1spt-BR!2smz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            

                          </div>
                       </div> 
                   <!-- Contact Form -->

          </div>
        </div>
     </div>
  </div>
</section>


  <!-- End  Contact -->

 
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
</php>