<?php 


$servaername = "localhost";
$username = "root";
$password = "password";
$dbname = "practice";

$con = mysqli_connect($servaername,$username,$password,$dbname);

if(!$con){
	die("connection failed : ".mysqli_connect_error());
}
