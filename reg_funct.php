<?php require 'resources/connect.php';?>
<?php 
session_start();
		if(isset($_POST['Register'])){
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$uname=$_POST['uname'];
	        $email=$_POST['email'];
	        $password=$_POST['password'];
	        $cpassword=$_POST['cpassword'];
	       $phone=$_POST['phone'];
		   if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  if($cpassword==$password){
		$sql = "INSERT INTO customers (fname,lname,username,email,password,phone) VALUES ('$fname','$lname','$uname','$email','".md5($password)."','$phone')";
if (mysqli_query($conn, $sql)) {
	$uname=$_POST['uname'];
	$name=$_POST['fname']."  ".$_POST['lname'];
$_SESSION['uname']=$uname;
$_SESSION['name']=$name;
//header("Location: welcome.php");
    echo '<script>alert("Welcome to Unique Shuttle.Account Created")</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	}
	else{
	echo '<script>alert("Passwords do not match")</script>';
	}
} else {
  echo'<script>alert("Enter a valid email address")</script>';
}
	
		}
		
?>