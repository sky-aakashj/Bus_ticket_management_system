<?php
/** database connection **/
require ("dbcon.php");
$con = dbConnect();


/** getting form data from user **/
//print_r($_REQUEST);
$add_name = $_POST["busname"];
$add_origin = $_POST['origin'];
$add_destination = $_POST['destination'];
$add_seats = $_POST['seats'];
$add_fare = $_POST['fare'];
$add_arrivaltime = $_POST['arrivaltime'];


//echo $add_name;

//var_dump($add_phn);


$add_sql = "INSERT INTO `bus` ( `name`, `origin`,`destination`,`seats`,`fare`,`arrival_time`) VALUES ( '$add_name', '$add_origin','$add_destination','$add_seats','$add_fare','$add_arrivaltime');";
var_dump($add_sql);

$add_data = $con->query($add_sql);

/*if ($add_data){
	echo $add_data;
	
	
}
else{
echo "not found";}*/
//echo "<pre>";
//var_dump($add_data);
header("Location:admin.php");

?>
