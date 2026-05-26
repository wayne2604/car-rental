<!DOCTYPE html>
<?php 
session_start();
require 'connection.php';
$conn = Connect();
?>
<head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
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
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
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
    <li>
        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehicles <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="prereturncar.php">Return Now</a></li>
            <li><a href="mybookings.php">My Bookings</a></li>
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
 
<?php $login_customer = $_SESSION['login_customer']; 

    $sql1 = "SELECT * FROM rentedcars rc, cars c
    WHERE rc.customer_username='$login_customer' AND c.car_id=rc.car_id AND rc.return_status='R'";
    $result1 = $conn->query($sql1);

    if (mysqli_num_rows($result1) > 0) {
?>
<div class="container">
      <div class="jumbotron">
        <h1 class="text-center">Your Bookings</h1>
        <p class="text-center"> Hope you enjoyed our service </p>
      </div>
    </div>

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;">
    <table class="table table-striped" style="background-color: white; color: black;">
    <thead class="thead-dark" style="background-color: black; color: white;">
            <tr>
                <th width="15%">Car</th>
                <th width="15%">Start Date</th>
                <th width="15%">End Date</th>
                <th width="10%">Fare</th>
                <th width="15%">Distance (kms)</th>
                <th width="15%">Number of Days</th>
                <th width="15%">Total Amount</th>
            </tr>
        </thead>
        <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
            <tr>
                <td><?php echo $row["car_name"]; ?></td>
                <td><?php echo $row["rent_start_date"] ?></td>
                <td><?php echo $row["rent_end_date"]; ?></td>
                <td>Php. <?php
                            if ($row["charge_type"] == "days") {
                                echo ($row["fare"] . "/day");
                            } else {
                                echo ($row["fare"] . "/km");
                            }
                            ?></td>
                <td><?php if ($row["charge_type"] == "days") {
                            echo ("-");
                        } else {
                            echo ($row["distance"]);
                        } ?></td>
                <td><?php echo $row["no_of_days"]; ?> </td>
                <td>Php. <?php echo $row["total_amount"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
 
        <?php } else {
            ?>
        <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">You have not rented any cars till now!</h1>
        <p class="text-center"> Please rent cars in order to view your data here. </p>
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