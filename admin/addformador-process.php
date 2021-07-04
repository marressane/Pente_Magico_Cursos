

<?php

if(count($_POST)>0)
{    
     include 'conexao.php';
     $nomeformador = $_POST['nomeformador'];
     $especialidade = ($_POST['especialidade']);
     $endereco = $_POST['endereco'];
     $cidade = $_POST['cidade'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
 
 
     $query = "INSERT INTO 
     formador (nomeformador, especialidade, endereco,  cidade, email, telefone)
     VALUES
     ('$nomeformador', '$especialidade', '$endereco', '$cidade', '$email', '$telefone') ";
 
     if (mysqli_query($con, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: formadores.php?msg=".$msg."");


?>