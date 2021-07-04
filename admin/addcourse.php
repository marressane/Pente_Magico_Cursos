

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novo Curso</title>
    <?php include ('menu/menuSuperior.php'); ?>

</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="page-header">
                <h2>Adicionar Novo Curso</h2>
            </div>
           
            <form action="insert-process.php" method="post">
                <div class="form-group">
                    <label>Nome do Curso</label>
                    <input type="text" name="nome" class="form-control" required="">
                </div>                        
                <div class="form-group col-md-6">
                    <label>Preço</label>
                    <input type="number" name="preco" class="form-control"  placeholder="ex: 10000" required=""> <strong>MZN</strong>
                </div>
               
            <div class="form-group col-md-6">
           
            <label for="">Duracao</label><br>
            <input type="text" name="duracao" class="form-control" placeholder="ex: 2 Meses/3 Semanas/ 5 Dias"><br>
            </div>

            <div class="form-group col-md-6">
            <label for="">Lotacao</label><br>
            <input type="text" name="lotacao" class="form-control" placeholder="full description">
            </div>

            <div class="form-group col-md-6">
            <label for="">Lugar</label>
            <input type="text" name="local" class="form-control" placeholder="full description">
            </div>

            <div class="form-group col-md-6">
            <label for="">Data de inicio</label>
            <input type="date" name="data-inicio" class="form-control" placeholder="full description"><br>
            </div><br>

            <div class="form-group col-md-8">
            <label for="">Descricao resumida:</label><br>
            <textarea name="" id="" cols="35" rows="5"></textarea>
            </div>

            <div class="form-group col-md-12">
            <label for="">Descricao detalhada</label><br>
            <textarea name="" id="" cols="30" class="form-control"  rows="10"></textarea>
            </div>

            <div class="form-group col-md-12">
                <input type="submit" class="btn btn-primary" name="submit" value="save">
              <div>  
            </form>
            <br>
            <hr>
            <hr>
        </div>
    </div>        
</div>
</body>
</html>