<?php

require_once 'config/connect.php';
if(isset($_POST['search'])){

$employee = mysqli_real_escape_string($conn,$_POST['user_no']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

// $pass=sha1($password);
// $salt="a1Bz20ydqelm8m1nel";
// $password=$salt.$pass;

date_default_timezone_set("asia/manila");
$time = date("h:i A",strtotime("+0 HOURS"));
$date = date("M-d-Y");
$q_emp = $conn->query("SELECT * FROM `late` WHERE user_no = '$employee' and `password` = '$password'") or die(mysqli_error());

$f_emp = $q_emp->fetch_array();


	if($f_emp['user_no']==$employee){
		if($f_emp['id']=="OFFLINE"){

			$conn->query("UPDATE `late` SET `id` = 'ONLINE' WHERE `user_no` = '$employee' and `password` = '$password'") or die(mysqli_error());
				echo"<div class='alert alert-success alert-dismissible fade show' role='alert'  id='success-alerts'>  <strong><h1>Time In</h1></strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
						$emp_name = $f_emp['fname']." ".$f_emp['mname']." ".$f_emp['lname'];

						echo "<div class='alert alert-success hide alert-dismissible fade show' role='alert' id='success-alert'>".ucwords($emp_name)." <label class = 'text-info'> Time In at  ".date("h:i A", strtotime($time))." ".$date."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
							$conn->query("INSERT INTO `timein` VALUES('','$employee','$password','$emp_name','$time','','$date')") or die(mysqli_error());
								
		}elseif($f_emp['id']=="ONLINE"){
				$conn->query("UPDATE `late` SET `id` = 'OFFLINE' WHERE `user_no` = '$employee' and `password` = '$password'") or die(mysqli_error());	
				echo"<div class='alert alert-danger alert-dismissible fade show' role='alert' id='danger-alert'>  <strong><h1>Time Out</h1></strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
					$emp_name = $f_emp['fname']." ".$f_emp['mname']." ".$f_emp['lname'];
						echo "<div class='alert alert-danger hide alert-dismissible fade show' role='alert' id='danger-alerts'>".ucwords($emp_name)." <label class = 'text-info'> Time Out at  ".date("h:i A", strtotime($time))." ".$date."  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
						
						
							$conn->query("UPDATE `timein` SET `out` = '$time' WHERE  `user_no` = '$employee' order by id") or die(mysqli_error());
					
			}
		}else{
			/*echo"
						<h2 style='color:red;'>
							<span class = 'glyphicon glyphicon-warning-sign'></span></h2>
								<div style='color:red;'><h3>Invalid  ID !</h3></div>";*/

								 echo" <div class='alert alert-warning hide alert-dismissible fade show' role='alert'><strong>Invalid EmployeeID and Password, Please Try Again!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
		}
	}
?>



