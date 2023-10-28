<?php
include('connect.php');
$id=$_GET['id'];
$query=mysqli_query($con,"DELETE FROM table_reg where id= $id");
echo "<script>alert('1 row deleted')</script>";
header("location:table.php");
?>