<?php

if(count($_POST)>0){

include '../conexao.php';

$query = "UPDATE usuarios set id_usuario='" . $_POST['id_usuario'] . "', nome='" . $_POST['username'] . "', senha='" . $_POST['senha'] . "', nomecompleto='" . $_POST['nomecompleto'] . "', cargo='" . $_POST['cargo'] . "' WHERE id_usuario='" . $_POST['id_usuario'] . "'"; // update form data from the database

 if (mysqli_query($con, $query)) {
    $msg = 2;
 } else {
    $msg = 4;
 }

}

header ("Location: users.php?msg=".$msg."");

?>