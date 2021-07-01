

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
  

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
                <h2>Usuarios</h2>
            </div>            
            <div class="float-right">
                <a href="adduser.php" class="btn btn-success"> Adicionar Novo Usuario</a>
            </div>
           
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  
                  <th scope="col">Nome Completo</th>
                  <th scope="col">Cargo</th>

                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
             
              <?php
                include '../conexao.php';
                $query="select * from usuarios limit 200"; // Fetch all the data from the table cursos
                $result=mysqli_query($con,$query);
                ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                  
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                   
                    <td> 
                      <a href="updateuser.php?id_usuario=<?php echo $array[0];?>" class="btn btn-primary">Edit</a>
                      <a href="deleteuser.php?id_usuario=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
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