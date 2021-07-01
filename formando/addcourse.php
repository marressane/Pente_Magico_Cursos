<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="processa.php">


<label for="">Nome do curso:</label><br>
<input type="n" name="nome-curso" placeholder="name"><br>



<label for="">Preco:</label><br>
<input type="number" name="preco" placeholder="price"><br>

<label for="">duracao</label><br>
<input type="text" name="duracao" placeholder="full description"><br>

<label for="">lotacao</label><br>
<input type="text" name="lotacao" placeholder="full description"><br>

<label for="">lugar</label>
<input type="text" name="local" placeholder="full description"><br>

<label for="">data de inicio</label>
<input type="data" name="data-inicio" placeholder="full description"><br>

<label for="">Descricao resumida:</label><br>
<textarea name="" id="" cols="30" rows="10"></textarea><br>

<label for="">Descricao detalhada</label><br>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>

<input type="submit" name="send" value="Submeter o Pedido">

</form>
</body>
</html>


 -->

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
        <div class="col-md-12">
            <div class="page-header">
                <h2>Adicionar Novo Curso</h2>
            </div>
           
            <form action="insert-process.php" method="post">
                <div class="form-group">
                    <label>Nome do Curso</label>
                    <input type="text" name="nome" class="form-control" required="">
                </div>                        
                <div class="form-group">
                    <label>Preço</label>
                    <input type="text" name="preco" class="form-control" required="">
                </div>
               
            <div class="form-group">
            <label for="">Duracao</label><br>
            <input type="text" name="duracao" class="form-control" placeholder="full description"><br>
            </div>

            <div class="form-group">
            <label for="">Lotacao</label><br>
            <input type="text" name="lotacao" class="form-control" placeholder="full description">
            </div>

            <div class="form-group">
            <label for="">Lugar</label>
            <input type="text" name="local" class="form-control" placeholder="full description">
            </div>

            <div class="form-group">
            <label for="">Data de inicio</label>
            <input type="date" name="data-inicio" class="form-control" placeholder="full description">
            </div>

            <div class="form-group">
            <label for="">Descricao resumida:</label><br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
            <label for="">Descricao detalhada</label><br>
            <textarea name="" id="" cols="30" class="form-control"  rows="10"></textarea>
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