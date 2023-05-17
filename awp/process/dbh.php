<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "awp";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>