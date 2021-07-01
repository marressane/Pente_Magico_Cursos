

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
  

    <?php include ('menu/menuSuperior.php'); ?>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php include 'msg.php';  ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="float-left">
                <h2>Lista dos Cursos</h2>
            </div>            
            <div class="float-right">
                <a href="addcourse.php" class="btn btn-success">Adicionar novo curso</a>
            </div>
           
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome do Curso</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Duracão</th>
                  <th scope="col">Lotação</th>
                  <th scope="col">Lugar</th>
                  <th scope="col">Data de Inicio</th>
                  <th scope="col">Data de Criacao</th>
                  <th scope="col">Data de Actualização</th>
                  <th scope="col">Descriçao</th>
                  <th scope="col">Detalhes</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
             
              <?php
                include '../conexao.php';
                $query="select * from cursos limit 200"; // Fetch all the data from the table cursos
                $result=mysqli_query($con,$query);
                ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                    <td><?php echo $array[9];?></td>
                    <td><?php echo $array[10];?></td>
                    <td> 
                      <a href="updatecourse.php?idcurso=<?php echo $array[0];?>" class="btn btn-primary">Edit</a>
                      <a href="deletecourse.php?idcurso=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">Não Encontrado</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</body>
</html>