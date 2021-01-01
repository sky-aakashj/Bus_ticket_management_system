<?php

//echo "Hello ".$_SESSION["user_name"];


/** getting id for deleting the record from user **/
$id = $_REQUEST["id"];
echo $id;

/** database connection **/
require ("dbcon.php");
$con = dbConnect();


$del_sql = "DELETE FROM `bus` WHERE `bus`.`id` = '$id'";
//var_dump($del_sql);

$del_data = $con->query($del_sql);
//var_dump($del_data);

header("Location:admin.php");

?>
