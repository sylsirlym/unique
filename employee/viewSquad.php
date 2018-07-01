 <?php require '../resources/connect.php';
session_start();
$name=$_SESSION['name'];
$emp=$_SESSION['empID'];
$date=date('Y-m-d');
$vehi="SELECT regNo FROM vehicle WHERE driver='$emp'";
$que_vehi=mysqli_query($conn,$vehi);
while($rows=mysqli_fetch_array($que_vehi))
{
	$vehicle=$rows['regNo'];
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
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="../css/jquery.seat-charts.css">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
</head>
<body>
<?php include 'empHeader.php';?>
<div class="content">
	<h1>Unique Shuttle</h1>
	<div class="mainrep">
		<h2>Welcome <?php echo $name?></h2>
        <h3 align="center">This is your todays trip</h3>
		<div class="wrapper">
			<div id="seat-map">

   <div class="row" align="center">
  <table class="highlight">
  <tr bgcolor="#0000FF">
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Pickup Location</th>
    <th scope="col">Phone</th>
    <th scope="col">Seats</th>
  </tr>

  <?php
 $rou="SELECT username,pickup_loc,seats FROM booking WHERE vehicle='$vehicle' AND date='$date'";
$que_rou=mysqli_query($conn,$rou);
while($rows=mysqli_fetch_array($que_rou))
{
	$username=$rows['username'];
	$loc=$rows['pickup_loc'];
$seats=$rows['seats'];
	$user_sel="SELECT * FROM customers  WHERE username='$username'";
		$que_user_sel=mysqli_query($conn,$user_sel);
if($row = mysqli_fetch_array($que_user_sel)) {
	$fname=$row['fname'];
	$lname=$row['lname'];
	$phone=$row['phone'];
	?>
    

  <tr>
    <td><?php echo $fname;?></td>
    <td><?php echo $lname;?></td>
    <td><?php echo $loc;?></td>
    <td><?php echo $phone;?></td>
    <td><?php echo $seats;?></td>
  </tr>

	<?php }
	
		else {
		echo '<script language=javascript>alert("No users selected")</script>';
		
		}
}
?>
</table>
    </form>
  </div>
      </div> 
      </div> 
	<p class="copy_rights"><strong>&copy; Unique Shuttle Booking System. All Rights Reserved | Design by  Edna Gatwiri</strong></p>
</div>
</div>
</div>
<script src="../assets/js/jqueryui.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>
