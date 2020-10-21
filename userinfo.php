<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli("localhost", "root", "", "mishwar");

// Check connection
$name = "" ;
$nname = "" ;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
session_start();

if(isset($_SESSION['name'])){
    $name = $_SESSION['name'] ;
  //  echo $name ;
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nname =mysqli_real_escape_string($conn, $_GET['name']);
   // echo $nname;
    $email =mysqli_real_escape_string($conn, $_GET['email']);
   // echo $email;
}
/*if ($_SERVER["REQUEST_METHOD"] == "GET") {


    if ( isset($_GET['email']) ){

        $email = mysqli_real_escape_string($conn, $_GET['email']);
    }
    if (isset($_GET['name'])) {

        $name = mysqli_real_escape_string($conn, $_GET['name']);
    }


}*/
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Info</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
  width:80px;
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
		
	<div class="colorlib-loader"></div>

    <div id="page" style="display:flex">
   
	       <div class="col-md-3" style="margin-top:0%;padding:0;min-width:180px;; height:100% ">
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
                            <img src="./images/admin.PNG" style="border-radius: 50%;width:50px;heigth:50px;"><br>
                            <h4 style="color:#fff"><i class="fa fa-circle" aria-hidden="true" style="color:green"></i>  <?php echo $name?></h4>
                            </div>
                           <a href="admin.php?name=<?php echo $name?>" class="aa" target="_self" style="color:#fff;"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
                           <br>
                           <br>
                           <a href="cashback.php?name=<?php echo $name?>" style="color:#fff;" ><i class="fa fa-shopping-bag" aria-hidden="true"></i> Recharge CashBack</a>
                           <br>                           <br>
                           <button class="btn btn bbr butt"  style="color:#fff;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editing</button>
                           
                          
                           <script>
                               $('.butt').on('click', function (e) {
                               $('.edit').toggle(); 
                               $('.show-me').toggle();
                                });
                                
                           </script>
                           <br>
                           <button class="btn btn bbr" style="color:#fff;"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                           <br>
                           <br>
                           <a href=".\Login_v3\login.php" class="aa" target="_self" style="color:#fff;margin-bottom:20px"><i class="fa fa-sign-out out" aria-hidden="true"></i>  Log-out</a>

					</div>
		        </div>
            </div>

           
      <div class="colorlib-wrap" style="margin-left:10px;padding-top:15px">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
                                    <div>
                               <h2 style="color:#000;"><i class="fa fa-user" aria-hidden="true"></i>    <?php echo $nname?></h2>
                                </div>
                                <!--template-->
                                <div class="row m-t-25"style="text-align:center;display:flex">
                       
                         
                                <div class="overview-item overview-item--c4"style="text-align:center">
                                    <div class="overview__inner"style="text-align:center">
                                        <div class="overview-box clearfix"style="text-align:center">
                                        <div style="display:flex;;flex-wrap:wrap;justify-content: center">
                                             <?php
                                             if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                                 $sql1 = "SELECT * FROM person WHERE Email='$email'";
                                                 $result1 = mysqli_query($conn, $sql1);
                                                 $row1=mysqli_fetch_assoc($result1) ;



                                            echo '
                                               <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c4" style="background-color:#2C2E3E;height:80px;;width:200px;border-radius:5%">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-money"></i>
                                                </div>
                                                <div class="text">
                                                    <h2 style="padding-left:5px;;color:#fff"><i class="fa fa-shopping-cart" aria-hidden="true"></i> $'.$row1['cashback'].'</h2>
                                            <span style="padding-left:5px;font-size:14px;color:#fff">Total cash back</span><br><br><br><br>
                                        </div> 
                                        </div>
                                    </div>
                                </div>
                                </div>' ;
                                                 $sql = "SELECT * FROM booked_item WHERE user_email='$email'";
                                                 $result = mysqli_query($conn, $sql);

                                              
                                              if (!$result) {
                                                  printf("Error: %s\n", mysqli_error($conn));
                                                  exit();
                                                }
                                                $count = mysqli_num_rows($result);
                                                 
                                              while($row=mysqli_fetch_assoc($result)) {
                                                  $id = $row['place_id'] ;
                                                  $sql1 = "SELECT * FROM places WHERE place_id='$id'";
                                                  $result1 = mysqli_query($conn, $sql1);
                                                  $row1=mysqli_fetch_assoc($result1) ;
                                                 
                                             echo '
                                                 <div style="margin-bottom:5%; margin-left:10%; text-align:center;" >
                                                   <div  style="width:300px;height=200px">
                                                   <img src="./images/plane1.jpg" style="width:300px;height=200px">
                                                   </div>
                                                   <div class="desc" style="width:300px">
                                                   <span class="day-tour">'.$row['number_day'].' days</span>
                                                        <h2>'.$row1['name'].'</h2>
                                                        <form method="post" action="userinfodel.php">
                                                        <input  type ="hidden" name="id" value="'.$row['id'].'">
                                                        <input  type ="hidden" name="email" value="'.$email.'">
                                                        <input  type ="hidden" name="name" value="'.$nname.'">
                                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                   </div>
                                                 
                                                 
                                                   
                                                 <input  id="'.$row['id'].'"  type="submit" name="delete"  value="Delete" class="btn btn-primary">
                                                 </form>
                                                 
                                                 </div>
                                                
                                               ';
                                                
                                        
                                               
                                    }}
                                   
                                            ?>
                                           <div style="border-top: 1px solid ;black width:400px;margin-left:15%"></div>
                              
                                                 </div>
                             
                                                 <script>
                                $('.but').on('click', function (e) {
                               $('#show').toggle(); 
                              
                                });
                               </script>
                                            </div>
                                     </div>

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