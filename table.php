<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>table</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet"type="text/css"href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
</head>
<body>

<div class="container-fluid" style="overflow-x:auto;">
<table border="3" class="table table-dark table-hover" id="table_id">
	<thead>
		<tr>
		<th>ID</th>
		<th>FIRSTNAME</th>
		<th>MIDDLENAME</th>
		<th>LASTNAME</th>
		<th>COURSE</th>
		<th>GENDER</th>
		<th>PHONE</th>
		<th>ADDRESS</th>
		<th>EMAIL</th>
		<th>SKILLS</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	</thead>
<?php
$query=mysqli_query($con,"SELECT * from table_reg");
while($row=mysqli_fetch_array($query)){
?>
<tbody>
	<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['firstname'];?></td>
	<td><?php echo $row['middlename'];?></td>
	<td><?php echo $row['lastname'];?></td>
	<td><?php echo $row['course'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['phone'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['skills'];?></td>
	<td><a href="edit.php?id=<?php echo $row['id'];?>">EDIT</a></td>
	<td><a href="delete.php?id=<?php echo $row['id'];?>">DELETE</a></td>
</tr>
</tbody>
<?php
}
?>
</table>
</div>
<script
type="text/javascript"charset="utf8"src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript"charset="utf8"
src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
$(function() {
$("#table_id").dataTable();
});
</script>
</body>
</html>