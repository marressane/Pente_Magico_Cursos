<!DOCTYPE html>
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
</html><?php

require_once ("conexao.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$duracao = $_POST['duracao'];
$lugar = $_POST['local'];
$lotacao = $_POST['lotacao'];
$data- $_POST['resumida']

$sql = "INSERT INTO 
            usuario (nome, email, senha, perfil_cod)
            VALUES
            ('$nome', '$email', '$senha', $perfil)
        ";
$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:../index.php");
}


