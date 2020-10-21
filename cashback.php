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
session_start();
$status = '0' ;
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if(isset($_GET['status'])) {
        $status = $_GET['status'] ;
        $number = $_GET['number'] ;

    }
}
if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
    $email = $_SESSION['email'] ;
    $name = $_SESSION['name'] ;
}
else {
    header("location: ./Login_v3/login.php");
}

?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CashBack Recharge</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        a {
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #fe4;
        }

        /*---------------------------------------------*/
        h1,h2,h3,h4,h5,h6 {
            margin: 0px;
            color : #000
        }

        p {
            font-family: "Quicksand", Arial, sans-serif;;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul, li {
            margin: 0px;
            list-style-type: none;
        }
        .cco{
            font-family:"Quicksand", Arial, sans-serif;;
            font-size: 18px;
            color: #000;
            display:block;
            padding-left:40%;
            margin-bottom:5%;
            margin-top:7%;
            font-weight: 900;
        }
        .coin{
            padding:15px;
            text-align:left;
        }
        input{
            border:none
        }

        .input100 {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #CCC;
            color: #555;
            box-sizing: border-box;
            font-family: "Quicksand", Arial, sans-serif;
            font-size: 15px;
            margin-bottom:10px;
            color:#494545;
            top: 50%;
            width: 200px;
            display: inlineblock;
        &:focus {
             outline: none;
         }
        }
        .icon {
            padding: 2px;
            color:#494545;
            min-width: 30px;
            text-align: center;
        }
        .head{
            color:#000;
            margin-bottom:5%;
            padding-left:2%;
            display:inlineblock;
            font-weight: 900;
        }
        .con{
            padding-left:5%;
        }

        .container-form-btn {
            font-family: Poppins-Medium;
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

    </style>
</head>
<body>
<script>
    var number = '<?php echo $number  ?>' ;
    function f1() {
        var status = '<?php echo $status?> ';

        var test = status.localeCompare('0');

        if (test != 0) {




            if (status == 1) {
                yfs();
            }
            if (status == 2) {
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
    function yfs() {
        swal(
            'Good job!',
            'Successfully \n Tolal cash back for the user: '+number,
            'success'
        );
    }
    function x() {
        swal(
            'Good job!',
            'Your plan Successfully Saved',
            'success'
        );
    }
    function y() {
        swal(
            'Good job!',
            'Successfully delete',
            'success'
        );

    }
    function x1() {
        swal(
            'Good job!',
            'Your comment successfully Added',
            'success'
        );
    }
    function y1() {
        swal(
            'Sorry!',
            'You have already added This place in your Favorite',
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
                        <div id="colorlib-logo"><a href="admin.php?name=<?php echo $name?>">Mishwar</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>

                            <li>
                                <a href="Login_v3/login.php?status=logout" style="color:white;font-weight:900">Log Out</a>
                               
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
                <li style="background-image: url(images/bag.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div class="coin" style="background-color:#ffffff;border-radius: 20px;">
                                        <form method="GET" action="givreward.php"  >
													<span class="cco">
													 <i class="fa fa-shopping-bag" class="icon" style="margin-right:5px" ></i>
						                            CASH BACK  </span>
                                            <br>
                                            <i class="fa fa-user icon"></i>
                                            <input class="input100" type="email" name="username" placeholder="User Name" >
                                            <br>
                                            <script>
                                                function show1(x){
                                                    if(x==0){
                                                        document.getElementById('show-me').style.display='block';
                                                        document.getElementById('show').style.display='none';
                                                    }

                                                    else{
                                                        document.getElementById('show').style.display='block';
                                                        document.getElementById('show-me').style.display='none';
                                                    }
                                                    return;
                                                }
                                                function show2(x)
                                                {if (x==0){
                                                    document.getElementById("show-me").style.display = "none";
                                                    document.getElementById("show").style.display = "none";

                                                }
                                                }
                                            </script>
                                            <span class="head">
														 <br>
														 <i class="fa fa-arrow-circle-right icon" ></i>
														 Payment Method</span>
                                            <br>

                                            <label class="con">
                                                <input type="radio" name="radio" checked="checked" onclick="show1(0);">
                                                <i class="fa fa-paypal" aria-hidden="true"></i>
                                                paypal
                                                <span class="checkmark"></span>
                                            </label >
                                            <div id="show-me" style="margin:0px;padding-left:7%;display:none">

                                                <input type="text" class="input100" placeholder="Enter paypal number">

                                            </div>
                                            <br>
                                            <label class="con">
                                                <input type="radio" name="radio" onclick="show1(1);">
                                                <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                                Credit Card
                                                <span class="checkmark"></span>

                                            </label>
                                            <div id="show" style="margin:0px;padding-left:7%;display:none">

                                                <input type="text" class="input100" placeholder="Enter visa number">

                                            </div>
                                            <br>

                                            <label class="con">
                                                <input type="radio" name="radio" onclick="show2(0);">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                Direct payment
                                                <span class="checkmark"></span>

                                            </label>
                                            <br>
                                            <i class="fa fa-usd icon"></i>
                                            <input class="input100" type="number" name="paid" placeholder="The amount paid" >
                                            <br>
                                            <div class="container-form-btn" style="margin-top:6%; ">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Recharge" style="font-weight: 900;font-family: Quicksand, Arial, sans-serif;">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>


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
