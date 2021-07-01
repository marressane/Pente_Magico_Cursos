<?php
if(count($_POST)>0)
{    
     include 'conexao.php';
     $nomecurso = $_POST['nome'];
     $preco = $_POST['preco'];
     $lotacao = $_POST['lotacao'];
     $duracao = $_POST['duracao'];
     $datainicio = $_POST['datainicio'];
     $descricao = $_POST['descricao'];
     $detalhes = $_POST['descricao'];
 
 
     $query = "INSERT INTO cursos (nome, preco, lotacao, duracao,)
     VALUES ('$fname','$lname','$email')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: cursos.php?msg=".$msg."");
?>





