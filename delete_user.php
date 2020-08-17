<?php
include('config.php');
$id=$_GET['id'];
$result=mysqli_query($conn,"DELETE FROM user WHERE id=$id");
header('location:index.php');
?>