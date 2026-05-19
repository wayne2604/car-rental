
<!DOCTYPE html>
<html>
<?php 
include('session_client.php'); ?>
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
    color: white; /* Set the text color to white */
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
<body style="background-color: black;">
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
                    <li>
                        <a href="#">History</a>
                    </li>
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

    <div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area" style="background-color: black;  border: none;">
        <form role="form" action="enterdriver1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; color:white; font-size: 50px; font-weight:bold;"> Enter Driver Details </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Driver Name " required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="dl_number" name="dl_number" placeholder="Driving License Number" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="driver_phone" name="driver_phone" placeholder="Contact" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="driver_address" name="driver_address" placeholder="Address" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="driver_gender" name="driver_gender" placeholder="Gender" required>
          </div>
          <div class="form-group text-center">
           <button type="submit" id="submit" name="submit" class="btn btn-warning" style="background-color: #FFA500; color:black; border-color: #FFA500;"> Add Driver</button> 
          </div>   
        </form>
      </div>
    </div>
    <div class="col-md-9" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px; background-color: black; border: none;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; color:white; font-size: 50px; font-weight:bold;"> My Drivers </h3>
<?php
// Storing Session
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM driver d WHERE d.client_username='$user_check' ORDER BY driver_name";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>

  <table class="table table-striped" style="background-color: black;">
    <thead class="custom-header">
      <tr>
        <th>     </th>
        <th> Name</th>
        <th> Gender </th>
        <th> License No. </th>
        <th> Contact </th>
        <th> Address </th>
        <th> Availability </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["driver_name"]; ?></td>
      <td><?php echo $row["driver_gender"]; ?></td>
      <td><?php echo $row["dl_number"]; ?></td>
      <td><?php echo $row["driver_phone"]; ?></td>
      <td><?php echo $row["driver_address"]; ?></td>
      <td><?php echo $row["driver_availability"]; ?></td>
      
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 Drivers available</center> </h4>

  <?php } ?>

        </form>

</div>        
        </div>
    </div>

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