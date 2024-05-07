<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>

<assets>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K'Otieno Car Rental</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="../assets/css/customer.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black; padding:20px;">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"
                    style="border-width:1px; font-size:50px; color:white; letter-spacing:3px;">
                    KCR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" style="color:white;">Home</a>
                    </li>
                    <li>
                        <a href="#" style="color:white;"><span class="glyphicon glyphicon-user"
                                style="color:white;"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" style="color:red;" class="dropdown-toggle active" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false" style="color:red;"><span
                                        class="glyphicon glyphicon-user"></span> Control Panel <span
                                        class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="entercar.php" style="color:red">Add Car</a></li>
                                    <li> <a href="enterdriver.php" style="color:red"> Add Driver</a></li>
                                    <li> <a href="clientview.php" style="color:red">View</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php" style="color:white;"><span class="glyphicon glyphicon-log-out"></span>
                            Logout</a>
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
                        <a href="index.php" style="color:white;">Home</a>
                    </li>
                    <li>
                        <a href="#" style="color:red;"><span class="glyphicon glyphicon-user"></span> Welcome
                            <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" style="color:red;"> Garagge <span
                                    class="caret"></span> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="prereturncar.php">Return Now</a></li>
                                <li> <a href="mybookings.php"> My Bookings</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li>
                        <a href="logout.php" style="color:white;"><span class="glyphicon glyphicon-log-out"></span>
                            Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>
<div class="collapse navbar-collapse navbar-right navbar-main-collapse home-page links" style="padding:20px 20px;">
                   <a href="#" style="color:red;">Home</a>
                  <a href="clientlogin.php" style="color:white;letter-spacing:3px;">client</a>
                  <a href="customerlogin.php" style="color:white; letter-spacing:3px;">customer</a>
                  <a href="faq/index.php" style="color:white; letter-spacing:3px;">FAQ</a>
            </div>
            <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="bgimg-1">

        <div>
            <span class="border" style="background-color:transparent;font-size:25px;color:white;"></span>
        </div>
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color:white">The Best Car Rental Company</h1>
                            <p style="color:white; font-weight:; font: ;">
                                Advance your travelling with K'Otieno car Company<br>
                                Scroll down to hire your dream car or just click the arrow button </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="services">
        <div class="heading">
            <h1 style="color:#cea800;">Our Services</h1>
            <h2>Here is a list of services that are offered at K'Otieno car Rental Comany</h2>
        </div>
        <div class="row">
            <div class="services-row">
                <ul>
                    <li>
                        <h3 style="color:#cea800;">Car renting opportunities</h3>
                        <p>K'Otieno company gives every one an opportunity to rent his or her car at benafitable
                            costs.<br>You may have two or more cars and you may like to have them for hiring,
                            K'O tieno company is the best place for you</p>
                    </li>
                    <li>
                        <h3 style="color:#cea800;">Driving opportunities</h3>
                        <p>Are you a driver?Here is your oppotunity,what you need to do is just <br>post your details at
                            the client,add driver webpage and there you go</p>
                    </li>
                    <li>
                        <h3 style="color:#cea800;">Car hiring</h3>
                        <p>You are a customer who is looking for best car hiring offers, you are in the best place i
                            tell you<br>
                            Just visit the customer webpage by clicking the arrow button and hire your dream car</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </section>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center; color:#cea800;" style="font-size:25px;">Currently Available Cars</h3><br>

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
                    <h5> <?php echo $car_name; ?> </h5>
                    <h6> AC Fare: <?php echo ("Ksh." . $ac_price . "/km & Ksh." . $ac_price_per_day . "/day"); ?></h6>
                    <h6> Non-AC Fare:
                        <?php echo ("Ksh." . $non_ac_price . "/km & Ksh." . $non_ac_price_per_day . "/day"); ?></h6>


                </div>
            </a>
            <?php }}
            else {
                ?>
            <h1> No cars available at the moment</h1>
            <?php
            }
            ?>
        </section>

    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>

    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p><a href="mybookings.php">Click here for the latest deals on your bookings</a></p>
        </div>
    </div>
    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">WHERE WE WORK</h3>
        <p class="w3-center"><em>We love your feedback!</em></p>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> K'OTIENO,
                    KISUMU<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +254
                    111709831<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email:
                    otienoerick698@gmail.com<br>
                </div>
                <p>New to K'Otieno System ? Drop Your Details and Leave it on us We'll Revert</p>
                <form action="action_page.php" method="POST">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="e_mail">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>&copy; 2022 K'Otieno Car Rental</h5>
                </div>
                <div class="col-sm-6 social-icons">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
    function myMap() {
        myCenter = new google.maps.LatLng();
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap"
        type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>