<?php
/** database connection **/
require ("dbcon.php");
$con = dbConnect();


/** getting form data from user **/
//print_r($_REQUEST);
$add_name = $_GET["fname"];
$add_lname = $_GET['lname'];
$add_email = $_GET['email'];
$add_username = $_GET['username'];
$add_password = $_GET['password'];

//echo $add_name;

//var_dump($add_phn);


$add_sql = "INSERT INTO `user` ( `username`, `password`,`fname`,`lname`,`email`) VALUES ( '$add_username', '$add_password','$add_name','$add_lname','$add_email');";
var_dump($add_sql);

$add_data = $con->query($add_sql);
/*
if ($add_data){
	echo $add_data;
	
	
}
else{
echo "not found";}
*///echo "<pre>";
//var_dump($add_data);
header("Location:login.html");

?>
