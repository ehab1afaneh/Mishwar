<?php



session_start();
$status = 0 ;
if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
    $email = $_SESSION['email'] ;
    $name = $_SESSION['name'] ;
    $country = $_SESSION['country'] ;
}
else {
    header("location: ./Login_v3/login.php");
}
if($_SERVER["REQUEST_METHOD"] == "GET") {
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
    <title>Contact</title>
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



            if (status == 1) {

                x();
            }
            if (status == 2) {
                y();
            }

        }
    }
    f1() ;
    function x() {
        swal(
            'Success!',
            'Your message sent successfully',
            'success'
        );
    }
    function y() {
        swal(
            'Sorry!',
            'Error while sending your message ',
            'error'
        );

    }


</script>
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
                            <li><a href="indexphp.php">Home</a></li>
                            <li class="has-dropdown">
                                <a href="plan.php">My plan</a>
                                <ul class="dropdown">
                                    <li><a href="#">Destination</a></li>
                                    <li><a href="#">Weather</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="#">Booking</a></li>
                                </ul>
                            </li>
                            <li><a href="hotels.php">Hotels</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
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
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/cover-img-3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Mishwar</h2>
                                    <h1>Contact us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box" style="text-align:center ">
                    <h2 class="h22">Get In Touch</h2>
                    <style>
                                           .h22{
                                            font-size: 36px;
                                            font-family: "Bree Serif", serif;
                                            color: #222222;
                                            text-transform: uppercase;
                                            text-align: center;
                                            border: 1px solid #222222;
                                            display: inline-block;
                                            line-height: 58px;
                                            padding: 0px 23px;
                                           }
                                            </style>
                    <form action="contactconf.php" method="post">




                        <div class="row form-group">

                            <div class="col-md-12">
                                <label for="message">Message</label>
                                <textarea style="width:100% ;height: 150px;resize:none;background-color:#fff;color:#000;font-size:15px;font-family:Bree Serif, serif;border:2px inset;border-radius:15px" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>

                    </form>
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
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>

<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>

