 <?php require '../resources/connect.php';
session_start();
$name=$_SESSION['name'];
$uname=$_SESSION['uname'];
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
<?php include 'header.php';?>
<div class="content">
	<h1>Unique Shuttle</h1>
	<div class="mainrep">
		<h2>Welcome <?php echo $name?></h2>
        <h3 align="center">Customers</h3>
		<div class="wrapper">
			<div id="seat-map">

   <div class="row" align="center">
  <table class="highlight">
  <tr bgcolor="#0000FF">
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Phone</th>
    <th scope="col">Email</th>
  </tr>

  <?php
	$user_sel="SELECT * FROM customers";
		$que_user_sel=mysqli_query($conn,$user_sel);
while($row = mysqli_fetch_array($que_user_sel)) {
	if (mysqli_num_rows($que_user_sel)!==0){
	$fname=$row['fname'];
	$lname=$row['lname'];
	$phone=$row['phone'];
	$email=$row['email'];
	?>
    

  <tr>
    <td><?php echo $fname;?></td>
    <td><?php echo $lname;?></td>
    <td><?php echo $phone;?></td>
    <td><?php echo $email;?></td>
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
