<?php
include('login_client.php'); // Includes Login Script

if(isset($_SESSION['login_client'])){
    header("location: index.php"); //Redirecting
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title> Admin Panel | Car Rental Hub </title>
        <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
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



        /* ... (other styles can be adjusted similarly) ... */
    </style>
</head>
    <body>
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


    <h1 class="text-center">Admin Panel</h1>
        <style>
            h1 {
                font-size: 4.5em;
                font-weight: bold;
                color: white;
            }
        </style>
                <br>
            

        <div class="container" style="margin-top: -2%; margin-bottom: 2%;">
            <div class="col-md-6 col-md-offset-3">
                <label style="margin-left: 1px;color: red;"><span> <?php echo $error;  ?> </span></label>
                <div class="panel panel-warning">
                    <div class="panel-heading"> LOGIN TO ACCOUNT </div>
                    <div class="panel-body">

                        <form action="" method="POST">

                        <div class="row">
    <div class="form-group col-xs-12">
        <label for="client_username" style="color: black;"><span class="text-danger" style="margin-right: 1px;"></span> Username: </label>
        <div class="input-group">
            <input class="form-control" id="client_username" type="text" name="client_username" placeholder="Username" required="" autofocus="">
            <span class="input-group-btn">
                <label class="btn btn-custom-white"></label>
            </span>
        </div>
    </div>
</div>


<div class="row">
    <div class="form-group col-xs-12">
        <label for="client_password" style="color: black;"><span class="text-danger" style="margin-right: 1px;"></span> Password: </label>
        <div class="input-group">
            <input class="form-control" id="client_password" type="password" name="client_password" placeholder="Password" required="">
            <span class="input-group-btn">
                <label class="btn btn-custom-white"></label>
            </span>
        </div>
    </div>
</div>


                            <div class="row">
    <div class="form-group col-xs-12 text-center">
        <button class="btn btn-primary btn-custom-custom" name="submit" type="submit" value=" Login">LOGIN</button>
    </div>
</div>



                                <div class="row">
                                <div class="form-group col-xs-12 text-center">
                                    <label style="margin-left: 5px; color: black;">or</label> <br>
                                    <label style="margin-left: 5px; color: black;">No Account? <u><a href="clientsignup.php" style="color: black;">Sign up</a></u></label>
                                </div>

                    </div>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6 white-text">
                    <h5>© <?php echo date("Y"); ?> Car Rental Hub</h5>
                </div>

            </div>
        </div>
    </footer>

    </html>