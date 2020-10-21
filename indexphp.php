<?php

 $country = "1" ;
$page_from = "" ;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET['country'])) {
        $country = $_GET['country'] ;
    }
    if(isset($_GET['casho'])) {
        $country ='0' ;
    }
    if(isset($_GET['page_from'])) {
        $page_from = 'u' ;
    }
}

session_start();
if(isset($_GET['country'])) {
    $_SESSION['country'] = $country ;

}
if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
    $email = $_SESSION['email'] ;
    $name = $_SESSION['name'] ;
}
else {
    header("location: ./Login_v3/login.php");
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $place_id =  $_POST['place_id'];
    $place_name =  $_POST['place_name'];
   
    $photo =  $_POST['photo'];
    $name = $_POST['name'];
    $lat = $_POST['lat'] ;
    $lng = $_POST['lng'] ;
    $country = $_SESSION['country'] ;
    $address = $_POST['address'] ;
    $type = $_POST['type'] ;
    $price = $_POST['price'] ;
   // echo $email ;

  //  echo $place_id;

}
else
{
    $place_id = '0';
  //  echo 'no connection';
}


?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MISHWAR</title>
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

	<!--weather links-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="../js/weather.js" > </script>

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
             background-color: #e9e9e9;
         }

         /*when navigating through the items using the arrow keys:*/
         .autocomplete-active {
             background-color: DodgerBlue !important;
             color: #ffffff;
         }
     </style>
	</head>
	<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       echo  '<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
    <script type="text/javascript">
            $(document).ready(function () {

                $("html, body").animate({
                scrollTop: $("#colorlib-reservation").offset().top
            }, 2000);
        });
    </script>
    ' ;

    }

    ?>

    <script>
        var con_name = '<?php echo $country ?>' ;
        function gg() {
            fetch('https://extreme-ip-lookup.com/json/')
                .then(res => res.json())
                .then(response => {
                    console.log("Country: ", response.country);
                    if(con_name == "1") {

                        window.location.href = "indexphp.php?country=" + response.country;
                    }


                })
                .catch((data, status) => {
                    console.log('Request failed');
                });

        }

        gg() ;
    </script>
	<div class="colorlib-loader"></div>
   
	<div id="page" style="background-color:#fff">

		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="indexphp.php">MISHWAR</a></div>
						</div>

						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="indexphp.php">Home</a></li>
								<li class="has-dropdown">

									<ul class="dropdown">
										<li><a href="#">Destination</a></li>
										<li><a href="#">Weather</a></li>
										<li><a href="#">Hotels</a></li>
										<li><a href="#">Booking</a></li>
									</ul>
								</li>
                                <li >
                                    <a href="plan.php">My plan</a>

                                </li>
								<li><a href="hotels.php">Hotels</a></li>
								<li><a href="services.php ">Services</a></li>
								
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
                                <li class="has-dropdown" >
                                    <a href="#"> <?php echo  $name?> <i class="fa fa-sort-desc " style="margin-top: 20px;" aria-hidden="true"></i></a>
                                    <ul class="dropdown">
                                        <li style="display: flex;"><a href="Login_v3/login.php?status=logout" target="_self"><i class="fa fa-sign-out out" aria-hidden="true"></i>  Log-out</a>

                                            <style>
                                                /*.out{
                                                    color: #ffffff;
                                                    margin-left: 5px;
                                                   }*/
                                            </style>
                                        </li>
                                        <li><a href="profile/MyProfile.php"><i class="fa fa-user-circle-o out" aria-hidden="true"></i>  My Profile</a></li>
                                        <li><a href="contact/contact.php"><i class="fa fa-question-circle-o out" aria-hidden="true"></i>  Help</a></li>
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
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>2 Days Mishwar</h2>
				   					<h1>Amazing Maldives Mishwar</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Explore our most tavel agency</h2>
				   					<h1>Our Travel Agency</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience</h2>
				   					<h1>Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>

		</aside>

		<div id="colorlib-reservation">

			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">

                                <?php

                                if ($place_id == '0') {

                                   // echo $place_id ;
                                    echo '<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
								<li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
								<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Find a taxi</a></li>
								<li><a style="height: 52px" data-toggle="tab" href="#Weather"><img src=".\images\weather.png" class="imgweathr"> Weather</a></li>
								
								<style>
									img.imgweathr {height: 25px;width: 25px;}
									
								</style>
								</ul>
						</div>
                        
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
								<form method="post" action="flightconf.php" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">From:</label>
				                    <div class="form-field">
				                    <input type="hidden" name="page_from" value="'.$page_from.'">
				                      <input name="location_from" type="text" id="location_from" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				              	  <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input name="location_to" type="text" id="location_to" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input name="check_in" type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				               
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="guest" id="people" class="form-control">
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
				         </div>
				         <div id="hotel" class="tab-pane fade">
								<form method="post" class="colorlib-form">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												
												<div class="form-field">
												
											<button type="button" class="btn btn-primary" > <a style="color:white" href="hotels.php?email='.$email.'&name='.$name.'">Choose Hotel </a>  </button>										
												

												</div>
											</div>
										</div>
										
								</form>
							</div>
							</div>
							<div id="flight" class="tab-pane fade">
								<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
				         </div>
								';
                                }
                                else {

                                    echo '<li ><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
								<li class="active"><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
								<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i>Find a taxi</a></li>
								<li><a data-toggle="tab" href="#Weather"><img src=".\images\weather.png" class="imgweathr"> Weather</a></li>
								
								<style>
									img.imgweathr {height: 25px;width: 25px;}
									
								</style>
								
							</ul>
						</div>
							<div class="tab-content">
								<div id="hotel" class="tab-pane fade in active">
								<form method="POST" ACTION="hotelsconf.php" class="colorlib-form">
								<input type="hidden"  name="place_id" value="'.$place_id.'">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
											<input type="hidden"  name="email" value="'.$email.'">
											<input type="hidden"  name="place_name" value="'.$place_name.'">
											<input type="hidden"  name="photo" value="'.$photo.'">
											<input type="hidden"  name="name" value="'.$name.'">
											<input type="hidden"  name="lat" value="'.$lat.'">
											<input type="hidden"  name="lng" value="'.$lng.'">
											<input type="hidden" name="address" value="'.$address.'">
											<input type="hidden"  name="status" value="h">
											<input type="hidden"  name="type" value="'.$type.'">
											<input type="hidden" name="price" value="'.$price.'">
												
												<div class="form-field">
													
													<button class="btn btn-primary"><a style="color:black" href="hotels.php?email='.$email.'"> Choose Hotle</a></button>
													<br><br><br>
													   You Choose this Hotel : <br>
														<div style="margin-bottom=10%"><h5 style="color:white">  '.$place_name.'</h5></div>
														
													
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="date">Number of people:</label>
												<div class="form-field">
													
													<input NAME="number_people" class="form-control number" size="5"  type="number"  >
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="date">Number of Day:</label>
												<div class="form-field">
													
													<input NAME="day_number" size="5" class="form-control" type="number"   >
												</div>
											</div>
										</div>
										
										<div class="col-md-3">
											<div class="form-group">
												<label for="date">Number of room:</label>
												<div class="form-field">
													
													<input NAME="number_room" size="5" class="form-control" type="number"   >
												</div>
											</div>
										</div>
										
										<div class="col-md-2">
											<input type="submit" name="submit" id="submit" value="Book a hotel" class="btn btn-primary btn-block">
										</div>
									</div>
								</form>
							</div>
							
								';
                                }
                                ?>



						   <div id="car" class="tab-pane fade">
						   	<form method="post" action="Car.php" class="colorlib-form">
                                <input type="hidden" name="lat" id="lat">
                                <input type="hidden" name="lng" id="lng">

                                <script>
                                    var lat ;
                                    var lng ;
                                    var loc  ;
                                    var pos ;

                                    function getLocation() {
                                        if (navigator.geolocation) {
                                            navigator.geolocation.getCurrentPosition(showPosition);
                                        } else {

                                        }
                                    }

                                    function showPosition(position) {
                                      //  document.write('<input type="hidden" name="lat" value="'+position.coords.latitude+'">') ;
                                        document.getElementById('lat').value = position.coords.latitude ;
                                        document.getElementById('lng').value = position.coords.longitude ;
                                        pos = {
                                            lat: position.coords.latitude,


                                            lng: position.coords.longitude
                                        };


                                    }
                                    getLocation() ;


                                </script>


				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">From:</label>
				                    <div class="form-field">
				                      <input type="text" name="from" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date">To:</label>
                                            <div class="form-field">
                                                <input type="text" name="to" id="location" class="form-control" placeholder="Search Location">
                                            </div>
                                        </div>
                                    </div>


				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Car" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>








						   <div id="Weather" class="tab-pane fade">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">Another Country:</label>
				                    <div class="form-field">
                                        <form autocomplete="off" action="/action_page.php">
									  <input type="text" id="myInput" name="myCountry"  class="form-control" placeholder="Search Location">
                                        </form>
									  <script >

                                          var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
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

                                          autocomplete(document.getElementById("myInput"), countries);
                                      </script>
				                    </div>
				                  </div>
				              	 </div>
				                
				                <div class="col-md-2">
				                  <input type="button"  onclick="getweather1(document.getElementById('myInput').value)" value="Get Weather" class="btn btn-primary btn-block">
				                </div>
				              </div>
							</form>
						
							<div class="weatherResponse">
								
							</div>
							<style>
							.weatherResponse{color: #ffffff;text-align: center; font-size: 14px;}
							
							</style>
						   </div>
			         </div>
					</div>
				</div>
			</div>
    <div align="center" id="weather3">

    </div>


        <script>
            var current ='<?php echo $country ?>' ;
            getweather1(current) ;

            var count = 0 ;

            function getweather1(con) {
              //  var con = document.getElementById('myInput').value;


                if (con == 'Jordan') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/30d5936d24/jordan/" data-label_1="JORDAN" data-label_2="WEATHER" data-theme="original" >JORDAN WEATHER</a>');
                    //!function (d1, s1, id1) {var js1, fjs1 = d1.getElementsByTagName(s1)[0];if (!d1.getElementById(id1)) {js1 = d1.createElement(s1);js1.id1 = id1;js1.src = 'https://weatherwidget.io/js/widget.min.js';fjs1.parentNode.insertBefore(js1, fjs1);}}(document, 'script', 'weatherwidget-io-js1');

                }
                if(con == 'Egypt') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d8230d80/egypt/" data-label_1="EGYPT" data-label_2="WEATHER" data-theme="original" >EGYPT WEATHER</a>');
               //     !function(d2,s2,id2){var js2,fjs2=d2.getElementsByTagName(s2)[0];if(!d2.getElementById(id2)){js2=d2.createElement(s2);js2.id2=id2;js2.src='https://weatherwidget.io/js/widget.min.js';fjs2.parentNode.insertBefore(js2,fjs2);}}(document,'script','weatherwidget-io-js2');
                }
                if(con == 'Palestinian Territory' || con == 'Palestine') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/31d9535d23/palestine/" data-label_1="PALESTINE" data-label_2="WEATHER" data-theme="original" >PALESTINE WEATHER</a>');

                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                     }
                if(con == 'Syria') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/34d8039d00/syria/" data-label_1="SYRIA" data-label_2="WEATHER" data-theme="original" >SYRIA WEATHER</a>');

                    !function(d3,s3,id3){var js3,fjs3=d3.getElementsByTagName(s3)[0];if(!d3.getElementById(id3)){js3=d3.createElement(s3);js3.id3=id3;js3.src='https://weatherwidget.io/js/widget.min.js';fjs3.parentNode.insertBefore(js3,fjs3);}}(document,'script','weatherwidget-io-js3');
                }
                if(con == 'United States of America') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/37d09n95d71/united-states/" data-label_1="UNITED STATES" data-label_2="WEATHER" data-theme="original" >UNITED STATES WEATHER</a>');

                  //  !function(d4,s4,id4){var js4,fjs4=d4.getElementsByTagName(s4)[0];if(!d4.getElementById(id4)){js4=d4.createElement(s4);js4.id4=id4;js4.src='https://weatherwidget.io/js/widget.min.js';fjs4.parentNode.insertBefore(js4,fjs4);}}(document,'script','weatherwidget-io-js4');
                }
                if(con == 'Lebanon') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/37d57n85d25/lebanon/" data-label_1="LEBANON" data-label_2="WEATHER" data-theme="original" >LEBANON WEATHER</a>');

                 //   !function(d5,s5,id5){var js5,fjs5=d5.getElementsByTagName(s5)[0];if(!d5.getElementById(id5)){js5=d5.createElement(s5);js5.id5=id5;js5.src='https://weatherwidget.io/js/widget.min.js';fjs5.parentNode.insertBefore(js5,fjs5);}}(document,'script','weatherwidget-io-js5');
                }
                if(con == 'Iraq') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/33d2243d68/iraq/" data-label_1="IRAQ" data-label_2="WEATHER" data-theme="original" >IRAQ WEATHER</a>');

                 //  !function(d4,s4,id4){var js4,fjs4=d4.getElementsByTagName(s4)[0];if(!d4.getElementById(id4)){js4=d4.createElement(s4);js4.id4=id4;js4.src='https://weatherwidget.io/js/widget.min.js';fjs4.parentNode.insertBefore(js4,fjs4);}}(document,'script','weatherwidget-io-js4');
                }
                if(con == 'Algeria') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/28d031d66/algeria/" data-label_1="ALGERIA" data-label_2="WEATHER" data-theme="original" >ALGERIA WEATHER</a>');

                   // !function(d4,s4,id4){var js4,fjs4=d4.getElementsByTagName(s4)[0];if(!d4.getElementById(id4)){js4=d4.createElement(s4);js4.id4=id4;js4.src='https://weatherwidget.io/js/widget.min.js';fjs4.parentNode.insertBefore(js4,fjs4);}}(document,'script','weatherwidget-io-js4');
                }
                if(con == 'Turkey') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/38d9635d24/turkey/" data-label_1="TURKEY" data-label_2="WEATHER" data-theme="original" >TURKEY WEATHER</a>');

                }
                if(con == 'Saudi Arabia') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/23d8945d08/saudi-arabia/" data-label_1="SAUDI ARABIA" data-label_2="WEATHER" data-theme="original" >SAUDI ARABIA WEATHER</a>');

                }
                if(con == 'United Arab Emirates') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/25d3555d63/emirates-industrial-city/" data-label_1="EMIRATES INDUSTRIAL CITY" data-label_2="WEATHER" data-theme="original" >EMIRATES INDUSTRIAL CITY WEATHER</a>');

                }
                if(con == 'Morocco') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/31d79n7d09/morocco/" data-label_1="MOROCCO" data-label_2="WEATHER" data-theme="original" >MOROCCO WEATHER</a>');

                }
                if(con == 'Kuwait') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/29d3147d48/kuwait/" data-label_1="KUWAIT" data-label_2="WEATHER" data-theme="original" >KUWAIT WEATHER</a>');

                }
                if(con == 'Libya') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d3417d23/libya/" data-label_1="LIBYA" data-label_2="WEATHER" data-theme="original" >LIBYA WEATHER</a>');

                }
                if(con == 'Qatar') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/25d3551d18/qatar/" data-label_1="QATAR" data-label_2="WEATHER" data-theme="original" >QATAR WEATHER</a>');

                }
                if(con == 'Yemen') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/15d5548d52/yemen/" data-label_1="YEMEN" data-label_2="WEATHER" data-theme="original" >YEMEN WEATHER</a>');

                }
                if(con == 'Bahrain') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d0750d56/bahrain/" data-label_1="BAHRAIN" data-label_2="WEATHER" data-theme="original" >BAHRAIN WEATHER</a>');

                }
                if(con == 'Oman') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/21d4755d98/oman/" data-label_1="OMAN" data-label_2="WEATHER" data-theme="original" >OMAN WEATHER</a>');

                }
                if(con == 'Tunisia') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/33d899d54/tunisia/" data-label_1="TUNISIA" data-label_2="WEATHER" data-theme="original" >TUNISIA WEATHER</a>');

                }
                if(con == 'Bahrain') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d0750d56/bahrain/" data-label_1="BAHRAIN" data-label_2="WEATHER" data-theme="original" >BAHRAIN WEATHER</a>');

                }
                if(con == 'Bahrain') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d0750d56/bahrain/" data-label_1="BAHRAIN" data-label_2="WEATHER" data-theme="original" >BAHRAIN WEATHER</a>');

                }
                if(con == 'Bahrain') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d0750d56/bahrain/" data-label_1="BAHRAIN" data-label_2="WEATHER" data-theme="original" >BAHRAIN WEATHER</a>');

                }
                if(con == 'Bahrain') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d0750d56/bahrain/" data-label_1="BAHRAIN" data-label_2="WEATHER" data-theme="original" >BAHRAIN WEATHER</a>');

                }
                if(con == 'Bahrain') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d0750d56/bahrain/" data-label_1="BAHRAIN" data-label_2="WEATHER" data-theme="original" >BAHRAIN WEATHER</a>');

                }
                if(con == 'Bahrain') {
                    $("#weather3").empty();
                    $("#weather3").append('<a class="weatherwidget-io" href="https://forecast7.com/en/26d0750d56/bahrain/" data-label_1="BAHRAIN" data-label_2="WEATHER" data-theme="original" >BAHRAIN WEATHER</a>');

                }


                !function(d4,s4,id4){var js4,fjs4=d4.getElementsByTagName(s4)[0];if(!d4.getElementById(id4)){js4=d4.createElement(s4);js4.id4=id4;js4.src='https://weatherwidget.io/js/widget.min.js';fjs4.parentNode.insertBefore(js4,fjs4);}}(document,'script','weatherwidget-io-js4');






                }

        </script>

        <div id="colorlib-hotel">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <h2 class="h22">Popular Destination</h2>
                        <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="owl-carousel">

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
                                $sql = "SELECT * FROM popular ORDER BY count_n DESC ";
                                $result = mysqli_query($conn, $sql);
                                // if($result->num_rows>0){echo "suc1";}
                                if (!$result) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    exit();
                                }
                                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


                                //$count = mysqli_num_rows($result);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    if($country != $row['country']) {
                                        continue ;
                                    }
                                    else {

                                    $id_p = $row['place_id'] ;
                                    $sql1 = "SELECT * FROM places WHERE place_id = '$id_p'   ";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $row1 = mysqli_fetch_assoc($result1) ;
                                    if($row1['type'] != 'tour') {
                                        continue ;
                                    }

                                    $sql2 = "SELECT * FROM comments WHERE id = '$id_p' ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row2 = mysqli_fetch_assoc($result2) ;



                                echo '
                              <div class="item">
                                <div class="hotel-entry">
                                    <a href="#" class="hotel-img" style="background-image: url('.$row1['photo'].');">
                                        <p class="price"><span>$'.$row1['price'].'</span></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star"><span></span> '.$row['count_n'].' people visit this place</p>
                                        <h3><a href="#">'.$row1['name'].'</a></h3>
                                        <span class="place">'.$row1['address'].'</span>
                                        <p>All comments: <br> '.$row2['comments'].' </p>
                                    </div>
                                </div> </div>' ; }} ?>





                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
				  <div class="col-md-12">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2 class="h22">Recommended Hotels</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
					</div>
				</div>
			</div>
			<div class="tour-wrap">

                <?php
                $sql = "SELECT * FROM popular ORDER BY count_n DESC ";
                $result = mysqli_query($conn, $sql);
                // if($result->num_rows>0){echo "suc1";}
                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }
                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


                //$count = mysqli_num_rows($result);

                while ($row = mysqli_fetch_assoc($result)) {
                if($country != $row['country']) {
                    continue ;
                }
                else {

                $id_p = $row['place_id'] ;
                $sql1 = "SELECT * FROM places WHERE place_id = '$id_p'   ";
                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1) ;
                if($row1['type'] != 'hotel') {
                    continue ;
                }

                $sql2 = "SELECT * FROM comments WHERE id = '$id_p' ";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2) ;


                echo '
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url('.$row1['photo'].');">
					</div>
					<span class="desc">
						<p class="star"> '.$row['count_n'].' people visit this place</p>
						<h2>'.$row1['name'].'</h2>
						<span class="city">'.$row1['address'].'</span>
						<span class="price">$'.$row1['price'].'/night</span>
					</span>
				</a> ' ;}}
                ?>


			   </div>
			</div>
		</div>


		

		


		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2 class="h22">Our Satisfied Guests says</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box fadeInUp animated-fast">
						<div class="owl-carousel2 owl-carousel owl-theme owl-loaded">


                            <?php

                            $sql = "SELECT * FROM contact WHERE active = 's'";
                            $result = mysqli_query($conn, $sql);




                            while ( $row = mysqli_fetch_assoc($result)){
                                $con_email = $row['email'] ;
                                $sql1 = "SELECT * FROM person WHERE Email = '$con_email'   ";
                                $result1 = mysqli_query($conn, $sql1);
                                while ( $row1 = mysqli_fetch_assoc($result1)){
                                    echo '
                          
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/mem.png);"></span>
									<span class="user">'.$row['name'].'</span>
									<small>'.$row1['country'].'</small>
									<blockquote>
										<p>'.$row['message'].'</p>
									</blockquote>
								</div>
							</div>' ;}}
                            ?>



                        </div>
					</div>
				</div>	
			</div>
		</div>


		</div>
		</div>
    <footer class="footer_area" style="background-color: #000;">
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

