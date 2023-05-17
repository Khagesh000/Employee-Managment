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
			<div class = "alert alert-info">Message(Admin)</div>
			<div class = ""><button class="btn btn-primary"><a href="time_record.php"><font color="white"><i class = "glyphicon glyphicon-arrow-left"></i>&nbsp;Home</font></a></button></div><br>
				
	<div class = "well col-lg-12" style="background-color: #ebebe0">	
	<div class="container-fluid bg-grey">

  <div class="row">
  <div class="col-sm-12"><p><i>Please, Asked Admin if you have forget TimeIn Or TimeOut immediately.</i></p><hr></div>
    <div class="col-sm-7 col-md-offset-3">
    	  <h2 class="">CONTACT US</h2>
      <div class="row">
      	<form action="emp_process.php" method="POST">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Full Name" value="<?php echo $id; ?>" disabled="disabled" type="text" required>
          <input class="form-control" id="name" name="name" placeholder="Full Name" value="<?php echo $id; ?>" type="hidden" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Comment your problem here" rows="5" required=""></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary pull-right btn-lg" type="submit" name="send"><i class = "glyphicon glyphicon-comment"></i>&nbsp;Send</button>
        </div>
      </div> 
    </div>
  </div>
  </form>
</div>			
 </div>
</body>
  <script src = "js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>
</html>