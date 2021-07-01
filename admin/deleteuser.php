<?php


include 'conexao.php';

$query = "DELETE FROM usuarios WHERE id_usuario ='" . $_GET["id_usuario"] . "'"; 

 if (mysqli_query($con, $query)) {
    $msg = 3;
 } else {
    $msg = 4;
 }

header ("Location: users.php?msg=".$msg."");


?>