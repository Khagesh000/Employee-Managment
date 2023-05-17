
<?php 
$conn = mysqli_connect("localhost","root","","attendance_sys");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>