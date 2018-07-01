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
		<h2>Add Employee</h2>
		<div class="wrapper">
			<div id="seat-map">

  <div class="row">
    <form class="col s12" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validateForm();">
       <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="fname" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lname" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="id" required>
          <label for="last_name">Employee ID</label>
        </div>
        <div class="input-field col s6">
          <input id="icon_telephone" type="tel" class="validate" name="phone"required>
          <label for="icon_telephone">Telephone</label>
        </div>
      </div>
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
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$id=$_POST['id'];
	       $phone=$_POST['phone'];
	        
		$sql = "INSERT INTO employees (empID,fname,lname,phone,status) VALUES ('$id','$fname','$lname','$phone','free')";
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Employee Added")</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
		}
?>