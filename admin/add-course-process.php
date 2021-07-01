
<?php
if(count($_POST)>0)
{    
     include '../conexao.php';
     $nomecurso = $_POST['nome'];
     $preco = $_POST['preco'];
     $lotacao = $_POST['lotacao'];
     $duracao = $_POST['duracao'];
     $datainicio = $_POST['datainicio'];
     $descricao = $_POST['descricao'];
     $detalhes = $_POST['detalhes'];
 
 
     $query = "INSERT INTO cursos (nome, preco, lotacao, duracao,)
     VALUES ('$fname','$lname','$email')";
 
     if (mysqli_query($con, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: courses.php?msg=".$msg."");
?>








