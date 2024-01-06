<?php
$host="localhost";
$user="root";
$password="";
$database="narrator";
$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn){
	die("Could not connected !");
}
?>