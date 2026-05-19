<html>

<head>
    <title> Admin Signup | Car Rental Hub  </title>
    <style>
    .highlight {
        background-color: #FFA500; /* Add this line to change the background color */
    }
    
    .input-group-btn .btn-primary {
        background-color: transparent;
        border-color: transparent; /* Optionally, remove border color */
    }

    /* Adjust the color of the glyphicon */
    .input-group-btn .btn-primary .glyphicon-user {
        color: transparent; /* Change glyphicon color */
    }

    /* On hover, remove output or maintain transparency */
    .input-group-btn .btn-primary:hover {
        background-color: transparent !important;
        border-color: transparent !important;
        box-shadow: none !important;
    }

    .panel-heading {
        background-color: yellow; /* Change to yellow */
        color: white;
    }
    
    .panel-primary > .panel-heading {
        background-color: #FFA500 !important; /* Change to yellow with higher priority */
        color: white;
    }
    .navbar-brand .highlight {
        color: black !important;
    }

    /* On hover, maintain the same color */
    .navbar-brand .highlight:hover {
        color: black !important;
    }

</style>

</head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
<body style="background-color: black;">
     <!-- Navigation -->
     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black; background-color:black;">
        <div class="container">
        <div class="container">
        <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand page-scroll" style="font-weight: bold;" href="index.php">
    <span style="color: white;">Car Rental</span> <span class="highlight" style="font-weight: bold;">Hub</span>
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
            <a href="index.php" style="color: white;">HOME</a>
        </li>
        <li>
            <a href="clientlogin.php" style="color: white;">ADMIN</a>
        </li>
        <li>
            <a href="customerlogin.php" style="color: white;">USER</a>
        </li>
    </ul>
</div>


<?php   }
?>
         <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container" style="background-color: black;">
    <div class="jumbotron" style="background-color: black; color: white; border: none;">
        <h1 class="text-center">Create Account</h1>
        <style>
            h1 {
                font-size: 3em;
                font-weight: bold;
            }
        </style>
        <br>
        <p class="text-center">Fill up your information</p>
    </div>
</div>


    <div class="container" style="margin-top: -1%; margin-bottom: 2%;">
        <div class="col-md-5 col-md-offset-4">
        <div class="panel panel-primary">
    <div class="panel-heading">Create Account</div>
                <div class="panel-body">

                    <form role="form" action="client_registered_success.php" method="POST">

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_name"><span class="text-danger" style="margin-right: 5px;"></span> Full Name: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_name" type="text" name="client_name" placeholder="Your Full Name" required="" autofocus="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_username"><span class="text-danger" style="margin-right: 5px;"></span> Username: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_username" type="text" name="client_username" placeholder="Your Username" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_email"><span class="text-danger" style="margin-right: 5px;"></span> Email: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_email" type="email" name="client_email" placeholder="Email" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_phone"><span class="text-danger" style="margin-right: 5px;"></span> Phone: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_phone" type="text" name="client_phone" placeholder="Phone" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-contact" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_address"><span class="text-danger" style="margin-right: 5px;"></span> Address: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_address" type="text" name="client_address" placeholder="Address" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_password"><span class="text-danger" style="margin-right: 5px;"></span> Password: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_password" type="password" name="client_password" placeholder="Password" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                                <div class="form-group col-xs-12 text-center">
                                <button class="btn btn-primary" type="submit" style="background-color: #FFA500; border: 1px solid #FFA500; color: white;">Submit</button>
                                </div>
                        </div>
                        <div class="row">
    <div class="form-group col-xs-12 text-center">
        <label>or</label> <br>
        <label><a href="clientlogin.php">Have an account? <u>Login.</u></a></label>
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
            <div class="col-sm-6">
                <h5 style="color: white;">© <?php echo date("Y"); ?> Car Rental Hub</h5>
            </div>
        </div>
    </div>
</footer>

</html>