<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMIN DASHBOARD</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!--<link rel="stylesheet" type="text/css" href="css/style1.css">-->
<style>
table,th,td{
	border:2px solid black;
	width:1100px;
	background-color: lightblue;
}
</style>

</head>


<?php 

require ("dbcon.php");
$con = dbConnect();

session_start();
auth();

$read_sql = "Select * from bus";
$read_data = $con->query($read_sql);			
			

?>
	
		

	

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index1.html">Home</a></li>
      <li><a href="about us.html">About Us</a></li>
      
	  <li class="active"><a href="admin.php">Admin Dashboard</a></li>
	  
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
	  </ul>
</div>
</nav>	


<center>
	<div><h1> ALL BUSES</h1></div><br><br>
	
	<a href="add_bus.html" class="btn btn-primary stretched-link">ADD BUS</a>
	<div class="container">
		<table>
			<tr>
				<th>Id</th>
				<th>Buss Name</th>
				<th>Origin</th>
				<th>Destination</th>
				<th>Seats</th>
				<th>Fare</th>
				<th>Arrival Time</th>
				 <th>Action</th>
			
			</tr><br>
			
			<?php
				while($data_array = $read_data->fetch_assoc()){
			?>
					 <tr>
						<td><?php echo $data_array["id"];?></td>
						<td><?php echo $data_array['name']; ?></td>
						<td><?php echo $data_array['origin']; ?></td>
						<td><?php echo $data_array['destination']; ?></td>
						<td><?php echo $data_array['seats']; ?></td>
						<td><?php echo $data_array['fare']; ?></td>
						<td><?php echo $data_array['arrival_time']."AM"; ?></td>
						<!--<td> <a href="delete_bus.php?id=<?php echo $data_array["id"]; ?>"onclick="javascript: return confirm('Are you sure you want to delete this record?')">DELETE</a></td>-->
						
						<td><a href="delete_bus.php?id=<?php echo $data_array["id"]; ?>"onclick="javascript: return confirm('Are you sure you want to delete this record?')" class="btn btn-primary ">DELETE</a></td>
			 <?php
					
				}
			?>
					</tr>
			
		</table>
		
	</div>

</center>
</body>
</html>