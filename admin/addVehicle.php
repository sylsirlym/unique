<?php require '../resources/connect.php';?>
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

<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/jquery.seat-charts.js"></script>
</head>
<body>
<?php include 'header.php';?>
<div class="content">
	<h1>Unique Shuttle</h1>
	<div class="main">
		<h2>Add a Vehicle</h2>
		<div class="wrapper">
			<div id="seat-map">

    <form class="col s12" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validateForm();">
    <div class="row">
        <div class="input-field col s12">
    <select class="browser-default" name="route">
      <option value="" disabled selected>Select a Route</option>
      <?php
$route="SELECT * FROM route";
$que_route=mysqli_query($conn,$route);
while($rows=mysqli_fetch_array($que_route))
{
	$rout=$rows['routeID'];
$desc=$rows['description'];
?>
      <option value="<?php echo $rout;?>"><?php echo $desc;?></option>
      <?php
}
?>
    </select>
  </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="reg" id="reg" type="text" class="validate" required>
          <label for="reg">Vehicle Registration Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
    <select class="browser-default" name="driver">
      <option value="" disabled selected>Assign Driver</option>
      <?php
$route="SELECT * FROM employees WHERE status='free'";
$que_route=mysqli_query($conn,$route);
while($rows=mysqli_fetch_array($que_route))
{
	$rout=$rows['empID'];
$fname=$rows['fname'];
$lname=$rows['lname'];
?>
      <option value="<?php echo $rout;?>"><?php echo $fname." ".$lname;?></option>
      <?php
}
?>
    </select>
  </div>
        </div>
        <select class="browser-default" name="time">
      <option value="" disabled selected>Assign depature time</option>
    <option value="06:00">06.00 AM</option>
    <option value="08:00">08.00 AM</option>
    <option value="10:00">10.00 AM</option>
    <option value="12:00">12.00 PM</option>
    <option value="14:00">02.00 PM</option>
    <option value="16:00">04.00 PM</option>
    <option value="18:00">06.00 PM</option>
    <option value="20:00">08.00 PM</option>
    <option value="22:00">10.00 PM</option>
    </select>
        </div>
      </div>
      <div align="center">
  <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
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
      <script type="text/javascript" src="../js/materialize.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>

</body>
</html>
<?php 
		if(isset($_POST['submit'])){
			$regNo=$_POST['reg'];
			$route=$_POST['route'];
			$driver=$_POST['driver'];
			$time=$_POST['time'];
	        
		$sql = "INSERT INTO vehicle (regNo,route,driver,time) VALUES ('$regNo','$route','$driver','$time')";
if (mysqli_query($conn, $sql)) {
	$update_room="UPDATE employees SET status='assigned' WHERE empID='$driver'";
	if (mysqli_query($conn, $update_room)) {
		echo '<script>alert("Vehicle Added")</script>';
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
		}
?>