<?php require '../resources/connect.php';?>
 <?php
 // Start the session
session_start();
if($_SESSION["uname"]==""){
	header("Location: adm_login.php");
	}
	$name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Unique Shuttle | Online Booking System</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>

      <link rel="stylesheet" href="css/dashboard.css">

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body background="images/banner.jpg">

  

  <ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
      <div class="indigo darken-2 white-text" style="height: 180px;">
        <div class="row">
          <img style="margin-top: 5%;" width="100" height="100" src="images/logo.png" class="circle responsive-img" />

          <p style="margin-top: -13%;">
            <h4><?php echo $name;?></h4>
          </p>
        </div>
      </div>
    </li>

    <li id="dash_dashboard"><a class="waves-effect" href="adm_index.php"><b>Dashboard</b></a></li>

    <ul class="collapsible" data-collapsible="accordion">
      <li id="dash_users">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Management</b></div>
        <div id="dash_users_body" class="collapsible-body">
          <ul>
            <li id="users_seller">
              <a class="waves-effect" style="text-decoration: none;" href="addRoute.php">Add Route</a>
            </li>
 <li id="users_seller">
              <a class="waves-effect" style="text-decoration: none;" href="addVehicle.php">Add Vehicle</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_products">
        <div id="dash_products_header" class="collapsible-header waves-effect"><b>Users</b></div>
        <div id="dash_products_body" class="collapsible-body">
          <ul>
            <li id="products_product">
              <a class="waves-effect" style="text-decoration: none;" href="viewCustomer.php">View Customers</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="addEmployee.php">Add Employees</a>
            </li>
            
          </ul>
        </div>
      </li>

      <li id="dash_categories">
        <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Orders</b></div>
        <div id="dash_categories_body" class="collapsible-body">
          <ul>
            <li id="categories_category">
              <a class="waves-effect" style="text-decoration: none;" href="viewBookings.php">Bookings</a>
            </li>

            
          </ul>
        </div>
      </li>

      <li id="dash_brands">
        <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Payments</b></div>
        <div id="dash_brands_body" class="collapsible-body">
          <ul>
          

            <li id="brands_brand">
              <a class="waves-effect" style="text-decoration: none;" href="confirmPayment.php">View/Confirm Payments</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </ul>

  <header>
    <ul class="dropdown-content" id="user_dropdown">
      <li><a class="indigo-text" href="logout.php">Logout</a></li>
    </ul>

    <nav class="indigo" role="navigation">
      <div class="nav-wrapper">
      
        <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><marquee>Unique: Online Reservation System</marquee></a>

        <ul class="right hide-on-med-and-down">
          <li>
            <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
          </li>
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>

    <nav>
      <div class="nav-wrapper indigo darken-2">
        <a style="margin-left: 20px;" class="breadcrumb" href="#!">Logged In as: Admin</a>
        <a class="breadcrumb" href="#!"><?php echo $name;?></a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
      </div>
    </nav>
  </header>

  <main>
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
             <b>Management</b>
            </div>
          </div>

         <div class="row">
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="addRoute.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="images/management.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Route</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>User Management</b>
            </div>
          </div>
        <div class="row">
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>
            <a href="viewCustomer.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="images/customer.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Customer</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Order Management</b>
            </div>
          </div>

       <div class="row">
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>
            <a href="viewBookings.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="images/orders.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Bookings</h5></span>
              </div>
            </a>

          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Payment Management</b>
            </div>
          </div>
         <div class="row">
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>
            <a href="viewPayments.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="images/payment.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Payment</h5></span>
              </div>
            </a>
           </div>
        </div>
      </div>
    </div>

    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large pink waves-effect waves-light">
        <i class="large material-icons">add</i>
      </a>

      <ul>
         <li>
          <a class="btn-floating green"><i class="material-icons">view_list</i></a>
          <a href="viewBookings.php" class="btn-floating fab-tip" style="background-color: #0F6">View Bookings</a>
        </li>

        <li>
          <a class="btn-floating blue"><i class="material-icons">store</i></a>
          <a href="addRoute.php" class="btn-floating fab-tip" style="background-color: #00F">Add route</a>
        </li>
        
         <li>
          <a class="btn-floating yellow darken-1"><i class="material-icons">payment</i></a>
          <a href="viewPayments.php" class="btn-floating fab-tip" style="background-color: #CF3">View/Confirm Payments</a>
        </li>

      
      </ul>
    </div>
  </main>

  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Unique Shuttle</h5>
          <ul id='credits'>
            <li>
              <h6>Welcome to Unique Shuttle</h6> 
            </li>
            <li>
              <p>Short hotel decsription: </p></br>
             
            </li>
            <li>
               <p>Location:</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <span><a style='font-weight: bold;' href=""><?php echo $name?></a></span>
      </div>
    </div>
  </footer>
</body>

</html>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>

    <script src="js/dashboard.js"></script>

</body>
</html>
