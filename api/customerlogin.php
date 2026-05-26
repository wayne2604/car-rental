<?php
$error = ''; // Initializing the variable

include('login_customer.php'); // Includes Login Script

if(isset($_SESSION['login_customer'])){
    header("location: index.php"); //Redirecting
}
?>


    <!DOCTYPE html>
    <html>

    <head>
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
        .btn-custom {
        background-color: #FFA500; /* Set the background color to yellow for the custom button */
    /* Additional button styles */
        }
        .btn-custom:hover {
        background-color: black; /* Change the background color on hover to black */
        color: white; /* Adjust text color for better visibility */
    /* Any other styles you'd like to apply on hover */
        }
        /* Adding a new class for the login button to override the background color */
        .btn-custom-custom {
        background-color: #FFA500; /* Set the background color to transparent */
        color: white; /* Text color */
        border: 1px solid #FFA500; /* Adding a border for better visibility */
        padding: 6px 12px; /* Adjust padding as needed */
        }

        .btn-custom-custom:hover {
        background-color: black; /* Change the background color on hover */
        color: white; /* Text color on hover */
    /* Any other styles you'd like to apply on hover */
        }
        .btn-custom-custom:hover,
        .btn-custom-custom:focus,
        .btn-custom-custom:active {
        background-color: black; /* Set hover, focus, and active background to transparent */
        color: white; /* Text color on hover, focus, and active */
        border-color: black; /* Adjust border color on hover, focus, and active */
    /* Any other styles you'd like to apply on hover, focus, and active */
        }
        .white-text h5 {
        color: white;
        }
        .panel-heading {
        background-color: #FFA500 !important; /* Change the background color of the panel heading */
        }
       
        .btn-primary {
        background-color: #FFA500;
        border-color: #FFA500;
        color: white;
        }

        .btn-primary:hover {
        background-color: black !important;
        border-color: black !important;
        }






        /* ... (other styles can be adjusted similarly) ... */
    </style>
        <title> Customer Login | Car Rental </title>
    </head>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <body style="background-color: black;">
                 <!-- Navigation -->
                 <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
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
            <style>
                .navbar-nav li a:hover {
                color: #FFA500 !important; /* Change text color on hover to #FFA500 */
                background-color: transparent !important; /* Remove background color on hover */
                }
            </style>

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
        <div class="container" style="background-color: black; margin-top: -15px;">
    <div class="jumbotron" style="background-color: black; border: none;">
        <h1 class="text-center" style="margin-top: -20px; color: white;">User Panel</h1>
        <style>
            h1 {
                font-size: 4.5em;
                font-weight: bold;
                color: white;
            }
        </style>
    </div>
</div>



        <div class="container" style="background-color: black; margin-top: -80px; margin-bottom: 2%;">
    <div class="col-md-6 col-md-offset-3">
        <label style="margin-left:1px;color: red;"><span> <?php echo $error; ?> </span></label>
        <div class="panel panel-primary">
            <div class="panel-heading"> LOG IN ACCOUNT </div>
            <div class="panel-body">

                <form action="" method="POST">

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="customer_username"><span class="text-danger" style="margin-right: 1px;"></span> Username: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="customer_username" type="text" name="customer_username" placeholder="Username" required="" autofocus="">
                                        <span class="input-group-btn">
                <label class="btn btn-custom-yellow"></label>
            </span>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="customer_password"><span class="text-danger" style="margin-right: 1px;"></span> Password: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="customer_password" type="password" name="customer_password" placeholder="Password" required="">
                                        <span class="input-group-btn">
                <label class="btn btn-custom-yellow"></label>
                                        </span>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
    <div class="form-group col-xs-12 text-center">
        <button class="btn btn-primary" name="submit" type="submit" value="Login" style="background-color: #FFA500; border-color: #FFA500; color:white;">
            LOGIN
        </button>
    </div>
</div>



                    <div class="row">
                        <div class="form-group col-xs-12 text-center">
                            <label style="margin-left: 5px;">or</label> <br>
                            <label style="margin-left: 5px;">No Account? <a href="customersignup.php">Create a new account.</a></label>
                        </div>
                    </div>
                </form>
            </div>
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