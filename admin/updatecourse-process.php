<?php

if(count($_POST)>0){

include '../conexao';

$query = "UPDATE courses set idcourse='" . $_POST['idcourse'] . "', nomecurso='" . $_POST['nomecurso'] . "', preco='" . $_POST['preco'] . "', lotacao='" . $_POST['lotacao'] . "' WHERE idcurso='" . $_POST['idcurso'] . "'"; // update form data from the database

 if (mysqli_query($dbCon, $query)) {
    $msg = 2;
 } else {
    $msg = 4;
 }

}

header ("Location: course.php?msg=".$msg."");

?>