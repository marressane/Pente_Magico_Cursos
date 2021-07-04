

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novo Usuario</title>
    <?php include ('menu/menuSuperior.php'); ?>

</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="page-header">
                <h2>Adicionar Novo Usuario</h2>
            </div>
           
            <form action="adduser-process.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required="">
                </div>                        
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" required="">
                </div>
               
            <div class="form-group">
            <label for="">Nome Completo</label><br>
            <input type="text" name="nomecompleto" class="form-control" placeholder="full description"><br>
            <div class="form-group">
            
            
            <div class="form-group">
					<label for="cor" class="col-sm-2 control-label">Cargo</label>
					<div class="col-sm-10">
					  <select name="cargo" class="form-control" id="cor">
					  <option value="">Selecionar</option>
						  <option value="Gerente">Gerente</option>
						  <option value="Formador">Formador</option>
						  <option value="Assistente">Assistente</option>						  
						  <option value="Formador">Coordenador</option>
			
						  
						</select>
					</div>
				  </div>

        
            

    


                <input type="submit" class="btn btn-primary" name="submit" value="save">
                
            </form>
            <br>
            <hr>
            <hr>
        </div>
    </div>        
</div>


<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>