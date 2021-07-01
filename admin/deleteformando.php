<?php


include '../conexao.php';

$query = "DELETE FROM formando WHERE idformando='" . $_GET["idformando"] . "'"; 

 if (mysqli_query($dbCon, $query)) {
    $msg = 3;
 } else {
    $msg = 4;
 }

header ("Location: formandos.php?msg=".$msg."");


?>