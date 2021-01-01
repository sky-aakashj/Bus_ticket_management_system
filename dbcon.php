<?php

function dbConnect() {
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$db = "project";
	//$con = mysqli_connect("$servername", "$username", "$password", "$db");
	$con = mysqli_connect("localhost", "root", "", "ticket_manage");
	if($con->connect_error){
		echo "connection failed". mysqli_connect_error();
	} else {
		 //echo "connected";
		return $con;
	}
	
}
//$res = dbConnect();
//print_r($res);
//
/*
function auth(){
	session_start();
		//echo "Hello ".$_SESSION["user_name"];
	if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
		echo "Hello ".$_SESSION["user_name"];
	} else {
		//echo "you are not loged in";
		header ("Location: loginform.php");	
	}
}
*/
function auth(){
	
	if(!isset($_SESSION["user_name"])){
		header("Location: login.html");
	}
}

?>