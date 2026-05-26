<!DOCTYPE html>
<html>
<?php 
 include('session_customer.php');
if(!isset($_SESSION['login_customer'])){
    session_destroy();
    header("location: customerlogin.php");
}
?> 
<title>Book Car </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="assets/js/custom.js"></script> 
 <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
 <style>
    body {
            background-color: black;
            color: white;
        }
        /* Adjust any other specific elements as needed */
        .navbar {
            background-color: black; /* Update navbar background */
        }
        .navbar-custom .navbar-brand {
            color: white; /* Navbar brand text color */
        }
        .menu-content section {
            color: yellow; /* Change the text color of the section within .menu-content */
        }
        .menu-content a {
            color: yellow; /* Change the color of links within .menu-content */
        }
        .sub-menu a {
            color: yellow; /* Change the color of links within .sub-menu */
        }
        .navbar-nav > li > a {
            color: white; /* Change the text color of list items in the navbar */
        }
        .highlight {
        color: rgb(0, 0, 0); /* Text color */
        background-color: #FFA500; /* Yellow-Orange background color */
        padding: 3px;
        }
        .navbar-nav > li > a:hover {
        background-color: #FFA500; /* Darker shade of Ferrari Red */
        }
        .navbar-main-collapse ul.nav.navbar-nav li a:hover {
        color: #FFA500; /* Change text color on hover */
        background-color: black; /* Change background color on hover */
        }
        .fixed-top-scrolled {
        background-color: black;
        transition: background-color 0.3s ease-in-out;
        }
        /* Default navbar styles */
        .navbar-custom {
        background-color: transparent;
        transition: background-color 0.3s ease-in-out;
        }

/* Styles for the navbar when scrolled */
        .navbar-custom.fixed-top-scrolled {
        background-color: black;
        }

/* Text color for the links when navbar is scrolled */
        .navbar-custom.fixed-top-scrolled .navbar-nav > li > a {
        color: black;
        }
        /* Text color for the links when navbar is scrolled */
        .navbar-custom.fixed-top-scrolled .navbar-brand {
        color: black;
        }
        /* CSS for dropdown items */
        .dropdown-menu li a {
        color: black; /* Set the text color to black */
        background-color: transparent !important; /* Set the background color to white */
        }

/* Adjust the text color of dropdown menu links on hover */
        .dropdown-menu li a:hover {
        color: #FFA500; /* Change text color on hover */
        background-color: transparent !important; /* Change background color on hover to white */
        }
        
        .jumbotron {
        background-color: black; /* Set the background color to black */
        border: none; /* Remove the border */
        } /* ... (other styles can be adjusted similarly) ... */
        /* Set background color to black when hovering on dropdown links */

        /* Set background color for Vehicles link to transparent */
/* Set background color for Vehicles link to transparent */
.navbar-nav > li > ul.dropdown-menu > li > a[href="prereturncar.php"]:hover ~ a.dropdown-toggle,
.navbar-nav > li > ul.dropdown-menu > li > a[href="mybookings.php"]:hover ~ a.dropdown-toggle {
    background-color: transparent !important;
}
/* Add this CSS to your existing styles */
/* Update your existing CSS with these styles */
.navbar-nav > li > .dropdown-menu {
    display: none; /* Hide the dropdown by default */
    position: absolute;
    z-index: 1000;
    background-color: white; /* Dropdown background color */
    color: black; /* Text color in the dropdown menu */
    padding: 10px;
}

.navbar-nav > li:hover > .dropdown-menu {
    display: block; /* Display the dropdown when the parent link is hovered */
}

.navbar-nav > li > a.dropdown-toggle:focus + .dropdown-menu,
.navbar-nav > li > a.dropdown-toggle:active + .dropdown-menu {
    display: block; /* Display the dropdown on focus or click */
}
    </style>
</head>
<body ng-app="" style="background-color: black;"> 


      <!-- Navigation -->
     <!-- Navigation -->
     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background-color: black; color: white;">
        <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" style="font-weight: bold" href="index.php">
    Car Rental <span class="highlight" style="font-weight: bold;">Hub</span>
