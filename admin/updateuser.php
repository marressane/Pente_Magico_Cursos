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
<body>
  

<?php //Menu Superior 
include ('menu/menuSuperior.php'); ?>

<div class="container mt-2">

  <div class="page-header">
      <h2>Actualizar Usuario</h2>
  </div>

    <div class="row">
        <div class="col-md-6">
            <?php


            include 'conexao.php';

            $query = "SELECT * FROM usuarios WHERE id_usuario='" . $_GET["id_usuario"] . "'"; // Fetch data from the table course using id

            $result=mysqli_query($con,$query);

        $user = mysqli_fetch_assoc($result);


            ?>
            <form action="update-user-process.php" method="POST">

              <input type="hidden" name="id_usuario" value="<?php echo $_GET["id_usuario"]; ?>" class="form-control" required="">

              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo$user['nome']; ?>" required="">
              </div>                

              <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senha" class="form-control" value="<?php echo$user['senha']; ?>" required="">
              </div>              
              
              <div class="form-group">
                <label for="">Nome Completo</label>
                <input type="text" name="nomecompleto" class="form-control" value="<?php echo$user['nomecompleto']; ?>" required="">
              </div>

            

              <div class="form-group">
                <label for="">Cargo</label>
                <input type="text" class="form-control" value="<?php echo$user['cargo']; ?>"  readonly>
              </div>
              <div class="form-group">
					<label for="cor" class="col-sm-3 control-label">Novo Cargo</label>
					<div class="col-sm-6">
					  <select name="cargo" class="form-control" id="cor">
					  <option value="">Selecionar</option>
						  <option value="Gerente">Gerente</option>
						  <option value="Formador">Formador</option>
						  <option value="Assistente">Assistente</option>						  
						  <option value="Coordenador">Coordenador</option>
			
						  
						</select>
					</div>
				  </div>


<br>
<br>

<br>
<br>


              <button type="submit" class="btn btn-primary" value="submit">Actualizar</button>

            </form>
        </div>
    </div>        
</div>

</body>
</html>