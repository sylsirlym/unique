<?php
if(isset($_POST['next']))
 {
$type=$_POST['type'];
if($type=="admin")
{
header("Location: admin/adm_login.php");
}
else if($type=="client")
{
header("Location: login.php");
}
else if($type=="emp")
{
	header("Location: employee/emp_login.php");
}
else
{
echo '<script language=javascript>alert("Please select a user type")</script>';
		echo '<script language=javascript>window.location="index.php"</script>';
}
 }
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Unique Shuttle | Online Booking System</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Bus Ticket Reservation Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="css/jquery.seat-charts.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/jquery.seat-charts.js"></script>
</head>
<body>
<?php include 'regHeader.php';?>
<div class="content">
	<h1>Unique Shuttle</h1>
	<div class="main">
		<h2>Welcome To Unique Shuttle</h2>
		<div class="wrapper">
			<div id="seat-map">

  <div class="row">
    <form class="col s12" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validateForm();">
<h5>Please select user type.</h5>
    <select name="type" id="type" class="browser-default">
<option value="default">Select</option>
<option value="admin">Administrator</option>
<option value="emp">Employee</option>
<option value="client">Customer</option>
</select>
      <div align="center">
  <button class="btn waves-effect waves-light" type="submit" name="next">Next
    <i class="material-icons right">send</i>
  </button></div>
    </form>
  </div>
      </div> 
      </div> 
	<p class="copy_rights"><strong>&copy; Unique Shuttle Booking System. All Rights Reserved | Design by  Edna Gatwiri</strong></p>
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
