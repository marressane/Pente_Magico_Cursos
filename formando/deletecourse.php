<?php


include 'mydbCon.php';

$query = "DELETE FROM course WHERE custId='" . $_GET["custId"] . "'"; // Delete data from the table course using id

 if (mysqli_query($dbCon, $query)) {
    $msg = 3;
 } else {
    $msg = 4;
 }

header ("Location: course.php?msg=".$msg."");


?>