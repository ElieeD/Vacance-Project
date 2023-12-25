<?php 
include('co.php');
$b=mysqli_query($a,"SELECT * FROM students");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' height='100' width='100'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>ACTION</th>
        </tr>
        <tr>
            <?php 
            while($c=mysqli_fetch_array($b)){
                echo "<tr>";
                echo "<td>".$c['names']."</td>";
                echo "<td>".$c['age']."</td>";
                echo "<td><a href='edit.php?id={$c['id']}'>Update</a></td><td><a href='delete.php?del={$c['id']}'>Delete</a></td>";


                echo "</tr>";
            }
            ?>
        </tr>

    </table>
</body>
</html>