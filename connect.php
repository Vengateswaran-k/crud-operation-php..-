<?php
$host="localhost";
$user="root";
$pass="";
$db="web"; 
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con){
	die("connection failed: " . mysqli_connect_error());
}
echo"<script>alert('connected successfully')</script>";
?>