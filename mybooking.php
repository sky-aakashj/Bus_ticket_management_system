<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Booking</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!--<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/style.css">-->
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
if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	
	header ("Location: login.html");	
}
//echo $_SESSION["user_name"];
$value=$_SESSION["user_name"];
//echo $value;

$read_sql = "Select * from `booking` where username = '$value' ";
//var_dump($read_sql);
$read_data = $con->query($read_sql);			
			
//var_dump($read_data );			
//while($data_array = $read_data->fetch_assoc()){
	
	//echo $data_array["book_id"];
	//echo $data_array['origin'];

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
      
	  <li ><a href="dashboard.php">Dashboard</a></li>
	  <li class="active" ><a href="mybooking.php">My Bookings</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
	  </ul>
</div>
</nav>	


<center>
	<div>
	<h1>MY BOOKING</h1>
	</div>
	<div class="container">
		<table>
			<tr>
				<th>Booking Id</th>
				<th>Buss Name</th>
				<th>Origin</th>
				<th>Destination</th>
				
				<th>Seats</th>
				<th>date</th>
				<th>Arrival Time</th>
				 <th>Action</th>
			
			</tr><br>
			
			<?php
				while($data_array = $read_data->fetch_assoc()){
			?>
					 <tr>
						<td><?php echo $data_array["book_id"];?></td>
						<td><?php echo $data_array['bus_name']; ?></td>
						<td><?php echo $data_array['origin']; ?></td>
						<td><?php echo $data_array['destination']; ?></td>
						<td><?php echo $data_array['no_of_ticket']; ?></td>
						<td><?php echo $data_array['date']; ?></td>
						<td><?php echo $data_array['arrival_time']."AM"; ?></td>
						
						<td><a href="cancle_ticket.php?id=<?php echo $data_array["book_id"]; ?>"onclick="javascript: return confirm('Are you sure you want to delete this record?')" class="btn btn-primary ">CANCLE TICKET</a>
						<a href="edit_booking_form.php?id=<?php echo $data_array["book_id"]; ?>" class="btn btn-primary ">EDIT</a>
						
						</td>
					  
			 <?php
					
				}
			?>
					</tr>
			
		</table>
		
	</div>

</center>

</body>
</html>
