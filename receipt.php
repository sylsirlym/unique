<?php require 'resources/connect.php';
session_start();
if($_SESSION['uname']==""){
	header("Location: login.php");
	}
$name=$_SESSION['name'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$price=$_SESSION['price'];
	$route=$_SESSION['route'];
	$pickup=$_SESSION['pickup'];
	$seat=$_SESSION['seat'];
	$phone=$_SESSION['phone'];
	$tID=$_SESSION['tID'];
	$vehicle=$_SESSION['vehicle'];
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

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
</head>
<body>
<div class="content">
	<h1>Unique Shuttle</h1>
	<div class="main">
		<h2>Welcome <?php echo $name?></h2>
        <div id="printableArea" align="center">
        <img src="images/logo.png" class="circle">
        <h2>Unique Shuttle Booking Receipt </h2>
    
	<table style="height:10%">
  <tr>
  <td>
 <h4> Client Name: <?php echo $name;?></h4> 
  </td>
  </tr>
  <tr>
  <td>
<h4> Travel Route: <?php echo $route;?></h4> 
  </td>
  </tr>
  <tr>
  <td>
  <h4> Pick Up: <?php echo $pickup;?></h4>
  </td>
  </tr>
  <tr>
  <td>
  <h4> Pickup Date/ Time: <?php echo $date." / ".$time;?></h4>
  </td>
  </tr>
  <tr>
  <td>
  <h4> Vehicle Reg: <?php echo $vehicle;?></h4>
  </td>
  </tr>
  <tr>
  <td>
 <h4> Number of Seats: <?php echo $seat;?></h4>
  </td>
  </tr>
  <tr>
  <td>
  <h4> Price: <?php echo $price;?></h4>
  </td>
  </tr>
  <tr>
  <td>
  <h4> Phone: <?php echo $phone;?></h4>
  </td>
  </tr>
  <tr>
  <td>
  <h4> Transaction ID: <?php echo $tID;?></h4>
  </td>
  </tr>
  </table>
  </div>
  
      <div align="center">
  <button class="btn waves-effect waves-light" type="button" onclick="printDiv('printableArea')" >Print
    <i class="material-icons right">receipt</i>
  </button></div>
    </form>
  
	<p class="copy_rights"><strong>&copy; Unique Shuttle Booking System. All Rights Reserved | Design by  Edna Gatwiri</strong></p>

       </div> 
      </div>
</div>
</div>
</div>
 <script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  </script>
<script src="assets/js/jqueryui.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
