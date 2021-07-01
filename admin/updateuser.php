<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Usuario</title>
    
</head>
<body>

<div class="container mt-2">

  <div class="page-header">
      <h2>Actualizar Usuario</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php


            include 'conexao.php';

            $query = "SELECT * FROM usuario WHERE id_usuario='" . $_GET["id_usuario"] . "'"; // Fetch data from the table course using id

            $result=mysqli_query($con,$query);

        $user = mysqli_fetch_assoc($result);


            ?>
            <form action="update-process.php" method="POST">

              <input type="hidden" name="custId" value="<?php echo $_GET["custId"]; ?>" class="form-control" required="">

              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="fname" class="form-control" value="<?php echo$user['nome']; ?>" required="">
              </div>                

              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo$user['senha']; ?>" required="">
              </div>              

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo$user['nomecompleto']; ?>" required="">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" class="form-control" value="<?php echo$user['cargo']; ?>" required="">
              </div>



              <button type="submit" class="btn btn-primary" value="submit">Submit</button>

            </form>
        </div>
    </div>        
</div>

</body>
</html>