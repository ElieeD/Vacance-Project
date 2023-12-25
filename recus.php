<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['ok'])){
        $n=$_POST['n1'];
        if(($n & ($n - 1)) == 0){
            echo $n." Is Power Of Two";
        }
        else{
            echo "It's Not ";
        }
    } 

    ?>
    <form action="" method="post">
        <input type="text" name="n1">
        <input type="submit" name="ok" value="CHECK">
    </form>
</body>
</html>