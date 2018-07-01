<?php require '../resources/connect.php';?>
<?php
	session_start();
	if(isset($_POST['password']) && isset($_POST['user_name']) ){
		
	$usename=$_POST['user_name'];
	$usepass=$_POST['password'];

	$uname = stripslashes($usename);
	$password = stripslashes($usepass);
	$user="select * from admin where uname='$uname' and password='$password'";

	

		
	
	 $que_user = mysqli_query($conn, $user);
	 $count=mysqli_num_rows($que_user);
	 
	 if($count==1 || $count>1){
	 	while ($row = mysqli_fetch_array($que_user)) {
		$name=$row['fname']."  ".$row['lname'];
		 }// end of while
		session_regenerate_id();
		$uname=$_POST['user_name'];
		//$sessionname=$usename;
		$_SESSION['uname'] = $uname;
		$_SESSION['name']=$name;
		session_write_close();
		header("location: adm_index.php");
		
	 }
	 else{
		echo '<script language=javascript>alert("WRONG USERNAME OR PASSWORD COMBINATIONS")</script>';
		echo '<script language=javascript>window.location="adm_login.php"</script>';
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
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="../css/jquery.seat-charts.css">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/jquery.seat-charts.js"></script>
</head>
<body>
<?php include 'admHeader.php';?>
<div class="content">
	<h1>Unique Shuttle</h1>
	<div class="main">
		<h2>Admin Login</h2>
		<div class="wrapper">
			<div id="seat-map">

  <div class="row">
    <form class="col s12" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validateForm();">
      <div class="row">
        <i class="material-icons prefix">perm_identity</i>
        <div class="input-field col s12">
          <input name="user_name" id="uname" type="text" class="validate" required>
          <label for="uname">Username</label>
        </div>
      </div>
      <div class="row">
        <i class="material-icons prefix">vpn_key</i>
        <div class="input-field col s12">
          <input name="password" id="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div align="center">
  <button class="btn waves-effect waves-light" type="submit" name="">Submit
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
