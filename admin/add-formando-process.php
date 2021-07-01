<?php
if(count($_POST)>0)
{    
     include 'conexao.php';
      $nome = $_POST['nomeformando'];
     $endereco = $_POST['endereco'];
     $cidade = $_POST['cidade'];
     $telefone = $_POST['telefone'];
     $email = $_POST['email'];
   
    
 
 
     $query = "INSERT INTO formando (nomeformando, endereco, cidade, telefone, email)
     VALUES ('$nome','$endereco','$cidade','$telefone','$email')";
 
     if (mysqli_query($con, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: formandos.php?msg=".$msg."");
?>



