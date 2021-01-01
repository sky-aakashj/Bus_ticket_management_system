<?php

//echo "edit action";

require ("dbcon.php");
session_start();
if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	
	header ("Location: login.html");	
}
$con = dbConnect();


//var_dump($_REQUEST);

$id = $_REQUEST['id'];
$date = $_REQUEST['date'];
$seats = $_REQUEST['seats'];

//echo $id;
//echo $seats;
$edit_sql= "UPDATE `booking` SET `date` = '$date', `no_of_ticket` = '$seats' WHERE `booking`.`book_id` = $id";

//var_dump($edit_sql);

$edit_query = $con->query($edit_sql);
var_dump($edit_query);

header("Location:mybooking.php");
?>
