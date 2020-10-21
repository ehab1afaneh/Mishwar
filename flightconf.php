<?php

session_start();
$status = '0' ;
if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
    $email = $_SESSION['email'] ;
    $name = $_SESSION['name'] ;
    $country = $_SESSION['country'] ;
}
else {
    header("location: ./Login_v3/login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['lat'])) {
        $myusername =  $_GET['lat'];
    }
    if(isset($_GET['status'])) {
        $status = $_GET['status'] ;

    }

}
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flights</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<script>
    function f1() {
        var status = '<?php echo $status?> ';
        var test = status.localeCompare('0');

        if (test != 0) {




            if (status == 6) {
                yfe();
            }
        }
    }
    f1() ;
    function yfe() {
        swal(
            'Sorry!',
            'Error When Booked Flight',
            'error'
        );
    }
    </script>
<style>

    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
        color: wheat;
        background-color: #0b0b0b;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* The actual popup */
    .popup .popuptext {
        visibility: hidden;
        height: 250px;
        width: 250px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 4;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class - hide and show the popup */
    .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 2s;
        animation: fadeIn 2s;
    }
    .pupup .popupclose       { position: absolute; top: 20px; right: 30px; transition: all 200ms;
        font-size: 30px; font-weight: bold; text-decoration: none; color: #333; }
    .popup.popupclose:hover { color: orange; }

    @-webkit-keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;} }



    }
</style>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="indexphp.php">Mishwar</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>

                            <li>
                                <a href="indexphp.php">Home</a>

                            </li>
                            <li><a href="plan.php">My Plan</a></li>
                            <li ><a href="hotels.php">Hotels</a></li>
                            <li><a href="services.php">Services</a></li>

                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="has-dropdown" >
                                <a href="#"> <?php echo  $name?> <i class="fa fa-sort-desc " style="margin-top: 20px;" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li style="display: flex;"><a href=".\Login_v3\login.php?status=logout" target="_self"><i class="fa fa-sign-out out" aria-hidden="true"></i>  Log-out</a>

                                        <style>
                                            /*.out{
                                                color: #ffffff;
                                                margin-left: 5px;
                                               }*/
                                        </style>
                                    </li>
                                    <li><a href="profile/MyProfile.php"><i class="fa fa-user-circle-o out" aria-hidden="true"></i>  My Profile</a></li>
                                    <li><a href="contact.php"><i class="fa fa-question-circle-o out" aria-hidden="true"></i>  Help</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero" style =" margin-bottom:10% ">
        <div class="flexslider">
            <ul class="slides" >
                <li style="background-image: url(images/fg.png);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Mishwar</h2>
                                    <h1>Book your Fights</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div class="colorlib-services">

        <div class="tour-wrap"style="text-align:center">
            <div class="row" >
                <div class="col-md-1"></div>
                <div class="col-md-10" style="background-color:#f7f7f7">
                    <div>
                        <div class="col-md-12" style="padding:5%;background-color:#f7f7f7">
                            <div style="text-align:center; margin-bottom:12%;">
                                <h2 class="h22">airplanes taking off on this day</h2>
                                <p style="border-bottom-style: groove;"></p>
                            </div>
                            <style>
                                .h22{
                                    font-size: 36px;
                                    color: #222222;
                                    text-transform: uppercase;
                                    text-align: center;
                                    border: 2px groove #454545;
                                    border-bottom:none;
                                    display: inline-block;
                                    line-height: 58px;
                                    padding: 0px 23px;
                                    margin-bottom: 0%;

                                }
                            </style>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";

                            // Create connection
                            $conn = new mysqli("localhost", "root", "", "mishwar");

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            //echo "Connected successfully";
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // username and password sent from form

                                $location_to =  $_POST['location_to'];
                                $location_from =  $_POST['location_from'];
                                $guest = $_POST['guest'] ;
                                $page_from = $_POST['page_from'] ;
                                $check =date('Y-m-d', strtotime($_POST['check_in']));

                                $sql = "SELECT * FROM `flights` WHERE `travel_from` = '".$location_from."' and `travel_to` = '".$location_to."' and `date_take_of` = '".$check."'";
                                $result = mysqli_query($conn, $sql);
                                // if($result->num_rows>0){echo "suc1";}
                                if (!$result) {

                                    exit();
                                }


                                while($row=mysqli_fetch_assoc($result)){


                                    echo ' <div class="col-md-10" style="width:100%;margin-bottom:5%;border-bottom-style: groove;padding-bottom:5% "><div class="col-md-3"> <div  class="tour-img" style="border:2px inset #656565;width:90px;height:90px;background-image: url(images/flig.jpg);"></div></div>';
                                    echo ' <div class="col-md-5">';
                                    echo '<h3><i class="fa fa-plane" aria-hidden="true"></i> '.$row['the_airport'].'</h3>';
                                    echo '<h4><i class="fa fa-globe" aria-hidden="true"></i>  Palestine</h4></div>';
                                    echo '<div class="col-md-3" style="color:#454545"><p><i class="fa fa-clock-o" aria-hidden="true"></i> at: '.$row['time'].'</p>';
                                    echo ' Price: $'.$row['price'].'</div>';
                                    echo '<div class="col-md-1">
            <form method="GET" action="bookfly.php">
            <input type="hidden" name="loca" value="'.$location_to.'">
            <input type="hidden" name="check" value="'.$check.'">
            <input type="hidden" name="email" value="'.$email.'">
            <input type="hidden" name="time" value="'.$row['time'].'">
            <input type="hidden" name="price" value="'.$row['price'].'">
            <input type="hidden" name="id_f" value="'.$row['id'].'">
            <input type="hidden" name="page_from" value="'.$page_from.'">
            <input type="submit" name="book" style="margin-top:50%;background-color:#454545;color:#f7f7f7;border:none "  value="Book" class="btn">
            </form>
            </div>';


                                    echo '</div>';
                                    // echo $row;
                                }

                            }



                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer_area" style="background-color: #000000;">
    <div class="footer_copyright"  style="color: #FFFFFF;height: 30%">
        <div class="container">
            <div class="pull-left" style="color: #FFFFFF;font-size: 16px;margin-top: 3%">
                <h5><p style="color: #FFFFFF;font-size: 12px"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;<script>document.write(new Date().getFullYear());</script> <a href="indexphp.php" target="_blank">Mishwar</a> , All rights reserved .
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p></h5>
            </div>
            <div class="pull-right">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="profile/MyProfile.php">My Account</a></li>
                    <li><a href="#">EN</a></li>
                    <li><a href="#">USD</a></li>
                    <li><a href="Login_v3/login.php?status=logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>

<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>


