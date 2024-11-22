<?php


$servername = "localhost";
$path = "root";
$password = "";
$dbname = "fms";

$con = mysqli_connect($servername, $path, $password, $dbname);


if (!$con) {
	# code...

	echo "Error!".mysqli_error($con);
	exit();

	
}