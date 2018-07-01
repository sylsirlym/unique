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
        <h3 align="center">Payments</h3>
		<div class="wrapper">
			<div id="seat-map">

   <div class="row" align="center">
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validateForm();">
  <table class="highlight">
  <tr bgcolor="#0000FF">
    <th scope="col" bgcolor="#0099FF">ID</th>
  <th scope="col" bgcolor="#0099FF">Transaction ID</th>
    <th scope="col" bgcolor="#0099FF">First Name</th>
    <th scope="col" bgcolor="#0099FF">Last Name</th>
    <th scope="col" bgcolor="#0099FF">Phone</th>
    <th scope="col" bgcolor="#0099FF">Booking ID</th>
    <th scope="col" bgcolor="#0099FF">Vehicle</th>
    <th scope="col" bgcolor="#0099FF">Amount</th>
    <th scope="col" bgcolor="#0099FF">Payment Phone</th>
    <th scope="col" bgcolor="#0099FF">Status</th>
    <th scope="col" bgcolor="#0099FF">Action</th>
  </tr>

  <?php
	$booking_sel="SELECT * FROM booking";
		$que_booking_sel= mysqli_query($conn,$booking_sel);
while($row = mysqli_fetch_assoc($que_booking_sel)) {
	$ID=$row['bookingID'];
	$uname=$row['username'];
	$vehicle=$row['vehicle'];
	$user_sel="SELECT * FROM customers  WHERE username='$uname'";
		$que_user_sel=mysqli_query($conn,$user_sel);
while($row = mysqli_fetch_assoc($que_user_sel)) {
	$fname=$row['fname'];
	$lname=$row['lname'];
	$phone=$row['phone'];
	$pay_sel="SELECT * FROM payment  WHERE bookingID='$ID'";
	$que_pay_sel=mysqli_query($conn,$pay_sel);
while($row = mysqli_fetch_assoc($que_pay_sel)) {
	$pID=$row['paymentID'];
	$tID=$row['transactionID'];
	$amt=$row['price'];
	$payphone=$row['phone'];
	$status=$row['status'];
	?>
    

  <tr>
    <td><?php echo $pID;?></td>
  <td><?php echo $tID;?></td>
    <td><?php echo $fname;?></td>
    <td><?php echo $lname;?></td>
    <td><?php echo $phone;?></td>
    <td><?php echo $ID;?></td>
    <td><?php echo $vehicle;?></td>
    <td><?php echo $amt;?></td>
    <td><?php echo $payphone;?></td>
    <td><?php echo $status;?></td>
    <td> <input name='select' type='radio' class="radio"  value='<?php echo $pID;?>' id='radio'><label for='radio'>Select Payment</label></td>
  </tr>

	<?php }
}
}

?>
</table>
<button class="btn waves-effect waves-light" type="submit" name="confirm" id="confirm">Confirm Payment</button>
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
<?php
if(isset($_POST['confirm']))
 {
$payID=$_POST['select'];
$update_room="UPDATE payment SET status='confirmed' WHERE paymentID='$payID'";
if (mysqli_query($conn, $update_room)) {
		echo '<script language=javascript>alert("Payment Confrimed")</script>';
		
}
else {
    echo "Error: " . $update_room . "<br>" . mysqli_error($conn);
}
 }
?>