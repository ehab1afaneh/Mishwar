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

if ($_SERVER["REQUEST_METHOD"] == "GET") {


    if ( isset($_GET['email']) ){

        $email = mysqli_real_escape_string($conn, $_GET['email']);
    }
    if (isset($_GET['name'])) {

        $name = mysqli_real_escape_string($conn, $_GET['name']);
    }


}
$name= $_SESSION['name'];
$email= $_SESSION['email'];
$_SESSION['eemail']=$email;
$sql = "SELECT * FROM person WHERE Email ='$email'";
$res = mysqli_query($conn, $sql);
if (!$res) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$tr = mysqli_fetch_array($res, MYSQLI_ASSOC);
$Cash=$tr['cashback'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Profile</title>

    <!-- Icon css link -->
    <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/linears-icon/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="css/colors/default.css" title="default">
    <link rel="alternate stylesheet" href="css/colors/orange.css" title="orange">
    <link rel="alternate stylesheet" href="css/colors/pink.css" title="pink">
    <link rel="alternate stylesheet" href="css/colors/violet.css" title="violet">
    <link rel="alternate stylesheet" href="css/colors/blue.css" title="blue">
    <link rel="alternate stylesheet" href="css/colors/past.css" title="past">
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<!--================ Frist hader Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../indexphp.php"><img src="img/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="MyProfile.php">My Account</a></li>
                    <li><a href="#">EN</a></li>
                    <li><a href="#">USD</a></li>
                    <li><a href="../Login_v3/login.php">Log Out</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<!--================End Footer Area =================-->

<!--================Total container Area =================-->
<style>

    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
<body class="dark_bg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="80" data-scroll-animation="true">

<div id="preloader">
    <div id="preloader_spinner">
        <div class="spinner"></div>
    </div>
</div>
<div class="container main_container">
    <div class="content_inner_bg row m0">
        <section class="about_person_area pad" id="about">
            <div class="row">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    $sql= "SELECT * from flight_tic WHERE email='$email'";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    if($result->num_rows>0){
                        ?>
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <div class="person_img" style="text-align: center;">

                                <img src="img/member/mem.png" style="background-color:#fec608; height: 100px;width: 80px; border-radius:50%;margin-bottom: 20px;display: inline;" alt="">

                                <h4 class="name" ><?php echo $name?></h4>

                            </div>
                        </div>
                        <div class="col-md-4" style="padding-left:0% ;text-align: center;">
                            <h4 class="title-1 m-b-25" style="padding-top: 5%;;margin-bottom: 3%;">CashBack</h4>
                            <span class="cash">
                               $<?php echo $Cash ?>
                            </span>
                            <style>
                                .cash{
                                    font-weight: bold;
                                    background-color: #fec608;
                                    padding-left: 20%;
                                    padding-right: 20%;
                                    padding-top: 10px;
                                    padding-bottom: 10px;
                                    border-radius: 5px;
                                    font-family: FontAwesome;

                                }
                            </style>
                            <br>
                            <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px">Total cashback recived: $9400</span>
                        </div>
                        <div class="col-md-4">

                            <table class="table table-borderless table-striped table-earning" >
                                <?php

                                while($row=mysqli_fetch_assoc($result)) {
                                    echo'
                                            <tr style=" font-family: Arial, Helvetica, sans-serif;padding: 10px;background-color: #fec608;">
                                                <td style="text-align: center;">Your Journey</td>
                                                <td style="text-align: center;">'.$row['journey'].'</td>
                                                </tr>
                                                <tr style="font-family: Arial, Helvetica, sans-serif;background-color: #fec608;">
                                                <td style="text-align: center;">Your Ticket Number</td>
                                                <td style="text-align: center;">'.$row['ticket_code'].'</td>
                                                </tr>
                                                <tr style="font-family: Arial, Helvetica, sans-serif;background-color: #fec608;">
                                                <td style="text-align: center;">Date</td>
                                                <td style="text-align: center;">'.$row['Date'].'</td>
                                                </tr>
                                                <tr style="font-family: Arial, Helvetica, sans-serif;background-color: #fec608;">
                                                <td style="text-align: center;">Time</td>
                                                <td style="text-align: center;">'.$row['Time'].'</td>
                                                </tr>
                                                ';
                                }




                                ?>
                            </table>
                        </div>
                        <?php
                    }
                    else {     echo '
                        <div class="col-md-5">
                            <div class="person_img" style="text-align: center;">
                               
                                <img src="img/member/mem.png" style="background-color:#fec608; height: 100px;width: 80px; border-radius:50%;margin-bottom: 20px;display: inline;" alt="">
                            
                                <h4 class="name" > '.$name.' </h4>
                                
                            </div>
                        </div>
                        <div class="col-md-5" style="padding-left:0% ;text-align: center;">
                            <h4 class="title-1 m-b-25" style="padding-top: 5%;;margin-bottom: 3%;">CashBack</h4>
                            <span class="cash">
                               $'.$Cash.'
                            </span>
                            <style>
                                .cash{
                                    font-weight: bold;
                                    background-color: #fec608;
                                    padding-left: 20%;
                                    padding-right: 20%;
                                    padding-top: 10px;
                                    padding-bottom: 10px;
                                    border-radius: 5px;
                                    font-family: FontAwesome;
                                    
                                }
                            </style>
                            <br>
                            <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px">Total cashback recived: $9400</span>
                        </div>';
                    }
                }

                ?>
            </div>


        </section>

        <section class="myskill_area pad" id="skill" style="display: block;">

            <div class="row">
                <div class="col-md-1"></div>
                <div  class="col-md-10">
                    <div class="main_title">
                        <h2 style="padding: 10px;padding-left: 0px;">Mishwar Voucher Codes , Deals & Sales</h2>
                    </div>
                    <div class="table-responsive table--no-card m-b-40" >

                        <table class="table table-borderless table-striped table-earning" >
                            <thead>
                            <tr style=" padding: 10px;background-color: #fec608;">
                                <th style="text-align: center;">Cash Back Offers</th>
                                <th style="text-align: center;">You Spend</th>
                                <th style="text-align: center;">Cash Back Amount</th>
                                <th style="text-align: center;">Expires</th>
                                <th style="text-align: center;"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                $sql = "SELECT * FROM cashback_gift";
                                $sr= "SELECT * from journey WHERE email='$email'";
                                $result = mysqli_query($conn, $sql);
                                $rs = mysqli_query($conn, $sr);
                                $datec= strtotime(date("Y-m-d"));
                                //if($result->num_rows>0){echo "suc1";}
                                if (!$result) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    exit();
                                }
                                $i=1;
                                while($row=mysqli_fetch_assoc($result)) {


                                    if($row['expires'] == $datec)
                                    {
                                        $sql = "DELETE FROM `cashback_gift` WHERE 'expires' = '$datec'";
                                        if ($conn->query($sql) === TRUE) {
                                            // echo 'success';
                                        }
                                        //   else echo 'noooo';
                                    }
                                    else{
                                        $ress=mysqli_fetch_assoc($rs);
                                        if($ress['place'] == $row['cash_offers']){
                                            if($ress['email'] == $email){
                                                continue;}
                                        }
                                        else{
                                            $i=$i+1;

                                            echo '
                                           
                                            <tr style="font-family: Arial, Helvetica, sans-serif;" >
                                            
                                                
                                                <td style="text-align: center;">'.$row['cash_offers'].'</td>
                                                <td style="text-align: center;">$'.$row['spend'].'</td>
                                                <td style="text-align: center;">$'.$row['cash_gift'].'</td>
                                                <td style="text-align: center;">'.$row['expires'].'</td>
                                                
                                             <form method="GET" action="usergift.php">
                                             <input type="hidden" name="casho" value="'.$row['cash_offers'].'">
                                             <input type="hidden" name="spendo" value="'.$row['spend'].'">
                                             <input type="hidden" name="gifto" value="'.$row['cash_gift'].'">
                                             <input type="hidden" name="expiros" value="'.$row['expires'].'">
                                             <td style="text-align: center;"><input id="'.$row['cash_offers'].'" type="submit" name="cash" value="Use Your CashBack" class="btn btn-primary tr"></td>
                                            </form>
                                            </tr> ' ;
                                        }


                                        if($i == 7)break;
                                        // }
                                    }
                                }

                            }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        if(isset($_GET['status'])) {
                            if($_GET['status'] == 'e') {
                                echo '<div style="text-align:center;margin-left: 40%"><div style="background-color:#fec608;text-align:center;width:200px"><i class="fa fa-times" style="color:red" aria-hidden="true"></i> Your Cashback is insufficient</div> </div>' ;
                            }
                            else {
                                echo '<div style="text-align:center;margin-left: 40%"><div style="background-color:#fec608;text-align:center;width:200px"><i class="fa fa-check-circle" style="color:green" aria-hidden="true"></i> The Trip was successfully booked</div></div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <style>
                .tr{
                    background-color: #fec608;
                    color: #000;
                    padding-top: 3px;
                    padding-bottom: 3px;
                    border-radius: 20px;
                    font-size: 10px;
                    border: none;

                }
            </style>
        </section>
        <!---here-->


        <!----here--->
        <section class="portfolio_area pad" id="portfolio">
            <div class="col-md-1"></div>
            <div  class="col-md-10">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $sql= "SELECT * from journey WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }
                $i=1;
                if($result->num_rows>0){
                ?>
                <div class="main_title">
                    <h2>Book Your plane</h2>
                </div>
                <table class="table table-borderless table-striped table-earning" >
                    <thead>
                    <tr style=" padding: 10px;background-color: #fec608;">
                        <th style="text-align: center;">Your journey</th>
                        <th style="text-align: center;">Expires</th>
                        <th style="text-align: center;"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    while($row=mysqli_fetch_assoc($result)) {
                        // if($ress['place'] != $row['cash_offers'] && $ress['email'] !=$email){
                        if($row['expier'] == 0)
                        {
                            $sql = "DELETE FROM `journey` WHERE `id` = '0'";
                            if ($conn->query($sql) === TRUE) {
                            }
                        }
                        else{
                            echo '
                                           
                                            <tr style="font-family: Arial, Helvetica, sans-serif;" >
                                            <td style="text-align: center;">'.$row['place'].'</td>
                                            <td style="text-align: center;">'.$row['expier'].' days left</td>
                                             <form method="GET" action="../indexphp.php#colorlib-reservation">
                                             <input type="hidden" name="casho" value="'.$row['place'].'">
                                             <input type="hidden" name="spendo" value="'.$row['expier'].'">
                                             <input type="hidden" name="spendo" value="'.$row['ticket_code'].'">
                                             <input type="hidden" name="page_from" value="u">
                                             <td style="text-align: center;"><input type="submit" name="cash" value="Book Your Plane" class="btn btn-primary tr"></td>
                                            </form>
                                            </tr> ' ;
                        }
                    }
                    // else{};
                    // }
                    }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="portfolio_area pad" id="portfolio">

        </section>

        <section class="portfolio_area pad" id="portfolio">
            <div class="main_title">
                <h2>Your Favorites</h2>
            </div>

            <div class="row">
                <div class="portfolio_list_inner">

                    <?php
                    $sql = "SELECT * FROM favorite WHERE email = '$email' ";
                    $result = mysqli_query($conn, $sql);

                    // if($result->num_rows>0){echo "suc1";}
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }


                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_b = $row['place_id'] ;
                        $sql1 = "SELECT * FROM places WHERE place_id = '$id_b' ";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($result1) ;


                        echo '
                        <div class="col-md-4 design">
                            <div class="portfolio_item">
                                <div class="portfolio_img">
                                    <img src="'.$row1['photo'].'" alt="" style="height: 200px; width: 100%">
                                </div>
                                <div class="portfolio_title">
                                    <a href="#"><h4>'.$row1['name'].'</h4></a>
                                    <h5 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">$'.$row1['price'].'</h5>
                                </div>
                            </div>
                        </div>' ;}

                    ?>






                </div>
            </div>
        </section>

        <section class="portfolio_area pad" id="portfolio">
            <div class="main_title">
                <h2>Last booked</h2>
            </div>
            <div class="row">
                <div class="portfolio_list_inner">
                    <div class="col-md-4 photo marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="img/China.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>China</h4></a>
                                <h5 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">$750</h5>
                                <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;">Sun,May 17 - Fri,May 29</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 design">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="img/England.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>England</h4></a>
                                <h5 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">$450</h5>
                                <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;">Sat,May 16 - Sat,May 23</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 photo marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="img/maldives.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>maldives</h4></a>
                                <h5 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">$800</h5>
                                <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;">Sun,May 17 - Mon,May 29</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 design marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="img/italy.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>italy</h4></a>
                                <h5 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">$630</h5>
                                <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;">Wen,May 13 - Fri,May 22</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 photo">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="img/Palestine.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>Palestine</h4></a>
                                <h5 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">$170</h5>
                                <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;">Wen,May 20 - Wen,May 27</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="img/France.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>France</h4></a>
                                <h5 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">$650</h5>
                                <span style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 10px;">Thr,May 14 - Fri,May 22</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Map Area =================-->
        <div  id="map" ></div>


        <!--================End Map Area =================-->
    </div>
</div>
<!--================End Total container Area =================-->

<!--================footer Area =================-->
<footer class="footer_area">
    <div class="footer_copyright">
        <div class="container">
            <div class="pull-left">
                <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;<script>document.write(new Date().getFullYear());</script> <a href="../indexphp.php" target="_blank">Mishwar</a> , All rights reserved .
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p></h5>
            </div>
            <div class="pull-right">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="MyProfile.php">My Account</a></li>
                    <li><a href="#">EN</a></li>
                    <li><a href="#">USD</a></li>
                    <li><a href="../Login_v3/login.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================End footer Area =================-->




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Extra plugin js -->
<script src="vendors/counter-up/waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>

<script src="vendors/style-switcher/styleswitcher.js"></script>
<script src="vendors/style-switcher/switcher-active.js"></script>
<script src="vendors/animate-css/wow.min.js"></script>

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>

<!-- contact js -->
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/theme.js"></script>
</body>
</html>