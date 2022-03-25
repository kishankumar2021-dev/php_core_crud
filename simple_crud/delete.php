<?php

include 'conn.php';

$id = $_GET['id'];

$sql = " DELETE FROM `student` WHERE id='$id'";

$query = mysqli_query($conn,$sql);

if($query)

{
    echo "<script>confirm('You Are Sure Delete Record!');</script>";

}


header('location:display.php');
?>