<?php

$db_host = "localhost";
$db_user ="root";
$db_password = "";
$db_name = "newosms";

// creaste connection

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if ($conn->connect_error) 
{
	die("Connection Failed");	
}
// else
// {
// 	echo "Connect Successfully";	
// }







?>