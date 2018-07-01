<?php
$servername = "localhost";
$username = "root";
$password = "Secrets";
$DB="unique";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$DB);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
?> 