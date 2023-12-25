<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            /* background: grey; */
        }
        input{
            width: 190px;
            height: 30px;
            background: rgb(223, 220, 220);
            color: white;
            border-color: blue;
            margin-top: 180px;
            margin-left: 378px;
            position: static;
        }
    </style>
</head>
<?php


?>
<body>
    <?php 
    $b=mysqli_connect('localhost','root','','vacance');
    if(isset($_POST['lk'])){
        $image=$_POST['img'];
        $a=mysqli_query($b,"INSERT INTO image(img) VALUES('$image')");
        if($a){
            echo "IMAGE IS SUCCESSFULLY SUBMITE TO DATABASE";
        }
    }
    ?>
    <form action="" method="post">  
         <input type="file" name="img">
        <input type="submit" name="lk" value="SAVE">

    </form>
</body>
</html>