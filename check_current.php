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
$email = $_SESSION['email'] ;
$name = $_SESSION['name'] ;
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tour Template</title>
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
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
            width: 90%;

        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
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

                    <div class="col-xs-10 text-right menu-1">

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
                                    <h2>by colorlib.com</h2>
                                    <h1>Tour Overview</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="colorlib-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-division">
                                <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                                    <h2>Hello , This is your plane</h2>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 animate-box text-center">
                                        <p><a href="tours.php?email=<?php echo $email?>&name=<?php echo $name?>" class="btn btn-primary">use website for current location  </a></p>
                                    </div>
                                    <div class="col-md-12 animate-box text-center">
                                        <p><a href="resturantphp.php?email=<?php echo $email?>&name=<?php echo $name?>" class="btn btn-primary">use for another location</a></p>
                                    </div><br><br>

                                    <div class="form-field">
                                        <input type="text" id="pac-input" name="myCountry"   placeholder="Search Location">

                                        <br> <br>
                                    </div>
                                </div>
                            </div>
                            <div class="pac-card" id="pac-card">
                            <div>

                                <div id="type-selector" class="pac-controls" style="background-color: #0c5460">
                                    <input onclick="set_location()" type="button"  value="Set this location" >
                                </div>

                            </div>

                        </div>
                        <div id="map"></div>
                        <div id="infowindow-content">
                            <img src="" width="16" height="16" id="place-icon">
                            <span id="place-name"  class="title"></span><br>
                            <span id="place-address"></span>
                        </div>
                            <div class="col-md-2">

                        </div>
                        <br><br><br>

                        <script type="text/javascript">
                            let lat1 ;
                            let lng1 ;
                            // This example requires the Places library. Include the libraries=places
                            // parameter when you first load the API. For example:
                            // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                            function initMap() {
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: -33.8688, lng: 151.2195},
                                    zoom: 13
                                });
                                var card = document.getElementById('pac-card');
                                var input = document.getElementById('pac-input');
                                var types = document.getElementById('type-selector');
                                var strictBounds = document.getElementById('strict-bounds-selector');

                                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

                                var autocomplete = new google.maps.places.Autocomplete(input);

                                // Bind the map's bounds (viewport) property to the autocomplete object,
                                // so that the autocomplete requests use the current map bounds for the
                                // bounds option in the request.
                                autocomplete.bindTo('bounds', map);

                                // Set the data fields to return when the user selects a place.
                                autocomplete.setFields(
                                    ['address_components', 'geometry', 'icon', 'name']);

                                var infowindow = new google.maps.InfoWindow();
                                var infowindowContent = document.getElementById('infowindow-content');
                                infowindow.setContent(infowindowContent);
                                var marker = new google.maps.Marker({
                                    map: map,
                                    anchorPoint: new google.maps.Point(0, -29)
                                });

                                autocomplete.addListener('place_changed', function() {
                                    infowindow.close();
                                    marker.setVisible(false);
                                    var place = autocomplete.getPlace();
                                    if (!place.geometry) {
                                        // User entered the name of a Place that was not suggested and
                                        // pressed the Enter key, or the Place Details request failed.
                                        window.alert("No details available for input: '" + place.name + "'");
                                        return;
                                    }

                                    // If the place has a geometry, then present it on a map.
                                    if (place.geometry.viewport) {
                                        map.fitBounds(place.geometry.viewport);
                                    } else {
                                        map.setCenter(place.geometry.location);
                                        map.setZoom(17);  // Why 17? Because it looks good.
                                    }
                                    marker.setPosition(place.geometry.location);
                                    marker.setVisible(true);
                                    lat1 = place.geometry.location.lat() ;
                                    lng1 = place.geometry.location.lng() ;


                                    var address = '';
                                    if (place.address_components) {
                                        address = [
                                            (place.address_components[0] && place.address_components[0].short_name || ''),
                                            (place.address_components[1] && place.address_components[1].short_name || ''),
                                            (place.address_components[2] && place.address_components[2].short_name || '')
                                        ].join(' ');
                                    }

                                    infowindowContent.children['place-icon'].src = place.icon;
                                    infowindowContent.children['place-name'].textContent = place.name;
                                    infowindowContent.children['place-address'].textContent = address;
                                    infowindow.open(map, marker);
                                });

                                // Sets a listener on a radio button to change the filter type on Places
                                // Autocomplete.
                                function setupClickListener(id, types) {
                                    var radioButton = document.getElementById(id);
                                    radioButton.addEventListener('click', function() {
                                        autocomplete.setTypes(types);
                                    });
                                }

                                setupClickListener('changetype-all', []);
                                setupClickListener('changetype-address', ['address']);
                                setupClickListener('changetype-establishment', ['establishment']);
                                setupClickListener('changetype-geocode', ['geocode']);

                                document.getElementById('use-strict-bounds')
                                    .addEventListener('click', function() {
                                        console.log('Checkbox clicked! New state=' + this.checked);
                                        autocomplete.setOptions({strictBounds: this.checked});
                                    });
                            }
                            function set_location() {

                              window.location.href = "resturantphp_C.php?lat="+lat1+"&lng="+lng1+"&email=<?php echo $email?>&name=<?php echo $name?>" ;
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARQUo18iVGcVQlVxfugMdUSXTHNvjMcVU&libraries=places&callback=initMap"
                                async defer></script>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- SIDEBAR-->





                <div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                                <h2>Sign Up for a Newsletter</h2>
                                <p>Sign up for our mailing list to get latest updates and offers.</p>
                                <form class="form-inline qbstp-header-subscribe">
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                                <button type="submit" class="btn btn-primary">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <footer id="colorlib-footer" role="contentinfo">
                    <div class="container">
                        <div class="row row-pb-md">
                            <div class="col-md-3 colorlib-widget">
                                <h4>Tour Agency</h4>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                                <p>
                                <ul class="colorlib-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-md-2 colorlib-widget">
                                <h4>Book Now</h4>
                                <p>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#">Flight</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="#">Tour</a></li>
                                    <li><a href="#">Car Rent</a></li>
                                    <li><a href="#">Beach &amp; Resorts</a></li>
                                    <li><a href="#">Cruises</a></li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-md-2 colorlib-widget">
                                <h4>Top Deals</h4>
                                <p>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#">Edina Hotel</a></li>
                                    <li><a href="#">Quality Suites</a></li>
                                    <li><a href="#">The Hotel Zephyr</a></li>
                                    <li><a href="#">Da Vinci Villa</a></li>
                                    <li><a href="#">Hotel Epikk</a></li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4>Blog Post</h4>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
                                    <li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
                                    <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-md-push-1">
                                <h4>Contact Information</h4>
                                <ul class="colorlib-footer-links">
                                    <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                                    <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                                    <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                    <li><a href="#">yoursite.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                                    <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                                </p>
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

