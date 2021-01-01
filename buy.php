<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bus Details</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!--<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/style.css">-->
<link rel="stylesheet" type="text/css" href="css/style2.css">
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

$id = $_REQUEST['id'];
//echo $id;
$show_sql = "SELECT * FROM `bus` WHERE `bus`.`id` = '$id'";
$result = $con->query($show_sql);
$data = $result->fetch_assoc();

//print_r($data);
?>

<body style="background-color:#e6feff;">

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
	<h1> BOOK YOUR BUS TICKET</h1>
	
</center>
<form action="confirm.php" method="get">
<div class="wrapper">
    <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" required/>
    <div class="form">
       <div class="inputfield">
          <label> Name</label>
          <input type="text" class="input" name="username" value="<?php echo ($_SESSION["user_name"]);?>" autocomplete="off" required>
       </div>
		<div class="inputfield">
          <label>Bus Name </label>
          <input type="text" class="input" name="busname" value="<?php echo ($data["name"]);?>" autocomplete="off" required>
       </div>
		
        <div class="inputfield">
          <label>From </label>
          <input type="text" class="input" name="origin" value="<?php echo ($data["origin"]);?>" autocomplete="off" required>
       </div>  
       <div class="inputfield">
          <label>To City</label>
          <input type="text" class="input" name="destination" value="<?php echo ($data["destination"]);?>" autocomplete="off" required>
       </div>
		<div class="inputfield">
          <label>Arrival Time</label>
          <input type="text" class="input" name="time" value="<?php echo ($data["arrival_time"]);?>" autocomplete="off" required>
       </div>
      <div class="inputfield">
          <label>Date</label>
          <input type="date" name="date" class="input">
       </div> 
	   <div class="inputfield">
          <label>Number of Ticket</label>
          <input type="number" name="tickets" class="input">
       </div> 
    
       
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Confirm" class="btn">
      </div>
    </div>
</div>
</form>	

</body>
</html>
