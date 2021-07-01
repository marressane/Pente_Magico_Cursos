

<?php
if(count($_POST)>0)
{    
     include 'conexao.php';
     $user = $_POST['username'];
     $senha = sha1($_POST['senha']);
     $nomecompleto = $_POST['nomecompleto'];
     $cargo = $_POST['cargo'];
 
 
     $query = "INSERT INTO 
     usuarios (nome, senha, nomecompleto,  cargo)
     VALUES
     ('$user', '$senha', '$nomecompleto', '$cargo') ";
 
     if (mysqli_query($con, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: users.php?msg=".$msg."");
?>