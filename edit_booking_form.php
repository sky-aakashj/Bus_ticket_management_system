<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Booking</title>
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
$show_sql = "SELECT * FROM `booking` WHERE `booking`.`book_id` = '$id'";
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
	<h1> EDIT YOUR BUS TICKET</h1>
	
</center>
<form action="edit_action.php" method="get">
<div class="wrapper">
    <input type="hidden" name="id" value="<?php echo ($data["book_id"]); ?>" required/>
    <div class="form">
       <div class="inputfield">
          <label> Date</label>
          <input type="date" class="input" name="date" value="<?php echo ($_SESSION["date"]);?>" autocomplete="off" required>
       </div>
		<div class="inputfield">
          <label>Number of Ticket </label>
          <input type="number" class="input" name="seats" value="<?php echo ($data["no_of_ticket"]);?>" autocomplete="off" required>
       </div>
		
        
  
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Update" class="btn">
      </div>
    </div>
</div>
</form>	

</body>
</html>