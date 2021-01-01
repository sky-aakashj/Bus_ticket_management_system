<?php
/** database connection **/
require ("dbcon.php");
$con = dbConnect();

session_start();
if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	
	header ("Location: login.html");	
}
/** getting form data from user **/
//print_r($_REQUEST);
$add_id = $_GET["id"];
$add_username = $_GET['username'];
$add_origin = $_GET['origin'];
$add_destination = $_GET['destination'];
$add_date = $_GET['date'];
$add_tickets = $_GET['tickets'];
$add_time = $_GET['time'];
$add_busname = $_GET['busname'];

//echo $add_id;
//echo $add_username;


//var_dump($add_phn);


$add_sql = "INSERT INTO `booking` ( `id`, `origin`,`destination`,`date`,`username`,`no_of_ticket`,`bus_name`,`arrival_time`) VALUES ( '$add_id', '$add_origin','$add_destination','$add_date','$add_username','$add_tickets','$add_busname','$add_time');";
//var_dump($add_sql);

$add_data = $con->query($add_sql);
/*
if ($add_data){
	echo $add_data;
	
	
}
else{
echo "not found";}
*///echo "<pre>";
//var_dump($add_data);
//header("Location:login.html");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confirm Booking</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}
p{
text-align:left;
}
table{
text-align:left;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.content {
  max-width: 5000px;
  margin: auto;
}
.container {
  padding: 2px 16px;
}

</style>
</head>
<body >

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index1.html">Home</a></li>
      <li><a href="about us.html">About Us</a></li>
      
	  <li ><a href="dashboard.php">Dashboard</a></li>
	  <li  ><a href="mybooking.php">My Bookings</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
	  </ul>
</div>
</nav>	
<center>
<div class="content">


<div class="card">
  <h2>Ticket</h2>
  <div >
    <table>
	<tr>
    <td>NAME :</td> <td><?php echo $add_username;?> </td>
	</tr>
	<tr>
	<td>FROM:</td> <td><?php echo $add_origin;?></td>
	</tr>
	<tr>
	<td>TO CITY :</td><td><?php echo $add_destination;?> </td>
	</tr>
	<tr>
    <td> BUS NAME :</td> <td><?php echo $add_busname;?> </td>
	</tr>
	<tr>
    <td>ARRIVAL TIME :</td> <td><?php echo $add_time;?> </td>
	</tr>
	<tr>
	<td>NUMBER OF SEATS :</td><td><?php echo $add_tickets;?> </td>
	</tr>
	<tr>
    <td>DATE : </td><td><?php echo $add_date;?></td>
	</tr>
	
	</table>
  </div>
</div>
</div>
</center>
</body>
</html>