<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Hub</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
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
        color: white;
        }
        /* Text color for the links when navbar is scrolled */
        .navbar-custom.fixed-top-scrolled .navbar-brand {
        color: white;
        }
        /* CSS for dropdown items */
        .dropdown-menu li a {
        color: black; /* Set the text color to black */
        background-color: white !important; /* Set the background color to white */
        }

/* Adjust the text color of dropdown menu links on hover */
        .dropdown-menu li a:hover {
        color: #FFA500; /* Change text color on hover */
        background-color: white !important; /* Change background color on hover to white */
        }




        /* ... (other styles can be adjusted similarly) ... */
    </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top fixed-top-scrolled" role="navigation">
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
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Hi, <?php echo $_SESSION['login_client']; ?><span>!</span></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Dashboard <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercar.php">Add Car</a></li>
              <li> <a href="enterdriver.php"> Add Driver</a></li>
              <li> <a href="clientview.php">View</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a>
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
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Hi, <?php echo $_SESSION['login_customer']; ?><span>!</span></a>
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
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>     sign out</a>
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
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">ADMIN</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">USER</a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br>
    <br>
    <br>

    <div id="sec2" style="color: #777;background-color:black;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="font-weight: bold; text-align: center; color: white;">Available <span class="highlight" style="font-weight: bold" >Cars</span></h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $ac_price = $row1["ac_price"];
                    $ac_price_per_day = $row1["ac_price_per_day"];
                    $non_ac_price = $row1["non_ac_price"];
                    $non_ac_price_per_day = $row1["non_ac_price_per_day"];
                    $car_img = $row1["car_img"];
               
                    ?>
            <a href="booking.php?id=<?php echo($car_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $car_name; ?> </b></h5>
            <h6> AC Fare: <?php echo ("Php. " . $ac_price . "/km & Php." . $ac_price_per_day . "/day"); ?></h6>
            <h6> Non-AC Fare: <?php echo ("Php. " . $non_ac_price . "/km & Php." . $non_ac_price_per_day . "/day"); ?></h6>

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No cars available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>
    
    <!-- Container (Contact Section) -->
    <!-- -->
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?> Car Rental Hub</h5>
                </div>
                
            </div>
        </div>
    </footer>
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-custom');
        if (window.scrollY > 50) {
            navbar.classList.add('fixed-top-scrolled');
        } else {
            navbar.classList.remove('fixed-top-scrolled');
        }
    });
</script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>