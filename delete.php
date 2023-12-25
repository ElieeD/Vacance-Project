<?php
include('co.php');
$b=$_GET['del'];
$f = mysqli_query($a, "DELETE FROM students WHERE id=$b");
if($f){
    header('location:view.php');
}

?>