<?php


include '../conexao.php';

$query = "DELETE FROM course WHERE idcurso='" . $_GET["idcurso"] . "'"; 

 if (mysqli_query($dbCon, $query)) {
    $msg = 3;
 } else {
    $msg = 4;
 }

header ("Location: course.php?msg=".$msg."");


?>