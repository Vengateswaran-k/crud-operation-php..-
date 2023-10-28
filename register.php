<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registeration Form</title>
        <link rel="stylesheet" href="css/register.css">
        <script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
    </head>
       <?php 
if(isset($_POST["submit"])){
echo $name=$_POST["firstname"];
     $name1=$_POST["middlename"];
	 $name2=$_POST["lastname"];
	 $course1=$_POST["course"];
	 $gender1=$_POST["gender"];
	 $phone1=$_POST["phone"];
	 $add=$_POST["address"];
	 $mail=$_POST["email"];
	 $pass=$_POST["password"];
	 $password=md5($pass);
    $skill = implode(",",$_POST["skills"]);
     

	 $sql=mysqli_query($con, "INSERT INTO table_reg(firstname,middlename,lastname,course,gender,phone,address,email,password,skills)VALUES('$name','$name1','$name2','$course1','$gender1','$phone1','$add','$mail','$password','$skill')");
    echo "<script>alert('inserted Successfully')</script>";
    header("location: table.php");
exit;

}
?>
    <body>
       <form method="post" id="form-data" enctype="multipart/form-data">  
  <div class="container" style="background-color: #30efa9;">  
  <center>  <h1>Registeration Form</h1> </center>  
  <hr>  
  
  <label> Firstname </label>   
<input type="text" name="firstname" placeholder= "Firstname" id="firstname" >   
<label> Middlename: </label>   
<input type="text" name="middlename" placeholder="Middlename" id="middlename" >   
<label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" id="lastname" >   
<div>  
<label>   
Course :  
</label>   
  
<select name="course" id="couree">  
<option value="Course" >Course</option>  
<option value="BCA" >BCA</option>  
<option value="BBA" >BBA</option>  
<option value="B.Tech" n>B.Tech</option>  
<option value="MBA" >MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech" >M.Tech</option>  
</select>  
</div>  
<div>  
<label id="gender">   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="phone" placeholder="Country Code"  value="+91" id="phone" >     
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" value="address" name="address" id="address">  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email"  id="email">  
  
    <label for="password"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password" id="password"><br>
    <label>checkbox:</label>
    <input type="checkbox" name="skills[]" value="html">html<br>
    <input type="checkbox" name="skills[]" value="css">css<br>
    <input type="checkbox" name="skills[]" value="java">java
    
	<button type="submit" class="registerbtn" name="submit" id="submit">Register</button>
        
</form>  
<script src="js/lib/jquery.js"></script>
<script src="js/dist/jquery.validate.js"></script>
<!-- <script type="text/javascript" src="js/custom.js"></script> -->
</body>
</html>
