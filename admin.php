<?php


$servername = "localhost";
$username = "root";
$password = "";
$status = 0 ;
// Create connection
$conn = new mysqli("localhost", "root", "", "mishwar");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
session_start();
$name =$_SESSION['name'] ;
$email= $_SESSION['email']  ;
if($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET['status'])) {

        $status = $_GET['status'] ;

    }
}

$sql = "SELECT * FROM person WHERE type ='user'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$sqll = "SELECT * FROM person WHERE type ='a' AND Email='$email'";
$result2 = mysqli_query($conn, $sqll);
if (!$result2) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$rowa = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$total=$rowa['cashback'];





?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        .bbr{
            background-color:#2C2E3E;
            padding:0px 0px;
            margin:0;
            margin-bottom:10px;
            color:#fff;
        }
        .bbr:hover{
            color:#FFDD00;
        }
        .pic{
            border-radius: 50%;
            text-align:center;
            margin-top:15px;
        }
        .aa:hover{
            color:#FFDD00;

        }
        .con{
            font-size:13px;
        }

        .intext-control {
            background: transparent;
            border: none;
            border-bottom: 1px solid #000000;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 0;
            width:200px;
        }
        .intext-control:focus {
            -webkit-box-shadow: none;
            border: none;
            box-shadow: none;
            border-bottom:1px solid #7c6ae4;
        }
    </style>

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
            if (status == 3) {
                x1();
            }
            if (status == 4) {
                y1();
            }

        }
    }
    f1() ;
    function x() {
        swal(
            'Good job!',
            'message delete successfully',
            'success'
        );
    }
    function y() {
        swal(
            'Sorry!',
            'something error ',
            'error'
        );

    }
    function x1() {
        swal(
            'Good job!',
            'message will show in home page ',
            'success'
        );
    }
    function y1() {
        swal(
            'Good job!',
            'message will not show in home page ',
            'success'
        );
    }


</script>
<div class="colorlib-loader"></div>