</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercar.php">Add Car</a></li>
              <li> <a href="enterdriver.php"> Add Driver</a></li>
              <li> <a href="clientview.php">View</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
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
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Hi, <?php echo $_SESSION['login_customer']; ?>!</a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Vehicles <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Signout</a>
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
      <div class="form-area">
        <form role="form" action="bookingconfirm.php" method="POST">
        <br style="clear: both">
          <br>

        <?php
        $car_id = $_GET["id"];
        $sql1 = "SELECT * FROM cars WHERE car_id = '$car_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $car_name = $row1["car_name"];
                $car_nameplate = $row1["car_nameplate"];
                $ac_price = $row1["ac_price"];
                $non_ac_price = $row1["non_ac_price"];
                $ac_price_per_day = $row1["ac_price_per_day"];
                $non_ac_price_per_day = $row1["non_ac_price_per_day"];
            }
        }

        ?>

          <!-- <div class="form-group"> -->
              <h5> Selected Car:&nbsp;  <b><?php echo($car_name);?></b></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Number Plate:&nbsp;<b> <?php echo($car_nameplate);?></b></h5>
          <!-- </div>      -->
        <!-- <div class="form-group"> -->
        <?php $today = date("Y-m-d") ?>
        <label><h5 style="color: black;">Start Date:</h5></label>
<input type="date" name="rent_start_date" min="<?php echo($today);?>" required="" style="color: black;">
&nbsp; 
<label><h5 style="color: black;">End Date:</h5></label>
<input type="date" name="rent_end_date" min="<?php echo($today);?>" required="" style="color: black;">

        <!-- </div>      -->
        
        <h5> Choose your car type:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="ac" ng-model="myVar"> <b>With AC </b>&nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="non_ac" ng-model="myVar"><b>With-Out AC </b>
                
        
        <div ng-switch="myVar"> 
        <div ng-switch-default>
                    <!-- <div class="form-group"> -->
                <h5>Fare: <h5>    
                <!-- </div>    -->
                     </div>
                    <div ng-switch-when="ac">
                    <!-- <div class="form-group"> -->
                <h5>Fare: <b><?php echo("Php. " . $ac_price . "/km and Php. " . $ac_price_per_day . "/day");?></b><h5>    
                <!-- </div>    -->
                     </div>
                     <div ng-switch-when="non_ac">
                     <!-- <div class="form-group"> -->
                <h5>Fare: <b><?php echo("Php. " . $non_ac_price . "/km and Php. " . $non_ac_price_per_day . "/day");?></b><h5>    
                <!-- </div>   -->
                     </div>
        </div>

         <h5> Charge type:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="km"><b> per KM</b> &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="days"><b> per day</b>

            <br><br>
                <!-- <form class="form-group"> -->
                Select a driver: &nbsp;
                <select name="driver_id_from_dropdown" ng-model="myVar1">
                        <?php
                        $sql2 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        $result2 = mysqli_query($conn, $sql2);

                        if(mysqli_num_rows($result2) > 0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                $driver_id = $row2["driver_id"];
                                $driver_name = $row2["driver_name"];
                                $driver_gender = $row2["driver_gender"];
                                $driver_phone = $row2["driver_phone"];
                    ?>
  

                    <option value="<?php echo($driver_id); ?>"><?php echo($driver_name); ?>
                   

                    <?php }} 
                    else{
                        ?>
                    Sorry! No Drivers are currently available, try again later...
                        <?php
                    }
                    ?>
                </select>
                <!-- </form> -->
                <div ng-switch="myVar1">
                

                <?php
                        $sql3 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        $result3 = mysqli_query($conn, $sql3);

                        if(mysqli_num_rows($result3) > 0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                $driver_id = $row3["driver_id"];
                                $driver_name = $row3["driver_name"];
                                $driver_gender = $row3["driver_gender"];
                                $driver_phone = $row3["driver_phone"];

                ?>

                <div ng-switch-when="<?php echo($driver_id); ?>">
                    <h5>Driver Name:&nbsp; <b><?php echo($driver_name); ?></b></h5>
                    <p>Gender:&nbsp; <b><?php echo($driver_gender); ?></b> </p>
                    <p>Contact:&nbsp; <b><?php echo($driver_phone); ?></b> </p>
                </div>
                <?php }} ?>
                </div>
                <input type="hidden" name="hidden_carid" value="<?php echo $car_id; ?>">
                
         
           <input type="submit"name="submit" value="Rent Now" class="btn btn-warning pull-right">     
        </form>
        
      </div>
      <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6 style="color: white;"><strong>Note:</strong> You will be charged with extra <span class="text-danger">Php. 500</span> for each day after the due date ends.</h6>
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