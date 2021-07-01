

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novo Formando</title>
    <?php include ('menu/menuSuperior.php'); ?>

</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Adicionar Novo Formando</h2>
            </div>
           
            <form action="add-formando-process.php" method="post">
                <div class="form-group">
                    <label>Nome do Formando</label>
                    <input type="text" name="nomeformando" class="form-control" required="">
                </div>                        
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" required="">
                </div>
               
            <div class="form-group">
            <label for="">Cidade</label><br>
            <input type="text" name="cidade" class="form-control" placeholder="full description"><br>
            <div class="form-group">

            <label for="">Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="full description">
            </div>
            </div>

            <div class="form-group">
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-control" placeholder="full description">
            </div>

            

    


                <input type="submit" class="btn btn-primary" name="submit" value="save">
                
            </form>
            <br>
            <hr>
            <hr>
        </div>
    </div>        
</div>
</body>
</html>