<div id="page" style="display:flex;flex-wrap:wrap">

    <div class="col-md-3" style="margin-top:0%;padding:0 ; height:100% " id="myDIV">
        <div class="sidebar-wrap" style="padding:0;margin:0%;height:100%">
            <div class="side search-wrap animate-box" style="min-width:180px;height:100%;margin:0%;padding-bottom:100%;  position: fixed;">
                <nav class="colorlib-nav" role="navigation">
                    <div style="padding-top:1px;margin-bottom:15px;padding-bottom:5px;text-align:center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-2">
                                    <div id="colorlib-logo"><a >Mishwar</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="pic">
                    <img src="./images/person2.jpg" style="border-radius: 50%;width:70px;heigth:80px;"><br>
                    <h4 style="color:#fff"><i class="fa fa-circle" aria-hidden="true" style="color:green"></i> <?php echo $name?></h4>
                </div>
                <a href="admin.php?name=<?php echo $name?>" class="aa" target="_self" style="color:#fff;"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
                <br>
                <br>
                <a href="cashback.php?name=<?php echo $name?>" style="color:#fff;" ><i class="fa fa-shopping-bag" aria-hidden="true"></i> Recharge CashBack</a>
                <br>
                <br>
                <button class="btn btn bbr butt"  style="color:#fff;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editing</button>


                <script>
                    $('.butt').on('click', function (e) {
                        $('.edit').toggle();
                        $('.show-me').toggle();
                    });

                </script>
                <br>
                <br>
                <button class="btn btn bbr showtable" style="color:#fff;"><i class="fa fa-gift" aria-hidden="true"></i> Offers</button>
                <br>
                <br>
                <button class="btn btn bbr showmsg" style="color:#fff;"><i class="fa fa-send" aria-hidden="true"></i> Messages</button>
                <br>
                <br>
                <a href=".\Login_v3\login.php?status=logout" class="aa" target="_self" style="color:#fff;margin-bottom:20px"><i class="fa fa-sign-out out" aria-hidden="true"></i>  Log-out</a>

            </div>
        </div>
    </div>


    <div class="colorlib-wrap" id="left" style="margin-left:18%;padding-top:15px">
        <div class="container">

            <script>
                $('.showmsg').on('click', function (e) {
                    $('.msg').toggle();
                    $('.show-me').toggle();
                });

            </script>
            <div class="row msg" style="display:none; margin:left:20%">

                <div class="col-md-9" style="background-color:#F6F8FB;padding-left:5%;padding-right:5%;padding-bottom:5% ">

                    <!-------------------------------------------------------------->
                    <div class="main_title" >
                        <h2 style="padding: 10px;padding-left: 0px;border-bottom-style: outset;border-radius:4px;padding-bottom:5%"><i class="fa fa-send" aria-hidden="true"></i> Message Admin</h2>
                    </div>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    $sql = "SELECT * FROM contact";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    $i=1;
                    $coun=mysqli_num_rows($result);


                    ?>
                    <div > <h3 style="color:#5A84D6">Messages (+<?php echo $coun ?>)</h3></div>
                    <div class="table-responsive table--no-card m-b-40" >

                        <table class="table table-borderless table-striped table-earning" >
                            <thead>
                            <tr style=" padding: 10px;">
                                <th style="border:3px outset ;text-align: center;">User Name</th>
                                <th style="border:3px outset ;text-align: center;">User Email</th>
                                <th style="border:3px outset ;text-align: center;">Content</th>
                                <th style="border:3px outset ;text-align: center;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            while($row=mysqli_fetch_assoc($result)) {
                                $style = 'border:3px outset ;text-align: center;' ;
                               if($row['active'] == 's') {

                                   $style = 'border:3px outset ;text-align: center; background-color: lightgreen' ;
                               }

                                echo '
                                           
                                            <tr style="font-family: Arial, Helvetica, sans-serif;" >
                                            <td style="border:3px outset ;text-align: center;">'.$row['name'].'</td>
                                                <td style="border:3px outset ;text-align: center;">'.$row['email'].'</td>
                                                <td style="'.$style.'">'.$row['message'].'</td>
                                                <td style="border:3px outset;text-align: center;">
                                                <form  action="contactconf.php" method="post">
                                                <input type="hidden" name="id" value="'.$row['id'].'">
                                                <input type="hidden" name="status" value="d">
                                                <input type="submit" style="border-right:1px radius" name="delete" value="Delete" class="btn btn-link">
                                                </form>
                                                <form action="contactconf.php" method="post">
                                                <input type="hidden" name="id" value="'.$row['id'].'">
                                                <input type="hidden" name="status" value="s">
                                                <input type="submit"  name="cash" value="Show" class="btn btn-link"></td>
                                                </form>
                                            </tr> ' ;

                                // }
                            }
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!------------------------------>
            <script>
                $('.showtable').on('click', function (e) {
                    $('.tab').toggle();
                    $('.show-me').toggle();
                });

            </script>

            <div class="row tab" style="display:none;">
                <div class="col-md-2" ></div>
                <div class="col-md-7">

                    <div class="main_title">
                        <h2 style=""> <i class="fa fa-plus-square" aria-hidden="true"></i>  Add a new offer</h2>
                    </div>
                    <div class="table-responsive table--no-card m-b-40"  style="background-color:#EDE7E5 ;border-radius: 20px;padding:5%" >

                        <table class="table table-borderless table-striped table-earning" >
                            <tbody>
                            <form method="GET" action="offers.php">
                                <tr>
                                    <label style="text-align: center;;font-weight: 900;color: #2C2E3E"><i class="fa fa-globe" aria-hidden="true"></i> Country: </label>
                                    <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="offer">
                                    <br>
                                </tr>
                                <tr>
                                    <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-usd" aria-hidden="true"></i> Spend:</label>
                                    <input type="number" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="spend">
                                    <br>
                                </tr>
                                <tr>
                                    <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-usd" aria-hidden="true"></i>  Cash Back Amount: </label>
                                    <input type="number" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="gift">
                                    <br>
                                </tr>
                                <tr>
                                    <label style="text-align: center;font-weight: 900;color: #2C2E3E;"><i class="fa fa-calendar" aria-hidden="true"></i> Expire :</label>
                                    <input type="date" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="expire">
                                </tr>
                                <tr>
                                </tr>
                                <input type="submit" style="background-color: #2C2E3E;" name="cash" value="Add Offer" class="btn btn-primary tr">

                            </form>
                            </tbody>
                        </table>
                    </div>
                    <!-------------------------------------------------------------->
                    <div class="main_title">
                        <h2 style="padding: 10px;padding-left: 0px;"><i class="fa fa-gift" aria-hidden="true"></i> Mishwar Offers Added</h2>
                    </div>
                    <div class="table-responsive table--no-card m-b-40" >

                        <table class="table table-borderless table-striped table-earning" >
                            <thead>
                            <tr style=" padding: 10px;background-color: #2C2E3E;color:#fff">
                                <th style="text-align: center;">Country</th>
                                <th style="text-align: center;">Spend</th>
                                <th style="text-align: center;">Cash Back Amount</th>
                                <th style="text-align: center;">Expires</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                $sql = "SELECT * FROM cashback_gift";
                                $result = mysqli_query($conn, $sql);
                                if (!$result) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    exit();
                                }
                                $i=1;
                                while($row=mysqli_fetch_assoc($result)) {
                                    echo '
                                           
                                            <tr style="font-family: Arial, Helvetica, sans-serif;" >
                                                <td style="text-align: center;">'.$row['cash_offers'].'</td>
                                                <td style="text-align: center;">$'.$row['spend'].'</td>
                                                <td style="text-align: center;">$'.$row['cash_gift'].'</td>
                                                <td style="text-align: center;">'.$row['expires'].'</td>
                                            </tr> ' ;

                                    // }
                                }
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------------------->
        </div>

        <style>
            .tr{
                margin-top: 5%;
                margin-left:40%;
                padding-top: 10px;
                color:#fff;
                padding-bottom: 10px;
                border-radius: 20px;
                font-size: 14px;
                font-weight: 900;
                border: none;

            }

        </style>
        <!-------------------------------------------------------------->

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="wrap-division">
                        <div class="edit" style="display:none">

                            <div class="col-md-6" >

                                <div class="main_title">
                                    <h2 style=""> <i class="fa fa-globe" aria-hidden="true"></i>   Add A New Tourist Place</h2>
                                </div>
                                <div class="table-responsive table--no-card m-b-40"  style="background-color:#EDE7E5 ;border-radius: 20px;padding:5%; margin-left:10%" >
                                    <form method="GET" action="offers.php">
                                        <table class="table table-borderless table-striped table-earning" >
                                            <tbody>
                                            <form method="GET" action="offers.php">
                                                <tr>
                                                    <label style="text-align: center;;font-weight: 900;color: #2C2E3E"><i class="fa fa-id-badge" aria-hidden="true"></i> Place ID: </label>
                                                    <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="ID">
                                                    <br>
                                                </tr>
                                                <tr>
                                                    <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-font" aria-hidden="true"></i> Place Name:</label>
                                                    <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="spend">
                                                    <br>
                                                </tr>
                                                <tr>
                                                    <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-address-book" aria-hidden="true"></i> Place Address: </label>
                                                    <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="gift">
                                                    <br>
                                                </tr>
                                                <tr>
                                                    <label style="text-align: center;font-weight: 900;color: #2C2E3E;"><i class="fa fa-picture-o" aria-hidden="true"></i> Place Photo :</label>
                                                    <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="expire">
                                                </tr>
                                                <tr>

                                                    <label style="text-align: center;font-weight: 900;color: #2C2E3E;"><i class="fa fa-file-text-o" aria-hidden="true"></i> Place Detalis :</label>
                                                    <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="expire">

                                                </tr>
                                                <tr>
                                                    <td style="margin-left:10%">
                                                        <label style="text-align: center;font-weight: 900;color: #2C2E3E;"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> lat :</label>
                                                        <input type="number" stpe="any" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="expire">
                                                    </td>
                                                    <td>
                                                        <label style="text-align: center;font-weight: 900;color: #2C2E3E;"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> lng :</label>
                                                        <input type="number" step="any" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="expire">
                                                    <td>
                                                </tr>




                                            </tbody>
                                        </table>
                                        <input type="submit" style=" margin-left:35%; background-color: #2C2E3E;" name="cash" value="Add Place" class="btn btn-primary tr">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main_title"style="margin-left:10%">
                                    <h2 style=""> <i class="fa fa-taxi" aria-hidden="true"></i>  Add A New Taxi Office</h2>
                                </div>
                                <div class="table-responsive table--no-card m-b-40"  style="background-color:#EDE7E5 ;border-radius: 20px;padding:5%;margin-left:20%" >
                                    <form method="GET" action="offers.php">
                                        <table class="table table-borderless table-striped table-earning" >
                                            <tbody>

                                            <tr>
                                                <label style="text-align: center;;font-weight: 900;color: #2C2E3E"><i class="fa fa-id-badge" aria-hidden="true"></i> ID : </label>
                                                <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="ID">
                                                <br>
                                            </tr>
                                            <tr>
                                                <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-font" aria-hidden="true"></i> Name :</label>
                                                <input type="text" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="spend">
                                                <br>
                                            </tr>


                                            <tr>
                                                <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-phone-square" aria-hidden="true"></i> Phone Number : </label>
                                                <input type="number" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="gift">
                                                <br>
                                            </tr>
                                            <tr>
                                                <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-phone-square" aria-hidden="true"></i> Phone Number 1 : </label>
                                                <input type="number" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="gift">
                                                <br>
                                            </tr>
                                            <tr>
                                                <label style="text-align: center;;font-weight: 900;color: #2C2E3E;"><i class="fa fa-phone-square" aria-hidden="true"></i> Phone Number 2 : </label>
                                                <input type="number" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="gift">
                                                <br>
                                            </tr>
                                            <tr>
                                                <td style="margin-left:10%">
                                                    <label style="text-align: center;font-weight: 900;color: #2C2E3E;"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> lat :</label>
                                                    <input type="number" stpe="any" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="expire">
                                                </td>
                                                <td>
                                                    <label style="text-align: center;font-weight: 900;color: #2C2E3E;"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> lng :</label>
                                                    <input type="number" step="any" style="background-color:#EDE7E5;width:100%; border: none;border-bottom: 2px solid black" name="expire">
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <input type="submit" style="background-color: #2C2E3E;" name="cash" value="Add Office" class="btn btn-primary tr">

                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="show-me" >
                            <div>

                                <h3 style="color:#2C2E3E;">
                                    </button> <i class="fa fa-home" aria-hidden="true"></i> The Dashboard</h3>
                            </div>
                            <!--template-->
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1" style="background-color:#2C2E3E;height:80px;width:200px;border-radius:5%">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">

                                                    <h2 style="padding-left:5px ;color:#fff"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $count ?></h2>
                                                    <span style="padding-left:5px;font-size:14px;color:#fff">Users</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c4" style="background-color:#2C2E3E;height:80px;;width:200px;border-radius:5%">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-money"></i>
                                                </div>
                                                <div class="text">
                                                    <h2 style="padding-left:5px;;color:#fff"><i class="fa fa-shopping-cart" aria-hidden="true"></i> $<?php echo $total ?></h2>
                                                    <span style="padding-left:5px;font-size:14px;color:#fff">Total Earnings</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-9">
                                    <h3 style="color:#2C2E3E;;margin-top:30px" ><i class="fa fa-users" aria-hidden="true"></i> Registered Users</h3>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning"style="cursor: pointer;">
                                            <thead style="cursor: default;background-color:#2C2E3E;color: #fff">
                                            <tr>
                                                <th>Username</th>
                                                <th>Status</th>
                                                <th>Registered</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                                $sql = "SELECT * FROM person WHERE type = 'user' ";
                                                $result = mysqli_query($conn, $sql);
                                                //if($result->num_rows>0){echo "suc1";}
                                                if (!$result) {
                                                    printf("Error: %s\n", mysqli_error($conn));
                                                    exit();
                                                }
                                                $i=1;
                                                while($row=mysqli_fetch_assoc($result)) {
                                                    $nname;


                                                    echo '
                                            <tr>
                                                <td><a href="userinfo.php?email='.$row['Email'].'&name='.$row['name'].'" style="font-size:14px;color:#595959">'.$row['name'].'</a></td>
                                                <td>Registered</td>
                                                <td>17-3-2020</td>
                                            </tr>
                                            </tbody>';
                                                }
                                            }

                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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