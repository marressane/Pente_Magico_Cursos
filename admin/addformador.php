

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novo Formador</title>
  

</head>
<body>
<?php include ('menu/menuSuperior.php'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="page-header">
                <h2>Adicionar Novo Formador</h2>
            </div>
           
            <form action="addformador-process.php" method="post">
                <div class="form-group">
                    <label>Nome do Formador</label>
                    <input type="text" name="nomeformador" class="form-control" required="">
                </div> 

                <div class="form-group">
                    <label>Especialidade</label>
                
                    <div class="col-sm-6">
					  <select name="especialidade" class="form-control" id="cor">
					      <option value="">Selecionar</option>
						  <option value="Penteados">Penteados</option>
						  <option value="Maquilhagem">Maquilhagem</option>
						  <option value="Saude Capilar">Saude Capilar</option>
                          <option value="Manicure e Pedicure">Manicure & Pedicure</option>							  
						  
			            </select>
					</div>

                </div>
                <br>
               
            <div class="form-group">
            <label for="">Endereço</label><br>
            <input type="text" name="endereco" class="form-control" placeholder="full description"><br>
            </div>
            
            
            <div class="form-group">
					<label for="cor" class="col-sm-5 control-label">Cidade/Provincia/Distrito</label>
					<div class="col-sm-6">
					  <select name="cidade" class="form-control" id="cor">
					  <option value="">Selecionar</option>
						  <option value="Matola">Matola</option>
						  <option value="Maputo">Maputo</option>
						  <option value="Boane">Boane</option>
                          <option value="Inhambane">Inhambane</option>							  
						  <option value="Beira">Beira</option>
                          <option value="Nampula">Nampula</option>
			
						  
						</select>
					</div>
				  </div>
<br><br>
        
                  <div class="form-group">
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-control" placeholder="full description"><br>
            </div>


            <div class="form-group">
            <label for="">Telefone</label><br>
            <input type="text" name="telefone" class="form-control" placeholder="full description" required=""><br>
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