<!DOCTYPE html>
<html>
<?php 
session_start();
require 'connection.php';
$conn = Connect();
?>
<head>
<style>
    .navbar {
    background-color: black;
    color: white;
    }
    .navbar-nav > li > a:hover {
        background-color: transparent !important; /* Change background color on hover */
        color: #FFA500 !important; /* Change text color on hover */
    }
    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block; /* Show dropdown menu on hover */
    }
    .dropdown-menu > li > a:hover {
        background-color: black !important; /* Change background color of dropdown items on hover */
        color: #FFA500 !important; /* Change text color of dropdown items on hover */
    }
    .navbar-nav .dropdown .dropdown-toggle::after {
        background-color: transparent !important; /* Keep the caret color transparent */
    }
    .navbar-nav > li.active {
        background-color: black !important; /* Keep "DASHBOARD" background black when not hovered */
    }
    .navbar-nav > li.active > a {
        color: #FFA500 !important; /* Keep "DASHBOARD" text color orange when not hovered */
    }
    .dropdown-menu {
        background-color: white !important; /* Set dropdown background color to white */
        color: black !important; /* Set dropdown text color to black */
    }
    .dropdown-menu > li > a {
        color: black !important; /* Dropdown text color */
    }
    .dropdown-menu > li > a:hover {
        background-color: transparent !important; /* Reset background color on hover */
    }
    .navbar-nav .dropdown-menu > li > a {
    font-family: 'Lato', sans-serif !important;
    /* Other styles for dropdown menu items */
    }
    .navbar-nav > li > a,
    .dropdown-menu > li > a {
        font-family: 'Lato', sans-serif;
        /* Other styles for navbar and dropdown links */
    }
    body {
    background-color: black; /* Change the entire body background to black */
    }

    .form-area {
    background-color: black; /* Change background color of the form area */
    /* Other styles for the form area */
    }
    .navbar {
            background-color: black; /* Update navbar background */
    }
    .navbar-custom .navbar-brand {
            color: white; /* Navbar brand text color */
    }
    .custom-header {
    font-family: 'Lato', sans-serif; /* Use Lato font */
    font-weight: 10; /* Set the font weight to thinner */
    color: white;
    background-color: black; /* Set the text color to white */
    }
  </style>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color: black;">
<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" style="font-weight: bold; color: white;" href="index.php">
                        Car Rental <span class="highlight" style="font-weight: bold; color: black; background-color: #FFA500;"> Hub </span>
                    </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="index.php" style="color: white;">HOME</a>
        </li>
        <li>
            <a href="#" style="color: white;"><span class="glyphicon glyphicon-user"></span> HI, <?php echo $_SESSION['login_client']; ?>!</a>
        </li>
        <li>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        <span class="glyphicon glyphicon-user"></span> DASHBOARD <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="entercar.php" style="color: black;">ADD CAR</a></li>
                        <li><a href="enterdriver.php" style="color: black;">ADD DRIVER</a></li>
                        <li><a href="clientview.php" style="color: black;">VIEW</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="logout.php" style="color: white;"><span class="glyphicon glyphicon-log-out"></span> SIGN OUT</a>
        </li>
    </ul>
</div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Employee</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="#"> FAQ </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
<?php $login_client = $_SESSION['login_client']; 

    $sql1 = "SELECT * FROM rentedcars rc, clientcars cc, customers c, cars WHERE cc.client_username = '$login_client' AND cc.car_id = rc.car_id AND rc.return_status = 'R' AND c.customer_username = rc.customer_username AND cc.car_id = cars.car_id";

    $result1 = $conn->query($sql1);

    if (mysqli_num_rows($result1) > 0) {
?>
<div class="container">
      <div class="jumbotron" style="background-color: black;  border: none;">
        <h1 style="margin-bottom: 25px; text-align: center; color: white; font-size: 50px; font-weight:bold;">Your Bookings</h1>
        <p style="margin-bottom: 25px; text-align: center; color:white; font-size: 18px; font: weight 1px;"> Here's to a delightful experience with our service </p>
      </div>
    </div>

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped" style="background-color: white;">
  <thead class="custom-header">
<tr>
<th width="20%">Car</th>
<th width="15%">Customer Name</th>
<th width="20%">Rent Start Date</th>
<th width="20%">Rent End Date</th>
<th width="10%">Distance</th>
<th width="15%">Total Amount</th>
</tr>
</thead>
<?php
        while($row = mysqli_fetch_assoc($result1)) {
?>
<tr>
<td><?php echo $row["car_name"]; ?></td>
<td><?php echo $row["customer_name"]; ?></td>
<td><?php echo $row["rent_start_date"] ?></td>
<td><?php echo $row["rent_end_date"]; ?></td>
<td><?php echo $row["distance"]; ?></td>
<td>Php. <?php echo $row["total_amount"]; ?></td>
</tr>
<?php        } ?>
                </table>
                </div> 
        <?php } else {
            ?>
        <div class="container" >
      <div class="jumbotron" style="background-color: black; color: white; border:none;">
        <h1>No booked cars</h1>
        <p> Rent some cars now <?php echo $conn->error; ?> </p>
      </div>
    </div>

            <?php
        } ?>   

</body>
<footer class="site-footer" style="color: white;">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5 style="color: white;">© <?php echo date("Y"); ?> Car Rental Hub</h5>
            </div>
        </div>
    </div>
</footer>
</html>