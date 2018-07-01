<?php require 'resources/connect.php';
session_start();
$name=$_SESSION['name'];
$uname=$_SESSION['uname'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$price=$_SESSION['price'];
	$book_sel="SELECT bookingID FROM booking  WHERE username='$uname'";
$que_book_sel=mysqli_query($conn,$book_sel);
while($row = mysqli_fetch_assoc($que_book_sel)) {
		$id=$row['bookingID'];
}?>
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
<?php include 'header.php';?>
<div class="content">
	<h1>Unique Shuttle</h1>
	<div class="main">
		<h2>Welcome <?php echo $name?></h2>
        <h2>Your total pay in KES: <?php echo $price;?> </h2>
    <h3>To pay the money:</h3>

1. Go to the M-PESA Menu<br>
2. Select Lipa Na Mpesa<br>
3. Select Pay Bill<br>
4. Enter business number: 0101010<br>
5. Enter account number : UNIGUE<br>
6. Enter amount in KES<br>
7. Enter M-PESA Pin<br>
8. After you receive the confirmation SMS from MPesa, enter your Mobile Number and click on Submit<br>
	<div class="wrapper">
			<div id="seat-map">

   <div class="row" align="center">
    <form class="col s12" action="" method="post" name="book" id="book">
  <div class="row">
        <div class="input-field col s12">
    <input id="phone" type="text" class="validate" name="phone" required>
          <label for="phone">Mobile Number</label>
  </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
    <input id="tid" type="text" class="validate" name="tid" required>
          <label for="tid">MPesa Transaction ID</label>
  </div>
        </div>
  
      <div align="center">
  <button class="btn waves-effect waves-light" type="submit" name="submit" id="submit">Submit
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
<script src="assets/js/jqueryui.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php 
		if(isset($_POST['submit'])){
			$phone=$_POST['phone'];
			$tID=$_POST['tid'];
	        
		$book = "INSERT INTO payment (phone,transactionID,bookingID,price,status) VALUES ('$phone','$tID','$id','$price','paid')";
if (mysqli_query($conn, $book)) {
	$_SESSION['phone']=$phone;
	$_SESSION['tID']=$tID;
    echo '<script language=javascript>alert("Payment Complete")</script>';
		echo '<script language=javascript>window.location="receipt.php"</script>';
} else {
    echo "Error: " . $book . "<br>" . mysqli_error($conn);
}
		}
		
?>