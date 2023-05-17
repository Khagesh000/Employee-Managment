<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION["user_no"])){
    header("location:../view_attendance.php");

} 
?>
<html lang = "eng">
	<head>
		<title>TimeKeeper</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />


		    <!-- Bootstrap CSS -->    
    <link href="css3/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css3/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css3/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets3/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets3/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets3/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css3/owl.carousel.css" type="text/css">
	<link href="css3/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css3/fullcalendar.css">
	<link href="css3/widgets.css" rel="stylesheet">
    <link href="css3/style.css" rel="stylesheet">
    <link href="css3/style-responsive.css" rel="stylesheet" />
	<link href="css3/xcharts.min.css" rel=" stylesheet">	
	<link href="css3/jquery-ui-1.10.4.min.css" rel="stylesheet">
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = ""><?php include('animate/index.html');?></p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<?php 

     require_once("connect.php");


   $id = mysqli_real_escape_string($conn,$_SESSION['user_no']);


	$r = mysqli_query($conn,"SELECT * FROM late where late_id = '$id'") or die (mysqli_error($con));

	$row = mysqli_fetch_array($r);

	 $id=$row['user_no'];
	 $fname=$row['fname'];
	 $lname=$row['lname'];

?>
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Welcome!, <?php echo ucwords(htmlentities($fname.' '.$lname)); ?>&nbsp;<i class = "glyphicon glyphicon-user"></i> 	
<b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
		
			<br />
			<div class = "alert alert-info">Attendance Records</div>
			<div class = ""><button class="btn btn-primary" title="If you forget to TimeIn or TimeOut just message..Administration"><a href="emp_message.php"><font color="white"><i class = "glyphicon glyphicon-arrow-right"></i>&nbsp;Message</font></a></button></div><br>
				
	<div class = "well col-lg-12">				
				<table id = "table" class = "table table-striped">
            
					<thead class = "alert-warning">
						<tr>
							
							<th>Employee ID</th>
							<th>Employee Details</th>
						
							<th>Time in</th>
							<th>Time out</th>
							<th>Date</th>
						
						
						</tr>
					</thead>
					<tbody>
					<?php
					
					$user_no = mysqli_real_escape_string($conn,$_SESSION['user_no']);

						$q_time = $conn->query("SELECT * FROM `timein` where user_no = '$id'") or die(mysqli_error());
						while($f_time=$q_time->fetch_array()){
						



					?>	
						<tr>
							<td><?php echo htmlentities($f_time['user_no'])?></td>
							<td><?php echo ucwords(htmlentities($f_time['password']))?></td>
							
							

							<td><?php echo htmlentities($f_time['time'])?></td>
							<td><?php echo htmlentities($f_time['out'])?></td>
							<td><?php echo date("m-d-Y", strtotime($f_time['date']))?></td>

							<?php
							}
						
							?>
						
						</tr>
						
				
					
					</tbody>
				<tr>
				
                  
				</table>
           
			</div>
		
		</div>

			
		</div>


		<div class = "navbar navbar-fixed-bottom alert-info">
			<?php echo include 'get_ip/ip.php'; ?>
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>

</html>