


<?php 

// Auth 
if(!isset($_SESSION)){
    session_start();
}

$id_user = $_SESSION['idUsuario'];

if(!isset ($_SESSION['idUsuario'])) {
    header('Location: login.php');
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">

    	<title>Home</title>

    	<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
	
		<!-- FullCalendar -->
		<link href='css/fullcalendar.css' rel='stylesheet' />
		<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />

    	<!-- Custom CSS Calendario -->
    	<link href='css/calendar.css' rel='stylesheet' />
</head>
<?php //Menu Superior 
include ('menu/menuSuperior.php'); ?>



<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<body>


    
</body>
</html>