<?php
$test_va = 0 ;
$country = "1" ;
$status = '0' ;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET['country'])) {
        $country = $_GET['country'] ;

    }
    if(isset($_GET['status'])) {
        $status = $_GET['status'] ;

    }
}
session_start();

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
    <title>Plan</title>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        .con{
            padding-left:5%;
        }
        .popup {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 30%;
            height: 15%;
            display: none;
            background-color:#454545;
            justify-content: center;
            align-items: center;
            text-align: center;
            border : 2px solid ;
            box-shadow: 10px 10px 5px #454545;
        }
        .popup-content {
            height: 100%;
            width: 100%;
            background: white;
            padding: 20px;
            position: relative;

        }
        .container1{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;

        }
        .close1 {
            position: absolute;
            top: 3%;
            left: 3%;
            transform: translate(-50%, -50%);
            height: 20px;
            width: 30px;

            cursor: pointer;
        }
        .inplace{
            width:25%;
            margin-top: 5%;
            border:none;
            border-radius:15px;
            border-bottom:3px inset #000 ;
            background-color: #fff;
            padding-top:5%;
        }
        .autocomplete {
            position: relative;
            display: inline-block;
        }
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: rosybrown;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
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
            if (status == 5) {
                yfs();
            }
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
    function yfs() {
        swal(
            'Good job!',
            'Your Flight Successfully Booked',
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
    <nav class="colorlib-nav" role="navigation" style="margin-bottom:0%">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="indexphp.php">MISHWAR</a></div>
                    </div>

                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li ><a href="indexphp.php">Home</a></li>
                            <li class="has-dropdown">

                                <ul class="dropdown">
                                    <li><a href="#">Destination</a></li>
                                    <li><a href="#">Weather</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="#">Booking</a></li>
                                </ul>
                            </li>
                            <li class="active" >
                                <a href="plan.php">My plan</a>

                            </li>
                            <li><a href="hotels.php">Hotels</a></li>
                            <li><a href="services.php ">Services</a></li>

                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="has-dropdown" >
                                <a href="#"> <?php echo  $name?> <i class="fa fa-sort-desc " style="margin-top: 20px;" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li style="display: flex;"><a href="Login_v3\login.php?status=logout" target="_self"><i class="fa fa-sign-out out" aria-hidden="true"></i>  Log-out</a>

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
                <li style="background-image: url(images/plane1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Mishwar</h2>
                                    <h1>Prepare your tourism plan</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>



    <div class="colorlib-wrap col-md-12" >
        <div class="container">

            <div class="col-md-12" style="background-color:#f7f7f7">
                <div class="row" >
                    <div class="col-md-12 animate-box text-center"style="background-color:#454545;padding:2%;margin-left:0%">
                        <a href="tours.php" style="border:none;" class="btn tt">Visit Tours Place  </a>
                        <a href="resturantphp.php" style="border:none;"class="btn tt">Visit Restaurant</a>
                        <a href="hotels.php" style="border:none;" class="btn tt">Visit Hotel</a>
                        <a target="_blank" href="realtime.html" style="border:none;" class="btn tt">Online Navigation</a>
                    </div>
                    <style>
                        .tt{
                            color:#f7f7f7;
                        }
                        .tt:hover {
                            color: yellow;
                        }
                    </style>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-division" style="padding-top:2%;background-color: #f7f7f7">

                            <div id="plan" class="col-md-12 col-md-offset-0 " style="margin-bottom:0%">
                                <h2>Hello , This is your plan</h2>
                                <p style="border-bottom-style: groove;"></p>
                            </div>
                            <p id="coordinate"></p>
                            <p id="json"></p>
                            <div id="con" ></div>



                            <div style ="text-align: center;margin-top:4%" class="col-md-6" id="plane_write">
                                <h2><span id="number_of_place">First</span> place you want to visit: </h2>
                                <div id="rows_data">
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
                                    $sql = "SELECT * FROM plan WHERE email = '$email' ORDER BY order_places ASC ";
                                    $result = mysqli_query($conn, $sql);
                                    $count_plan = mysqli_num_rows($result);
                                    // if($result->num_rows>0){echo "suc1";}
                                    if (!$result) {
                                        printf("Error: %s\n", mysqli_error($conn));
                                        exit();
                                    }
                                    $x=0 ;
                                    $y=1;
                                    while($row=mysqli_fetch_assoc($result)) {
                                        echo $y.'- name: <input type="text" value="'.$row['place_name'].'" class="place"  id="nameplace'.$x.'">' ;
                                        echo  'date: <input type="text" value="'.$row['date'].'" class="place"  id="nameplace'.$x.'" > ' ;
                                        echo  'day: <input type="text" value="'.$row['day'].'" class="place"  id="nameplace'.$x.'" ><br> ' ;

                                        $x++;
                                        $y++;
                                    }
                                    $sql = "SELECT * FROM booked_item WHERE user_email = '$email' ";
                                    $result = mysqli_query($conn, $sql);
                                    $count_booked = mysqli_num_rows($result);




                                    ?>

                                    <script>

                                        var x=0 ;
                                        var number_plan = <?php echo json_encode($count_plan) ?>;

                                        var flag = <?php echo json_encode($count_booked) ?>;

                                        x=number_plan;

                                        function add_row(name,date, day) {

                                            if(number_plan == flag) {
                                                alert('you insert all places in your plan ') ;
                                                return ;
                                            }
                                            else {

                                                x=x+1;



                                            }


                                            if (x <= flag) {


                                                $("#rows_data").append( x +'- ' +
                                                    'name: <input type="text" value="' + name + '" class="place"  id="nameplace' + x + '">&emsp;&emsp;' +
                                                    'date: <input type="text" value="' + date + '" class="place"  id="dateplace' + x + '">&emsp;' +
                                                    '<input type="hidden" value="'+x+'" id="order'+x+'">'+
                                                    'day: <input type="text" value="' + day + '" class="place"  id="dayplace' + x + '"><br>');


                                                if(x ==2 && x <= flag) {
                                                    document.getElementById('number_of_place').innerHTML =' Second' ;
                                                }
                                                if(x ==3 && x <= flag) {
                                                    document.getElementById('number_of_place').innerHTML =' Third' ;
                                                }
                                                if(x ==4 && x <= flag) {
                                                    document.getElementById('number_of_place').innerHTML =' Fourth' ;
                                                }
                                                if(x ==5 && x <= flag) {
                                                    document.getElementById('number_of_place').innerHTML =' Fifth' ;
                                                }
                                                if(x ==6 && x <= flag) {
                                                    document.getElementById('number_of_place').innerHTML =' Sixth' ;
                                                }


                                            }
                                            else {
                                                alert('you have just '+flag+' Booked items') ;
                                            }
                                        }
                                        var y = 1 ;
                                        function send_data() {

                                            var names = [];
                                            var dates = [];
                                            var days = [];
                                            var order =[];
                                            var flag = <?php echo $count_booked?> ;
                                            var number_plan = <?php echo $count_plan ?>;
                                            var y=number_plan+1 ;
                                            var con =   document.getElementById('con').value ;

                                            for(y;y<=flag;y++) {
                                                var name = document.getElementById('nameplace'+y).value ;
                                                var date = document.getElementById('dateplace'+y).value ;
                                                var day = document.getElementById('dayplace'+y).value ;
                                                var order1 = document.getElementById('order'+y).value ;
                                                names.push(name) ;
                                                dates.push(date);
                                                days.push(day) ;
                                                order.push(order1);
                                            }
                                            window.location.href = "user_plan.php?names="+names+"&dates="+dates+"&days="+days+"&con="+con;

                                        }


                                    </script>

                                </div>




                                <style>
                                    .place{
                                        border:none;
                                        width: 20%;
                                        background-color: #f7f7f7;
                                    }
                                </style>

                                <script>


                                </script>
                                    <?php


                                    $array_name_places=[];

                                    $sql = "SELECT * FROM booked_item WHERE user_email = '$email' ";
                                    $result = mysqli_query($conn, $sql);


                                    while ($row = mysqli_fetch_assoc($result)){
                                        $place_id = $row['place_id'] ;

                                        $sql1 = "SELECT * FROM places WHERE place_id = '$place_id' ";
                                        $result1 = mysqli_query($conn, $sql1);

                                        $row1 = mysqli_fetch_assoc($result1) ;

                                        array_push($array_name_places,$row1['name']) ;

                                    }
                                    $i =0 ;
                                    ?>
                                <script>
                                    var count = 0 ;
                                    var i ;
                                    count = <?php echo $count   ?> ;



                                    </script>

                                <form style="float: left;width: 25%" autocomplete="off" action="/action_page.php">
                                    <br>
                                    <input style="width: 150px"  class="inplace"  id="tags" type="text" name="myCountry" placeholder="Place Name">
                                </form>
                                    <script>
                                        var  countries = <?php echo json_encode($array_name_places); ?>;
                                      //  var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
                                        function autocomplete(inp, arr) {
                                            /*the autocomplete function takes two arguments,
                                            the text field element and an array of possible autocompleted values:*/
                                            var currentFocus;
                                            /*execute a function when someone writes in the text field:*/
                                            inp.addEventListener("input", function(e) {
                                                var a, b, i, val = this.value;
                                                /*close any already open lists of autocompleted values*/
                                                closeAllLists();
                                                if (!val) { return false;}
                                                currentFocus = -1;
                                                /*create a DIV element that will contain the items (values):*/
                                                a = document.createElement("DIV");
                                                a.setAttribute("id", this.id + "autocomplete-list");
                                                a.setAttribute("class", "autocomplete-items");
                                                /*append the DIV element as a child of the autocomplete container:*/
                                                this.parentNode.appendChild(a);
                                                /*for each item in the array...*/
                                                for (i = 0; i < arr.length; i++) {
                                                    /*check if the item starts with the same letters as the text field value:*/
                                                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                                                        /*create a DIV element for each matching element:*/
                                                        b = document.createElement("DIV");
                                                        /*make the matching letters bold:*/
                                                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                                        b.innerHTML += arr[i].substr(val.length);
                                                        /*insert a input field that will hold the current array item's value:*/
                                                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                                                        /*execute a function when someone clicks on the item value (DIV element):*/
                                                        b.addEventListener("click", function(e) {
                                                            /*insert the value for the autocomplete text field:*/
                                                            inp.value = this.getElementsByTagName("input")[0].value;
                                                            /*close the list of autocompleted values,
                                                            (or any other open lists of autocompleted values:*/
                                                            closeAllLists();
                                                        });
                                                        a.appendChild(b);
                                                    }
                                                }
                                            });
                                            /*execute a function presses a key on the keyboard:*/
                                            inp.addEventListener("keydown", function(e) {
                                                var x = document.getElementById(this.id + "autocomplete-list");
                                                if (x) x = x.getElementsByTagName("div");
                                                if (e.keyCode == 40) {
                                                    /*If the arrow DOWN key is pressed,
                                                    increase the currentFocus variable:*/
                                                    currentFocus++;
                                                    /*and and make the current item more visible:*/
                                                    addActive(x);
                                                } else if (e.keyCode == 38) { //up
                                                    /*If the arrow UP key is pressed,
                                                    decrease the currentFocus variable:*/
                                                    currentFocus--;
                                                    /*and and make the current item more visible:*/
                                                    addActive(x);
                                                } else if (e.keyCode == 13) {
                                                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                                                    e.preventDefault();
                                                    if (currentFocus > -1) {
                                                        /*and simulate a click on the "active" item:*/
                                                        if (x) x[currentFocus].click();
                                                    }
                                                }
                                            });
                                            function addActive(x) {
                                                /*a function to classify an item as "active":*/
                                                if (!x) return false;
                                                /*start by removing the "active" class on all items:*/
                                                removeActive(x);
                                                if (currentFocus >= x.length) currentFocus = 0;
                                                if (currentFocus < 0) currentFocus = (x.length - 1);
                                                /*add class "autocomplete-active":*/
                                                x[currentFocus].classList.add("autocomplete-active");
                                            }
                                            function removeActive(x) {
                                                /*a function to remove the "active" class from all autocomplete items:*/
                                                for (var i = 0; i < x.length; i++) {
                                                    x[i].classList.remove("autocomplete-active");
                                                }
                                            }
                                            function closeAllLists(elmnt) {
                                                /*close all autocomplete lists in the document,
                                                except the one passed as an argument:*/
                                                var x = document.getElementsByClassName("autocomplete-items");
                                                for (var i = 0; i < x.length; i++) {
                                                    if (elmnt != x[i] && elmnt != inp) {
                                                        x[i].parentNode.removeChild(x[i]);
                                                    }
                                                }
                                            }
                                            /*execute a function when someone clicks in the document:*/
                                            document.addEventListener("click", function (e) {
                                                closeAllLists(e.target);
                                            });
                                        }

                                        autocomplete(document.getElementById("tags"), countries);
                                    </script>
                                    <label>on date:</label>
                                    <input id="date" class="inplace"  type="date">
                                    <label>For a while </label>
                                    <input style="width:10%" id="day" class="inplace" type="number">

                                    <input type="button" onclick="getinfo()" name="Add" value="Add Next Place" style="background-color:#454545;color:#f7f7f7;border:none ;margin-top: 6%" class="btn "><br>




                                <script>

                                    var count1= 1;
                                    function getinfo(){

                                        var name = document.getElementById('tags').value ;
                                        var date = document.getElementById('date').value ;
                                        var day = document.getElementById('day').value ;

                                        document.getElementById('tags').value="" ;
                                        document.getElementById('date').value="" ;
                                        document.getElementById('day').value="" ;


                                        add_row(name,date,day) ;
                                        count1 ++ ;

                                    }

                                </script>






                            </div>


                            <div class="col-md-6"  style="border-style: inset; margin-bottom: 5%;margin-top:5%;width: 500px;height: 300px;float: right;overflow: hidden" id="plane_map"></div>
                            <div class="col-md-12" style=" text-align:center"><input onclick="send_data()" type="submit"  name="Add" value="Save My Plan" style="background-color:#454545;color:#f7f7f7;border:none ;margin: 4%" class="btn ">
                                <p style="border-style: inset;width:60%;margin-left:20%"></p>
                            </div>



                            <?php


                            $sql = "SELECT * FROM plan WHERE email = '$email' ORDER BY order_places ASC ";
                            $result = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($result);
                            // if($result->num_rows>0){echo "suc1";}
                            if (!$result) {
                                printf("Error: %s\n", mysqli_error($conn));
                                exit();
                            }
                            $lat_array = array();
                            $lng_array = array() ;
                            $cc = 0 ;
                            while($row=mysqli_fetch_assoc($result)) {
                                echo '<input type="hidden" id="lat'.$cc.'" value="'.$row['lat'].'">' ;
                                echo '<input type="hidden" id="lng'.$cc.'" value="'.$row['lng'].'">' ;
                                array_push($lat_array,$row['lat']) ;
                                array_push($lng_array,$row['lng']) ;
                                $cc++;
                            }

                            $x =0 ;
                            $y =1 ;
                            $z=2;
                            ?>
                            <script type="text/javascript">
                                let map1;
                                var directionsDisplay;
                                var directionsService;
                                var myOptions ;
                                function initMap() {


                                    map1 = new google.maps.Map(document.getElementById("plane_map"));
                                    var directionsService = new google.maps.DirectionsService();


                                    var directionDisplay = new google.maps.DirectionsRenderer();

//set the directions display service to the map
                                    directionDisplay.setMap(map1);
//set the directions display panel
//panel is usually just and empty div.
//This is where the turn by turn directions appear.


//build the waypoints
//free api allows a max of 9 total stops including the start and end address
                                    var i = 0 ;
                                    var lat=[];
                                    var lng=[] ;
                                    var num = <?php echo $count ?>;

                                    var uu;
                                    var items=[];
                                    var start_p ;
                                    var final_p ;
                                    for(uu=0;uu<num;uu++) {
                                        lat.push(document.getElementById('lat'+uu).value) ;
                                        lng.push(document.getElementById('lng'+uu).value) ;
                                    }

                                    if(num == 2) {
                                        start_p =''+ lat[0]+','+lng[0] ;
                                        final_p = ''+lat[1] +','+ lng[1] ;
                                    }
                                    if(num >2) {
                                        var size_lat = lat.length ;

                                        start_p =''+ lat[0]+','+lng[0] ;
                                        final_p = ''+lat[size_lat-1] +','+ lng[size_lat-1] ;
                                        var i;
                                        for( i =1;i<size_lat-1;i++){
                                            var ll = document.getElementById('lat'+i).value ;
                                            var ln = document.getElementById('lng'+i).value ;
                                            var gg = ''+ll+','+ln ;
                                            items.push(gg);
                                        }
                                    }




                                    var waypoints = [];
                                    for (var i = 0; i < items.length; i++) {
                                        var address = items[i];
                                        if (address !== "") {
                                            waypoints.push({
                                                location: address,
                                                stopover: true
                                            });
                                        }
                                    }

//set the starting address and destination address
                                    var originAddress = ""+start_p;
                                    var destinationAddress = ""+final_p;
                                    var  infoWindow=new google.maps.InfoWindow;
                                    var  infoWindow1=new google.maps.InfoWindow;
                                    var pos = {
                                        lat: <?php echo $lat_array[$y] ?>,


                                        lng: <?php echo $lng_array[$y] ?>
                                    };
                                    infoWindow.setPosition(pos);
                                    infoWindow.setContent('"<div>first</div>"') ;
                                    // infoWindow.open(map1);

                                    pos = {
                                        lat: <?php echo $lat_array[$x] ?>,


                                        lng: <?php echo $lng_array[$x] ?>
                                    }
                                    infoWindow1.setPosition(pos);
                                    infoWindow1.setContent('"<div>Second</div>"') ;
                                    //infoWindow1.open(map1);



//build directions request
                                    var request = {
                                        origin: originAddress,
                                        destination: destinationAddress,
                                        waypoints: waypoints, //an array of waypoints
                                        optimizeWaypoints: true, //set to true if you want google to determine the shortest route or false to use the order specified.
                                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                                    };

//get the route from the directions service
                                    directionsService.route(request, function (response, status) {
                                        if (status == google.maps.DirectionsStatus.OK) {
                                            directionDisplay.setDirections(response);

                                        }
                                        else {
                                            alert('error') ;
                                        }
                                    });


                                }

                            </script>
                            <script type="text/javascript"
                                    src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&sensor=false&key=AIzaSyARQUo18iVGcVQlVxfugMdUSXTHNvjMcVU&callback=initMap">
                            </script>
                            <!---------here raw------>


                            <div id="plan_item" class="col-md-12"  style="width:100%;padding:5%;background-color:#f7f7f7" >
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




                                $places_name =['hotel','tour','restaurant'];

                                for($x=0;$x < 3;$x++) {
                                    $sql = "SELECT * FROM booked_item WHERE user_email = '$email'AND type='$places_name[$x]' ";
                                    $result = mysqli_query($conn, $sql);


                                    // if($result->num_rows>0){echo "suc1";}
                                    if (!$result) {
                                        printf("Error: %s\n", mysqli_error($conn));
                                        exit();
                                    }

                                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


                                    //$count = mysqli_num_rows($result);
                                    $count = mysqli_num_rows($result);


                                    if ($count) {
                                        echo '
                                       
                                         <div class="col-md-12 animate-box">
                                        <div class="room-wrap">
                                             <br><div class="row" style="text-align: center;">
                                                <h1 class ="h22" >All Booked '.$places_name[$x].'</h1>
                                                
                                            </div></div></div>
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
                                            ';
                                    }




                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $place_id = $row['place_id'] ;

                                        $sql1 = "SELECT * FROM places WHERE place_id = '$place_id' ";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row1 = mysqli_fetch_assoc($result1);


                                        echo ' 
                                          <div class="col-md-12 animate-box">
                                            <div class="row" style="background-color: #f7f7f7">
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="room-img" style="background-image: url('.$row1['photo'].'); width: 130px;height: 130px"></div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="desc">
                                                        <span class="day-tour">' . $row['number_day'] . ' days</span>
                                                        <h4>' . $row1['name'] . '</h4>
                                                        <form method="post" action="hoteldelconfig.php">
                                                        <input  type ="hidden" name="id" value="' . $row['id'] . '">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-1">
                                                    
                                                    <input  id="' . $row['id'] . '"  type="submit" name="delete" style="background-color:#454545;color:#f7f7f7;border:none "  value="Delete" class="btn">
                                                    </form>
                                                    <input type="button" onclick="show_confirm()" id="confirm" name="confirm" style="background-color:#454545;color:#f7f7f7;border:none " value="confirm" class="btn " >
                                                    <div id="show" style=" display:none">
                                                   
                                                        
                                                       
                                                       
                                                         </div>
                                                    </div>
                                                
                                                    <div class="col-md-3 col-sm-3">
                                                    <div class="desc">
                                                       
                                                        <form action="add_comment.php" method="post">
                                                       <textarea style="width:100% ;height: 100px;resize:none;background-color:#fff;border-style:inset;border-bottom: 3px inset #000;border-radius:15px"name="data"  placeholder="Add your Notes" rows="5" cols="15"></textarea>
                                                      <input type="hidden" name="id" value="' . $row['place_id'] . '">
                                                      <input type="hidden" name="name" value="' . $name . '">
                                                      <input type="hidden" name="con1" value="'.$country.'" >
                                                      
                                                    </div>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1">
                                                   <br>
                                                    <input type="submit" name="Save" style="background-color:#454545;color:#f7f7f7;border:none " value="Save" class="btn ">
                                                     </form>
                                                     </div>
                                                     
                                                    
                                                         </div>
                                                         
                                                       
                                                      <br><br> 
                                                     </div>
                                       
                                    ';
                                    }
                                }


                                $sql = "SELECT * FROM flight_tic WHERE email = '$email'" ;
                                $result = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($result1);
                                if($count >0) {
                                     echo '
                                       
                                         <div id="flight_item" class="col-md-12 animate-box">
                                        <div class="room-wrap">
                                             <br><div class="row" style="text-align: center;">
                                                <h1 class ="h22" >All Booked Flights</h1>
                                                
                                            </div></div></div>
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
                                            ';
                                    }

                                while ( $row = mysqli_fetch_assoc($result)) {
                                        $id_f = $row['id'] ;
                                        $sql1 = "SELECT * FROM booked_confirm WHERE place_id = '$id_f'" ;
                                    $result1 = mysqli_query($conn, $sql1);
                                    $count = mysqli_num_rows($result1);
                                    if($count == 1) {
                                        echo ' 
                                          <div class="col-md-12 animate-box">
                                            <div class="row" style="background-color: #f7f7f7">
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="room-img" style="background-image: url(images/planf.jpg); width: 130px;height: 130px"></div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="desc">
                                                        <span class="day-tour"> On '. $row['Date'].' At '.$row['Time'].'</span>
                                                        <h4>' . $row['journey'] . '</h4>
                                                   
                                                    </div>
                                                    </div>
                                                     <div class="col-md-2 col-sm-1">
                                                     Confirmed By Admin
                                                     </div>
                                                   
                                                      <br><br> 
                                                     </div>
                                       
                                    ';
                                    }
                                    else {
                                    echo ' 
                                          <div class="col-md-12 animate-box">
                                            <div class="row" style="background-color: #f7f7f7">
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="room-img" style="background-image: url(images/planf.jpg); width: 130px;height: 130px"></div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="desc">
                                                        <span class="day-tour">On '. $row['Date'].' <br> At '.$row['Time'].'</span>
                                                      <br><br>  <h4>To: ' . $row['journey'] . '</h4>
                                                        <form method="post" action="hoteldelconfig.php">
                                                        <input  type ="hidden" name="id" value="' . $row['id'] . '">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-1">
                                                    
                                                    <input  id="' . $row['id'] . '"  type="submit" name="delete" style="background-color:#454545;color:#f7f7f7;border:none "  value="Delete" class="btn">
                                                    </form>
                                                    <input type="button" onclick="show_confirm()" id="confirm" name="confirm" style="background-color:#454545;color:#f7f7f7;border:none " value="confirm" class="btn " >
                                                    <div id="show" style=" display:none">
                                                   
                                                         </div>
                                                    </div>
                                                
                                                  
                                                      <br><br> 
                                                     </div>
                                       
                                    ';}
                                }


                                ?>

                                <div class="popup" style="hieght: 400px">
                                    <div class="popup-content">
                                        <div class="close1">
                                            <i style="color:#454545" class="fa fa-times" aria-hidden="true"></i>
                                        </div>
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

                                            <input type="text" style="border:none; border-bottom:1px solid" class="input100" placeholder="Enter visa number">

                                        </div>
                                        <br>



                                        <input class="input100" type="number" name="paid" placeholder="Credit Card Number" >
                                        <br>
                                        <div class="container-form-btn" style="margin-top:6%; ">
                                            <input type="submit" name="submit" class="btn btn-primary" value="confirm" style="background-color:#454545;border:none;font-weight: 900;font-family: Quicksand, Arial, sans-serif;">
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function show_confirm() {
                                        document.querySelector(".popup").style.display = "flex" ;
                                    }

                                    document.querySelector(".close1").addEventListener("click",function () {
                                        document.querySelector(".popup").style.display = "none" ;
                                    })
                                </script>

                            </div>
                        </div>
                        <script type="text/javascript">
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

<div class="gototop js-top">
    <a href="#" style="background-color:#f7f7f7;color:#454545" class="js-gotop"><i class="icon-arrow-up2"></i></a>
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

