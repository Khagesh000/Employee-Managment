<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION["user_no"])){
    header("location:../view_attendace.php");

}
?>

<html lang = "eng">
	<head>
		<title>Time Keeper | Home</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />

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
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
	<li class = "dropdown"  >
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#" ><span class = "glyphicon glyphicon-book"></span> Records <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						
						<li><a href = "c101.php"><span class = "glyphicon glyphicon-time"></span>Time Record</a></li>
					</ul>
				</li>

			</ul>
			<br />
			<div class = "alert alert-info">Home</div>
			<div class = "well col-lg-12">
		
		
              <?php   
                                       /*this part was accounting the members*/ 
                                    include 'connect.php';                                
                                        $query1=mysqli_query($conn,"select COUNT(*) as admin_id from  admin")or die(mysqli_error($con));
                                       $row2=mysqli_fetch_array($query1)

               
                                    ?>  

            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-cloud-user"><a  href = "admin.php"><span class = "glyphicon glyphicon-user"></span> </a></i>
						<div class="count"><?php echo $row2['admin_id'];?></div>
						<div class="title">Admin</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->

                <?php   
                                       /*this part was accounting the members*/ 
                                    include 'connect.php';                                
                                        $query1=mysqli_query($conn,"select COUNT(*) as late_id from  late")or die(mysqli_error($con));
                                       $row2=mysqli_fetch_array($query1)

               
                                    ?>  
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-shopping-book"><a href = "student.php"><span class = "glyphicon glyphicon-book"></span></a></i>
						<div class="count"><?php echo $row2['late_id'];?></div>
						<div class="title">Employee</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
		
		
             
             </div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
				
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>