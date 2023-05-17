<?php 

require_once("config/connect.php");

session_start();

if(isset($_POST["log"])){

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d H:i:s");

$user_unsafe=$_POST['user_no'];
$pass_unsafe= $_POST['password'];

$user = mysqli_real_escape_string($conn,$user_unsafe);
$pass1 = mysqli_real_escape_string($conn,$pass_unsafe);

// $pass=sha1($pass1);
// $salt="a1Bz20ydqelm8m1nel";
// $pass1=$salt.$pass;



//$pass11 = password_hash( $pass1, PASSWORD_BCRYPT);

//$pass1 = password_hash( $pass1, PASSWORD_BCRYPT, array('cost' => 12));



$query=mysqli_query($conn,"SELECT * FROM late WHERE user_no = '$user' AND password = '$pass1'")or die(mysqli_error($con));
		$row=mysqli_fetch_array($query);
           $id=$row['late_id'];
           $_SESSION["user_no"] = $row["late_id"];
		   $_SESSION["user_no"] = $row["user_no"];
    
           $counter=mysqli_num_rows($query);
            
		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid EmployeeID or Password,Please try again!');
				  document.location='view_attendance.php'</script>";
			  } 
			  else
			  {
				  $_SESSION['user_no']=$id;	
			


                 
			  	echo "<script type='text/javascript'>document.location='view_my_attendance/time_record.php'</script>";  
	  }
   }
?>