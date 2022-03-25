<?php


include 'conn.php';
if(isset($_POST['done'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    

$sql = "UPDATE `innovative` SET `name`='$name',`phone`=' $phone',`image`='$image' WHERE id='$id' ";

$query = mysqli_query($conn,$sql);


header('location:display.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <?php

include 'conn.php';

$id = $_GET['id'];

$q = "SELECT * FROM `innovative` WHERE id='$id' ";

$query=mysqli_query($conn,$q);

   while($res = mysqli_fetch_assoc($query))
   {



?>
        
        NAME:</br><input type="text" name="name" value="<?php echo $res['name']?>"></br></br>
        Email:</br><input type="email" name="email" id="email" value="<?php echo $res['email']?>"></br></br>
        Phone Number:</br><input type="number" name="phone" id="phone" value="<?php echo $res['phone']?>"></br></br>		
        
   <?php
   }
   ?>
        <button type="submit" name="done">Update</button><br>
    </form>  
   
</body>
</html>