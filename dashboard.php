<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	
	header ("Location: login.html");	
}

?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index1.html">Home</a></li>
      <li><a href="about us.html">About Us</a></li>
      
	  <li class="active"><a href="dashboard.php">Dashboard</a></li>
	  <li  ><a href="mybooking.php">My Bookings</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
	  </ul>
</div>
</nav>	  




<div class="login-form">
    <form action="busdata.php" method="POST">
        <h2 class="text-center">Search Buses</h2>   
        <div class="form-group has-error">
		
        <input type="text" class="form-control" name="from" placeholder="From" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="destination" placeholder="Destination" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
        </div>
        
    </form>

</body>



</html>