<?php

$servername="localhost";
$username="root";
$password="";
$db="foodrcp";

/*...create database connection.....*/
$conn=new mysqli($servername, $username, $password , $db);
/*...check connection..*/
if($conn->connect_error){
	die("connection failed". $conn->connect_error);
}

?>