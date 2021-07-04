<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit and Update Data PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">

  <div class="page-header">
      <h2>Update Data From Database PHP</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php


            include 'mydbCon.php';

            $query = "SELECT * FROM course WHERE idcouse='" . $_GET["idcourse"] . "'"; // Fetch data from the table course using id

            $result=mysqli_query($con,$query);

        $user = mysqli_fetch_assoc($result);


            ?>
            <form action="update-process.php" method="POST">

              <input type="hidden" name="idcourse" value="<?php echo $_GET["idcourse"]; ?>" class="form-control" required="">

              <div class="form-group">
                <label for="">Nome</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $user['fname']; ?>" required="">
              </div>                

              <div class="form-group">
                <label for="">Nome</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $user['lname']; ?>" required="">
              </div>              

              <div class="form-group">
                <label for="">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required="">
              </div>

              <button type="submit" class="btn btn-primary" value="submit">Submit</button>

            </form>
        </div>
    </div>        
</div>

</body>
</html>