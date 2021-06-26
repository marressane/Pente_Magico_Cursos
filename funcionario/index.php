<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Log in</title>

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

  
  <!--formulario login-->

<div class="container">
      <div class="row">
        <div class="col-md-6">
         
  <style type="text/css">
	.bar{
		width: 300px;
		height: 400px;
			background-color: #aaa;
			background-image: url(Imagens/);

			font-size: 20px;
			margin-left: 40%;
			margin-top: 15%;
			border-radius: 40px 0px;
			text-align: center;
			padding: 10px;
			display: 5s;
	}

	header{
		color: white;
		font-size:  30px;
		text-align: left;
		padding: 10px;
		background-color:#e594f5 ;
	}

input{
	height: 30px;
	width: 200px;
}

</style>

<body style="background-color: #e594f5;">



<header>LOG IN</header>
<form method="POST" action="#">


    Nome do funcionario:<br>
	<input type="text" name="nome_funcionario" placeholder="digite seu nome"><br>
	Senha:<br>
	<input type="password" name="senha" placeholder="digite a sua senha"><br>

	<input type="submit" name="send" value="Seguinte">

</form>
</div>
</div>
</div>