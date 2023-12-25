<?php
include('co.php');


if(isset($_POST['ok'])){
    $name=$_POST['names'];
    $age=$_POST['age'];
    $b=mysqli_query($a,"INSERT INTO students(names,age) VALUES('$name','$age')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="names"><br>
        <input type="text" name="age"><br><br>
        <input type="submit" name="ok" value="SAVE ">
        <a href="view.php">View</a>

    </form>
    
</body>
</html>