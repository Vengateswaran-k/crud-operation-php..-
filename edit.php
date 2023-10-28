<?php
session_start();
session_destroy();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update form</title>
	<link rel="stylesheet" href="css/register.css">
</head>
<?php
 $id=$_GET['id'];
 $query=mysqli_query($con,"SELECT * from table_reg where id='$id'");
 $row=mysqli_fetch_assoc($query);
 $skill=$row['skills'];
 $skill1=explode(',',  $skill);
 ?>
 <?php 
 if(isset($_POST['submit'])){
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
   $skills = implode(",",$_POST["skills"]);
    $sql=mysqli_query($con,"UPDATE table_reg SET firstname='$name',middlename='$name1',lastname='$name2',course='$course1',gender='$gender1',phone='$phone1',address='$add',email='$mail',password='$pass',skills='$skills' where id='$id'");
    echo "<script>alert('updated')</script>";
    header("location:table.php");
 }
?>
<body>
 <form method="post" id="form-data" enctype="multipart/form-data">  
  <div class="container" style="background-color: #30efa9;">  
  <center>  <h1>Registeration Form</h1> </center>  
  <hr>  
  
  <label> Firstname </label>   
<input type="text" name="firstname" placeholder= "Firstname" id="firstname" value="<?php echo $row['firstname'];?>" >   
<label> Middlename: </label>   
<input type="text" name="middlename" placeholder="Middlename" id="middlename" value="<?php echo $row['middlename'];?>" >   
<label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" id="lastname" value="<?php echo $row['lastname'];?>" >   
<div>  
<label>   
Course :  
</label>   
<select name="course" id="course">  
<option value="Course" <?php if($row['course'] == 'Course') { ?> selected="selected"<?php }?>>Course</option>  
<option value="BCA"<?php if($row['course'] == 'BCA') { ?> selected="selected"<?php }?> >BCA</option>  
<option value="BBA"<?php if($row['course'] == 'BBA') { ?> selected="selected"<?php }?> >BBA</option>  
<option value="B.Tech" <?php if($row['course'] == 'B.Tech') { ?> selected="selected"<?php }?> >B.Tech</option>  
<option value="MBA" <?php if($row['course'] == 'MBA') { ?> selected="selected"<?php }?> >MBA</option>  
<option value="MCA" <?php if($row['course'] == 'MCA') { ?> selected="selected"<?php }?> >MCA</option>  
<option value="M.Tech" <?php if($row['course'] == 'M.Tech') { ?> selected="selected"<?php }?>>M.Tech</option>  
</select>  
</div>  
<div>  
<label id="gender">   
Gender :  
</label><br>  
<input type="radio" value="Male" <?php if($row['gender']=='Male'){ echo "checked=checked";}?> name="gender" > Male   
<input type="radio" value="Female"<?php if($row['gender']=='Female'){ echo "checked=checked";}?> name="gender"> Female   
<input type="radio" value="Other"<?php if($row['gender']=='Other'){ echo "checked=checked";}?> name="gender"> Other  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="phone" placeholder="Country Code"  value="<?php echo $row['phone'];?>" id="phone" >     
Current Address :  
<input type="text" cols="80" rows="5" placeholder="Current Address"  value="<?php echo $row['address'];?>" name="address" id="address" >  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email"  id="email"  value="<?php echo $row['email'];?>">  
  
    <label for="password"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password" id="password" value="<?php echo $row['password'];?>"><br>
    <label>checkbox:</label>
    <input type="checkbox" name="skills[]" value="html" 
    <?php 
    if(in_array('html',$skill1))
      {
       echo 'checked';
     } 
   ?>>html<br>
    <input type="checkbox" name="skills[]" value="css" <?php  if(in_array('css',$skill1)){ echo 'checked';} ?> >css<br>
    <input type="checkbox" name="skills[]" value="java" <?php if(in_array('java',$skill1)){ echo 'checked';} ?>>java
    
	<button type="submit" class="registerbtn" name="submit" id="submit">Register</button>
        
</form>  
</body>
</html>