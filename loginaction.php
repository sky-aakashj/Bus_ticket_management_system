<?php

$username = $_POST['username'];
$password = $_POST['password'];

/*
$con = mysqli_connect("localhost", "root", "", "ticket_manage");
	if($con->connect_error){
		echo "connection failed". mysqli_connect_error();
	} else {
		 //echo "connected";
		
	}
*/
require ("dbcon.php");
$con = dbConnect();



$result = mysqli_query($con,"Select * from user where username = '$username' and password='$password'")
			or die("Failed to query database".mysqli_error());


$query = mysqli_query($con,"Select * from admin where username = '$username' and password='$password'")
			or die("Failed to query database".mysqli_error());

$row1 = mysqli_fetch_array($query);
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
		//echo "welcome".$row['username'];
		
		session_start();
		//print_r($_SESSION);
		$_SESSION['user_name'] = $row['username'];
		
		//print_r($_SESSION['user_name']);
		//echo "Hello ". $_SESSION['user_name'];
		header ("Location: dashboard.php");

}

elseif ($row1['username'] == $username && $row1['password'] == $password){
	
	
		//echo "welcome".$row['username'];
		
		session_start();
		//print_r($_SESSION);
		$_SESSION['user_name'] = $row1['username'];
		
		//print_r($_SESSION['user_name']);
		//echo "Hello ". $_SESSION['user_name'];
		header ("Location: admin.php");
}






else{
	header ("Location: login.html?msg=Username or password is incorrect");
	echo "failed to login";
	
}

?>
