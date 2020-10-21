<?php



session_start();
$from = "" ;
$to="" ;
if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
    $email = $_SESSION['email'] ;
    $name = $_SESSION['name'] ;
}
else {
    header("location: ./Login_v3/login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if(isset($_POST['from'])) {
      $from = $_POST['from'] ;
    }
    if(isset($_POST['to'])) {
$to = $_POST['to'] ;
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car</title>
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
    <style>
        .con{
            padding-left:5%;
        }
    </style>
</head>
<body>

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
                            <li >
                                <a href="plan.php">My Plan</a>
                            </li>
                            <li><a href="hotels.php">Hotels</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="has-dropdown" >
                                <a href="#"> <?php echo  $name?> <i class="fa fa-sort-desc " style="margin-top: 20px;" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li style="display: flex;"><a href=".\Login_v3\login.php?status=logout" target="_self"><i class="fa fa-sign-out out" aria-hidden="true"></i>  Log-out</a>
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
                <li style="background-image: url(images/taxi.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Mishwar</h2>
                                    <h1>Taxi Numbers Are Close To You</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="colorlib-wrap">

        <div class="container" >

            <div class="row" >
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    From: <input type="text" disabled value="<?php echo $from  ?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    To: <input type="text" disabled value="<?php echo $to  ?>"></div><br>
                    <div class="col-md-1"></div>
                        <div class="col-md-10" style="background-color:#f7f7f7" >
                            <div class="wrap-division" style="text-align:center">
                                <div class="col-md-12 col-md-offset-0 heading2 animate-box"  style="border:none;text-align:center" >
                                    <h2 class="h22">Hello , Car offices near you</h2>
                                    <p style="border-bottom-style: groove;"></p>
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
                        margin-bottom: 5%;
                        }
                       </style>
                                </div>



                                    <?php


                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";

                                    // Create connection
                                    $conn = new mysqli("localhost", "root", "","mishwar");


                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }





                                    $sql = "SELECT * FROM Car  ";
                                    $result = mysqli_query($conn, $sql);
                                    // if($result->num_rows>0){echo "suc1";}
                                    if (!$result) {
                                        printf("Error: %s\n", mysqli_error($conn));
                                        exit();
                                    }
                                    $array = array() ;
                                    $array_id = array() ;
                                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


                                    //$count = mysqli_num_rows($result);

                                    while($row=mysqli_fetch_assoc($result)) {
                                         $lat1 = $_POST['lat'];
                                         $lon1 = $_POST['lng'];
                                         $lat2 = $row['lat'];
                                         $lon2 = $row['lng'];
                                         $unit = 'K';
                                        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
                                            return 0;
                                        } else {
                                            $radlat1 = M_PI * $lat1 / 180;
                                            $radlat2 = M_PI * $lat2 / 180;
                                            $theta = $lon1 - $lon2;
                                            $radtheta = M_PI * $theta / 180;
                                            $dist = sin($radlat1) * sin($radlat2) + cos($radlat1) * cos($radlat2) * cos($radtheta);
                                            if ($dist > 1) {
                                                $dist = 1;
                                            }
                                            $dist = acos($dist);
                                            $dist = $dist * 180 / M_PI;
                                            $dist = $dist * 60 * 1.1515;
                                            if ($unit == "K") {
                                                $dist = $dist * 1.609344;
                                                $dist =  number_format($dist, 1, '.', '');
                                                array_push($array,$dist) ;
                                                array_push($array_id,$row['id']) ;

                                            }
                                        }
                                        }

                                        for ($x=0;$x<(count($array_id) -1);$x++) {
                                            for($y=0;$y<(count($array_id) -1);$y++) {
                                                if($array[$y] > $array[$y+1]){
                                                    $temp = $array[$y] ;
                                                    $temp1 = $array_id[$y];
                                                    $array[$y] = $array[$y+1] ;
                                                    $array_id[$y] = $array_id[$y+1] ;
                                                    $array[$y+1] = $temp ;
                                                    $array_id[$y+1] = $temp1 ;
                                                }
                                            }
                                        }


                                        for($x=0;$x<(count($array_id));$x++) {
                                            $sql = "SELECT * FROM car WHERE id ='$array_id[$x]'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $p1 = "";
                                                $p2 = "";
                                                $p3 = "";
                                                if ($row['phone_number'] != 0) {
                                                    $p1 = $row['phone_number'];
                                                }
                                                if ($row['phone_number2'] != 0) {
                                                    $p2 = $row['phone_number2'];
                                                }
                                                if ($row['phone_number3'] != 0) {
                                                    $p3 = $row['phone_number3'];

                                                }


                                                echo ' 
                                   <div class="row">
                                    <div class="col-md-12 animate-box">
                                        <div class="room-wrap">
                                       
                                            <div class="row" style="background-color: #f7f7f7" >
                                            <div class="col-md-2 col-sm-3"></div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="room-img" style="background-image: url(images/car.png); height: 150px; width: 150px"></div>
                                                </div>
                                                <div class="col-md-3 col-sm-3" style="font-size:14px">
                                                    <div class="desc">
                                                      
                                                        <h3>' . $row['name'] . '</h3>
                                                        
                                                        
                                                    </div>
                                                    <div>
                                                   
                                                   <div><i class="fa fa-phone-square" aria-hidden="true"></i> Mobile Number : ' . $p1 . '</div>
                                                   <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; ' . $p2 . '</div>
                                                   <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; ' . $p3 . '</div>
                                                    </div>
                                               
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                   <div><br><br></div>
                                                   <div style="color:#000;font-size:16px"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> ' . $array[$x] . ' km  away from you</div>
                                                     </div>

                                                     </div>
                                                     <p style="border-bottom-style: groove;"></p>

                                                     </div>
                                                     </div>
                                                     </div>
                                                  <br>
                                    
                                    ';
                                            }
                                        }



                                    ?>
                                           <script>
                                    function show1(x){
                                        if(x==0)
                                            document.getElementById('show').style.display='block';
                                    }
                                </script>
                                </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
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
                    <li><a href="../Login_v3/login.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



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

