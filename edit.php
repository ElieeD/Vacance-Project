<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include('co.php');

    if(isset($_POST['ok'])){
        $idd=$_POST['id'];
        $name=$_POST['names'];
        $age=$_POST['age'];
        $p=mysqli_query($a,"UPDATE students SET names='$name', age='$age' WHERE id='$idd' ");

        if ($p) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($a);
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $f = mysqli_query($a, "SELECT * FROM students WHERE id=$id");
    
        while($b = mysqli_fetch_array($f))
        {
            $id = $b['id'];              
            $name = $b['names'];
            $age = $b['age'];
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="names" value="<?php echo $name; ?>"><br>
        <input type="text" name="age" value="<?php echo $age; ?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="ok" value="SAVE">
        <a href="view.php">View</a>
    </form>
</body>
</html>
