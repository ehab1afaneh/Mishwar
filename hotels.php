<?php

;
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
// username and password sent from form
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
    <title>Hotels</title>
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
            if(status == 5) {
                x2() ;
            }
        }
    }
    f1() ;
    function x() {
        swal(
            'Good job!',
            'Added Successfully to your plan \n Go To My Plan to Confirm it',
            'success'
        );
    }
    function y() {
        swal(
            'Sorry!',
            'You have already added This hotel in your Plan ',
            'error'
        );

    }
    function x1() {
        swal(
            'Good job!',
            'Added Successfully to your Favorite \n Go To Your Profile To Show It',
            'success'
        );
    }
    function y1() {
        swal(
            'Sorry!',
            'You have already added This hotel in your Favorite',
            'error'
        );

    }
    function x2() {
        swal(
            'Sorry!',
            'This hotel is full',
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
                            <li >
                                <a href="plan.php">My plane</a>

                            </li>
                            <li class="active"><a href="hotels.php">Hotels</a></li>
                            <li><a href="services.php ">Services</a></li>

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
                <li style="background-image: url(images/cover-img-4.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Mishwar</h2>
                                    <h1>Find Hotel</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="element" class="colorlib-wrap">
        <div class="container">
            <div  class="row">
                <div  class="col-md-9">
                    <div class="row">
                        <div id="cont" class="wrap-division">

                            <script>
                                var maximum_items ;
                                var r = 0;
                                let pos;
                                let map;
                                let bounds;
                                let infoWindow;
                                let currentInfoWindow;
                                let service;
                                let infoPane;
                                let request;
                                let lat;
                                let lng;
                                let map1;
                                var directionsDisplay;
                                var directionsService;
                                let  counrer_array =0 ;
                                var myOptions ;
                                let pop_1 =0 ;
                                let pop_2=0 ;
                                var array1 = [] ;
                                var button_1 ;
                                var button_2 ;


                                function initMap() {
                                  // alert('aa') ;
                                    // Initialize variables
                                    bounds = new google.maps.LatLngBounds();
                                    infoWindow = new google.maps.InfoWindow;
                                    currentInfoWindow = infoWindow;
                                    /* TODO: Step 4A3: Add a generic sidebar */
                                    infoPane = document.getElementById('panel');

                                    // Try HTML5 geolocation
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(position => {
                                            lat= position.coords.latitude ;
                                            lng=  position.coords.longitude ;
                                            pos = {
                                                lat: position.coords.latitude,


                                                lng: position.coords.longitude
                                            };



                                            map = new google.maps.Map(document.getElementById('current'), {
                                                center: pos,
                                                zoom: 17
                                            });
                                            bounds.extend(pos);

                                            infoWindow.open(map);
                                            map.setCenter(pos);
                                            let markerr = new google.maps.Marker({
                                                position: pos,
                                                map: map,
                                                label: "H",
                                                icon: {
                                                    url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                                }

                                            });

                                            directionsService = new google.maps.DirectionsService();

                                            directionsDisplay = new google.maps.DirectionsRenderer();

                                            myOptions = {
                                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                            };



                                            // Call Places Nearby Search on user's location
                                            getNearbyPlaces(pos);
                                        }, () => {
                                            // Browser supports geolocation, but user has denied permission
                                            handleLocationError(true, infoWindow);
                                        });

                                    } else {
                                        // Browser doesn't support geolocation
                                        handleLocationError(false, infoWindow);
                                    }

                                }





                                function show_2(button_id,max) {



                                    $("#cont").html("");
                                    var start = button_id -1 ;

                                    start = start * 6 ;

                                    var end = button_id * 6 ;
                                    var check = array1.length - start ;
                                    if (check < 6) {
                                        end = array1.length ;
                                    }

                                    for(start;start<end;start++) {
                                        if(start > max) {
                                            continue ;
                                        }

                                        var firstPhoto = array1[start].place_photo ;
                                        var price = array1[start].place_price ;
                                        var addstar = array1[start].place_add_star ;
                                        var star1 = array1[start].place_rate ;
                                        var websit = array1[start].place_website ;
                                        var name = array1[start].place_name ;
                                        var address = array1[start].place_address ;
                                        var lat = array1[start].place_lat ;
                                        var lng = array1[start].place_lng ;
                                        var place_id_ = array1[start].place_id_ ;
                                        var address_last ;
                                        var full_address = address ;
                                        var flag_check = 0 ;
                                        var address_initail = full_address ;
                                        if(full_address.length > 50) {
                                            flag_check = 1 ;
                                            address_initail = full_address.substring(0,40);
                                            address_initail = address_initail  ;
                                            address_last = full_address.substring(40,full_address.length);

                                        }

                                        if (flag_check == 1) {


                                            $("#cont").append('<div class="col-md-6 col-sm-6 animate-box fadeInUp animated-fast" style="margin-bottom=10px;"> <div class="hotel-entry">' +
                                                ' <a  class="hotel-img"' +
                                                ' style="background-image: url(' + firstPhoto + ');">' +
                                                ' <div class="popup-overlay"> <div class="popup-content">' +

                                                '</div> </div> <div class="popup" id=' + lat + ',' + lng +
                                                ' onclick="myFunction(' + start + ',this.id)">Show Direction ' +
                                                '' +
                                                '<span class="popuptext" id="myPopup' + start + '"></span>' +
                                                '' +
                                                '' +
                                                '</div>' +
                                                ' <p class="price"><span>' + price + '</span></p>' +
                                                ' </a>' +
                                                ' <div class="desc">' +
                                                ' <p class="star"><span>' + addstar +
                                                ' </span>' +
                                                ' Reviews  ' + star1 + '</p>' +
                                                ' <h3><a href=' + websit + '>' + name + '</a></h3>' +
                                                ' <span class="place">' + address_initail +
                                                '<a id='+place_id_+' href="#this.id"   onclick="show_last_address(this.id)">.. Continues Reading</a>'+
                                                '</span>' +

                                                ' </div>' +

                                                ' <form style="float: left;"  METHOD="POST" action="indexphp.php" > ' +
                                                 '<input type="hidden" name="photo" value="'+firstPhoto+'">' +
                                                '<input type="hidden" name="email" value="<?php echo $email ?>">'+
                                                '<input type="hidden" name="name" value="<?php echo $name ?>">'+
                                                '<input type="hidden" name="place_name" value="'+name+'">' +
                                                '<input type="hidden" name="place_id" value="'+place_id_+'">' +
                                                '<input type="hidden" name="lat" value="'+lat+'">' +
                                                '<input type="hidden" name="lng" value="'+lng+'">' +
                                                '<input type="hidden" name="address" value="'+address+'">' +
                                                '<input type="hidden" name="price" value="'+price+'">' +
                                                '<input type="hidden" name="type" value="b">' +
                                                '<input  id="name'+start+'" type="submit" name="submit"  value="Add To My Plan" class="btn btn-primary">' +

                                                '</form>'+


                                                ' <form  METHOD="POST" action="hotelsconf.php" > ' +
                                                '<input type="hidden" name="photo" value="'+firstPhoto+'">' +
                                                '<input type="hidden" name="email" value="<?php echo $email ?>">'+
                                                '<input type="hidden" name="name" value="<?php echo $name ?>">'+
                                                '<input type="hidden" name="place_name" value="'+name+'">' +
                                                '<input type="hidden" name="place_id" value="'+place_id_+'">' +
                                                '<input type="hidden" name="lat" value="'+lat+'">' +
                                                '<input type="hidden" name="lng" value="'+lng+'">' +
                                                '<input type="hidden" name="address" value="'+address+'">' +
                                                '<input type="hidden" name="type" value="f">' +
                                                '<input type="hidden" name="status" value="h">' +
                                                '<input type="hidden" name="price" value="'+price+'">' +
                                                '<input  id="name'+start+'" type="submit" name="submit"  value="Add To Favorite" class="btn btn-primary">' +
                                                '</form>'+

                                                ' </div>' +
                                                ' </div>  </div> ')
                                        }
                                        else {
                                            $("#cont").append('<div class="col-md-6 col-sm-6 animate-box fadeInUp animated-fast"> <div class="hotel-entry">' +
                                                ' <a  class="hotel-img"' +
                                                ' style="background-image: url(' + firstPhoto + ');">' +
                                                ' <div class="popup-overlay"> <div class="popup-content">' +

                                                '</div> </div> <div class="popup" id=' + lat + ',' + lng +
                                                ' onclick="myFunction(' + start + ',this.id)">Show Direction ' +
                                                '' +
                                                '<span class="popuptext" id="myPopup' + start + '"></span>' +
                                                '' +
                                                '' +
                                                '</div>' +
                                                ' <p class="price"><span>' + price + '</span></p>' +
                                                ' </a>' +
                                                ' <div class="desc">' +
                                                ' <p class="star"><span>' + addstar +
                                                ' </span>' +
                                                ' Reviews  ' + star1 + '</p>' +
                                                ' <h3><a href=' + websit + '>' + name + '</a></h3>' +
                                                ' <span class="place">' + address +
                                                '</span>' +

                                                ' </div>' +

                                                ' <form style="float: left;"  METHOD="POST" action="indexphp.php" > ' +
                                                '<input type="hidden" name="photo" value="'+firstPhoto+'">'+
                                                '<input type="hidden" name="email" value="<?php echo $email ?>">'+
                                                '<input type="hidden" name="name" value="<?php echo $name ?>">'+
                                                '<input type="hidden" name="place_name" value="'+name+'">' +
                                                '<input type="hidden" name="place_id" value="'+place_id_+'">' +
                                                '<input type="hidden" name="lat" value="'+lat+'">' +
                                                '<input type="hidden" name="lng" value="'+lng+'">' +
                                                '<input type="hidden" name="address" value="'+address+'">' +
                                                '<input type="hidden" name="type" value="b">' +
                                                '<input type="hidden" name="price" value="'+price+'">' +
                                                '<input  id="name'+start+'" type="submit" name="submit"  value="Add To My Plan" class="btn btn-primary">' +

                                                '</form>'+

                                                ' <form  METHOD="POST" action="hotelsconf.php" > ' +
                                                '<input type="hidden" name="photo" value="'+firstPhoto+'">'+
                                                '<input type="hidden" name="email" value="<?php echo $email ?>">'+
                                                '<input type="hidden" name="name" value="<?php echo $name ?>">'+
                                                '<input type="hidden" name="place_name" value="'+name+'">' +
                                                '<input type="hidden" name="place_id" value="'+place_id_+'">' +
                                                '<input type="hidden" name="lat" value="'+lat+'">' +
                                                '<input type="hidden" name="lng" value="'+lng+'">' +
                                                '<input type="hidden" name="address" value="'+address+'">' +
                                                '<input type="hidden" name="type" value="f">' +
                                                '<input type="hidden" name="status" value="h">' +
                                                '<input type="hidden" name="price" value="'+price+'">' +
                                                '<input  id="name'+start+'" type="submit" name="submit"  value="Add To Favorite" class="btn btn-primary">' +
                                                '</form>'+

                                                ' </div>' +
                                                ' </div>  </div> ')

                                        }
                                    }

                                }




                                function arrange(rate_number) {
                                    $("#cont").html("");
                                    var i ;
                                    var y;
                                    var x ;
                                    var count_rate = 0 ;
                                    for(x=0;x<array1.length;x++) {
                                        if((array1[x].place_rate) > rate_number){
                                            count_rate ++ ;
                                        }
                                    }
                                    for(i=0;i<array1.length -1;i++) {
                                        for(y=0;y<array1.length -1 ;y++) {
                                            if(array1[y].place_rate < array1[y+1].place_rate) {
                                                var f = array1[y] ;
                                                array1[y] = array1[y+1] ;
                                                array1[y+1] = f ;
                                            }
                                        }
                                    }
                                    maximum_items = count_rate -1 ;

                                    show_2(1,maximum_items);
                                }





                                function show_last_address(value) {

                                    var i = 0;
                                    for (i;i<array1.length;i++){
                                        if(value == array1[i].place_id_) {
                                            var address = array1[i].place_address ;
                                            alert(address);
                                        }
                                    }

                                }





                                function f(value) {

                                    var start = ' ' + lat + ',' + lng + ' ';
                                    var end = value;


                                    var request = {
                                        origin: start,
                                        destination: end,
                                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                                    };
                                    directionsService.route(request, function (response, status) {
                                        if (status == google.maps.DirectionsStatus.OK) {
                                            directionsDisplay.setDirections(response);

                                            //document.getElementById('directions').innerHTML = txtDir;
                                        }
                                    });
                                }





                                function handleLocationError(browserHasGeolocation, infoWindow) {
                                    // Set default location to Sydney, Australia
                                    pos = {lat: -33.856, lng: 151.215};
                                    document.write(pos.lat);
                                    map = new google.maps.Map(document.getElementById('current'), {
                                        center: pos,
                                        zoom: 1
                                    });

                                    // Display an InfoWindow at the map center
                                    infoWindow.setPosition(pos);
                                    infoWindow.setContent(browserHasGeolocation ?
                                        'Geolocation permissions denied. Using default location.' :
                                        'Error: Your browser doesn\'t support geolocation.');
                                    infoWindow.open(map);
                                    currentInfoWindow = infoWindow;

                                    // Call Places Nearby Search on the default location
                                    getNearbyPlaces(pos);
                                }






                                function getNearbyPlaces(position) {

                                    request = {
                                        location: position,
                                        radius: '10000',
                                        language: 'en',
                                        type: 'hotel'

                                    }

                                    ;

                                    service = new google.maps.places.PlacesService(map);
                                    service.nearbySearch(request, nearbyCallback);
                                }





                                function nearbyCallback(results, status) {
                                    if (status == google.maps.places.PlacesServiceStatus.OK) {

                                        createMarkers(results);


                                    }
                                }





                                function createMarkers(places) {

                                    places.forEach(place => {


                                        let request = {
                                            placeId: place.place_id,
                                            fields: ['name', 'formatted_address', 'geometry', 'rating',
                                                'website', 'photos','price_level']
                                        };


                                        service.getDetails(request, (placeResult, status) => {
                                            showDetails(placeResult, place, marker, status);
                                        });

                                        let marker = new google.maps.Marker({
                                            position: place.geometry.location,
                                            map: map,
                                            title: place.name,

                                        });

                                        google.maps.event.addListener(marker, 'click', () => {
                                            let request = {
                                                placeId: place.place_id,
                                                fields: ['name', 'formatted_address', 'geometry', 'rating',
                                                    'website', 'photos']
                                            };


                                            service.getDetails(request, (placeResult, status) => {
                                                showDetails1(placeResult, place, marker, status);
                                            });
                                        });


                                        bounds.extend(place.geometry.location);
                                    });

                                    map.fitBounds(bounds);
                                }





                                function showDetails(placeResult, place, marker, status) {
                                    if (status == google.maps.places.PlacesServiceStatus.OK) {
                                        var i = 0;
                                        var distance;
                                        i++;
                                        var lat1 = pos.lat;
                                        var lon1 = pos.lng;
                                        var lat2 = place.geometry.location.lat();
                                        var lon2 = place.geometry.location.lng();

                                        var unit = 'K';
                                        if ((lat1 == lat2) && (lon1 == lon2)) {
                                            return 0;
                                        } else {
                                            var radlat1 = Math.PI * lat1 / 180;
                                            var radlat2 = Math.PI * lat2 / 180;
                                            var theta = lon1 - lon2;
                                            var radtheta = Math.PI * theta / 180;
                                            var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                                            if (dist > 1) {
                                                dist = 1;
                                            }
                                            dist = Math.acos(dist);
                                            dist = dist * 180 / Math.PI;
                                            dist = dist * 60 * 1.1515;
                                            if (unit == "K") {
                                                dist = dist * 1.609344
                                            }
                                            if (unit == "N") {
                                                dist = dist * 0.8684
                                            }
                                            distance = dist.toFixed(1);
                                        }
                                        let firstPhoto ;
                                        let firstPhoto1;


                                        if (placeResult.photos) {
                                            firstPhoto1 = placeResult.photos[0];
                                            firstPhoto = firstPhoto1.getUrl() ;
                                            //	alert(placeResult.icon) ;
                                        }
                                        else {

                                            firstPhoto = 'https://cdn2.atlantamagazine.com/wp-content/uploads/sites/4/2019/07/RestaurantEugene01_courtesy.jpg' ;

                                        }
                                        let price ;
                                        if (placeResult.price_level) {
                                            price = placeResult.price_level ;
                                        }
                                        else {
                                            price = '0' ;
                                        }

                                        let star1 ;
                                        let star ;
                                        if (placeResult.rating) {
                                            star1 = placeResult.rating ;
                                            star = parseInt(star1) ;
                                        }
                                        else {
                                            star= '0' ;
                                            star1 ='0' ;
                                        }
                                        var count ;
                                        var addstar = '';

                                        var i  ;
                                        for(i=0;i<star;i++) {
                                            addstar = addstar + '<i class="icon-star-full"></i> ';
                                        }
                                        if(i<5) {
                                            for (i;i<5;i++) {
                                                addstar = addstar + '<i class="icon-star-empty"></i> ';
                                            }
                                        }

                                        let websit ;
                                        if(placeResult.website) {
                                            websit =  placeResult.website ;

                                        }
                                        else {
                                            websit = '' ;
                                        }

                                        var t = { place_name: place.name ,place_lat: place.geometry.location.lat(),
                                            place_lng: place.geometry.location.lng() , place_rate: star1 ,place_photo:firstPhoto,
                                            place_website: websit,place_add_star: addstar, place_address: placeResult.formatted_address,
                                            place_price:price ,place_id_: place.place_id ,
                                        } ;
                                        array1.push(t);




                                    }

                                    else {
                                        console.log('showDetails failed: ' + status);

                                    }
                                    maximum_items = array1.length ;
                                    show_2('1',maximum_items) ;


                                }





                                function myFunction(pop_send,geometry) {


                                    var r = 'myPopup'+pop_send ;
                                    if(pop_1 == 0) {
                                        pop_1 = r ;
                                        map1 = new google.maps.Map(document.getElementById(r), myOptions);
                                        directionsDisplay.setMap(map1);
                                        var popup = document.getElementById(r);
                                        popup.classList.toggle("show");
                                        f(geometry) ;
                                    }
                                    else {

                                        pop_2 = r ;
                                        if (pop_1 != pop_2) {
                                            map1 = new google.maps.Map(document.getElementById(r), myOptions);
                                            directionsDisplay.setMap(map1);
                                            var pop = document.getElementById(pop_1);
                                            pop.classList.toggle("show");
                                            pop = document.getElementById(pop_2);
                                            pop.classList.toggle("show");
                                            f(geometry) ;
                                            pop_1 = pop_2;
                                            pop_2 = 0 ;

                                        }
                                    }


                                }






                                function showDetails1(placeResult, place, marker, status) {

                                    if (status == google.maps.places.PlacesServiceStatus.OK) {

                                        let placeInfowindow = new google.maps.InfoWindow();
                                        let rating = "None";
                                        if (placeResult.rating) rating = placeResult.rating;
                                        placeInfowindow.setContent('<div><strong>' + placeResult.name +
                                            '</strong><br>' + 'Rating: ' + rating + '</div>');
                                        placeInfowindow.open(marker.map, marker);
                                        currentInfoWindow.close();
                                        currentInfoWindow = placeInfowindow;
                                        showPanel(placeResult);
                                    } else {
                                        console.log('showDetails failed: ' + status);

                                    }

                                }







                                function showPanel(placeResult) {
                                    // If infoPane is already open, close it
                                    if (infoPane.classList.contains("open")) {
                                        infoPane.classList.remove("open");
                                    }

                                    // Clear the previous details
                                    while (infoPane.lastChild) {
                                        infoPane.removeChild(infoPane.lastChild);
                                    }


                                    let name = document.createElement('h1');
                                    name.classList.add('place');
                                    name.textContent = placeResult.name;
                                    infoPane.appendChild(name);
                                    if (placeResult.rating) {
                                        let rating = document.createElement('p');
                                        rating.classList.add('details');
                                        rating.textContent = `Rating: ${placeResult.rating} \u272e`;
                                        infoPane.appendChild(rating);
                                    }
                                    let address = document.createElement('p');
                                    address.classList.add('details');
                                    address.textContent = placeResult.formatted_address;
                                    infoPane.appendChild(address);
                                    if (placeResult.website) {
                                        let websitePara = document.createElement('p');
                                        let websiteLink = document.createElement('a');
                                        let websiteUrl = document.createTextNode(placeResult.website);
                                        websiteLink.appendChild(websiteUrl);
                                        websiteLink.title = placeResult.website;
                                        websiteLink.href = placeResult.website;
                                        websitePara.appendChild(websiteLink);
                                        infoPane.appendChild(websitePara);
                                    }

                                    // Open the infoPane
                                    infoPane.classList.add("open");
                                }


                            </script>
                            <script type="text/javascript"
                                    src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&sensor=false&key=AIzaSyARQUo18iVGcVQlVxfugMdUSXTHNvjMcVU&callback=initMap">
                            </script>



                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="pagination">
                                <li class="disabled"><a href="#element">&laquo;</a></li>
                                <li class="active"><a id="1" href="#element" onclick="show_2(this.id,maximum_items)">1</a></li>
                                <li><a id="2" href="#element" onclick="show_2(this.id,maximum_items)">2</a></li>
                                <li><a id="3"  href="#element" onclick="show_2(this.id,maximum_items)">3</a></li>
                                <li><a id="4" href="#element" onclick="show_2(this.id,maximum_items)">4</a></li>
                                <li><a href="#element" onclick="show_2(this.id,maximum_items)">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
                    <script type="text/javascript">
                        $(document).on('click','ul li',function () {
                            $(this).addClass('active').siblings().removeClass('active');
                        })
                    </script>

                </div>


                <!-- SIDEBAR-->
                <div class="col-md-3">
                    <div class="sidebar-wrap">
                        <div id="mapc" class="side animate-box">
                            <img src="./images\map.jpg" style="width: 260px;height:180px ;opacity: 0.9" >
                            <a href="#current">
                                <button id="mm" class="btn">Go to map</button>
                            </a>

                        </div>
                        <style>
                            #mapc{

                                text-align: center;
                                position: relative;

                            }
                            #mm {
                                color: rgb(27, 81, 161);
                                background-color: #ffffff;
                                padding: 5px 15px;

                                text-decoration: none;

                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                -ms-transform: translate(-50%, -50%);
                                opacity: 0.9;
                                font-size: 16px;
                                border-radius: 15px;
                            }



                        </style>
                        <div class="side animate-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="sidebar-heading">Price Range</h3>
                                    <form method="post" class="colorlib-form-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guests">Price from:</label>
                                                    <div class="form-field">
                                                        <i class="icon icon-arrow-down3"></i>
                                                        <select name="people" id="people_s" class="form-control" onchange="send_price()">
                                                            <option value="#">1</option>
                                                            <option value="#">200</option>
                                                            <option value="#">300</option>
                                                            <option value="#">400</option>
                                                            <option value="#">1000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guests">Price to:</label>
                                                    <div class="form-field">
                                                        <i class="icon icon-arrow-down3"></i>
                                                        <select name="people" id="people_f" class="form-control" onchange="send_price()">
                                                            <option value="#">2000</option>
                                                            <option value="#">4000</option>
                                                            <option value="#">6000</option>
                                                            <option value="#">8000</option>
                                                            <option value="#">10000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="side animate-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="sidebar-heading">Review Rating</h3>
                                    <form method="post" class="colorlib-form-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="arrange(4)">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="arrange(3)">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="arrange(2)">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="arrange(1)">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="arrange(0)">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star-full"></i></span></p>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                        </div>

    <div class="place">
        <h2 class="h22"style="text-align: center;">Hotels Near Me</h2>
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
        <div id="current">
        
        </div>
    </div>

    <style>


        .place{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ffffff;

            text-align: center;
        }

        #current{
            height: 400px;
            width: 90%;
            margin: 5%;
            border:2px inset;
        }
    </style>
<script>
    function send_price() {
        var f = document.getElementById('people_f').value ;
        var s = document.getElementById('people_s').value
        $("#cont").html("");
        var i ;
        var y;
        var x ;
        var count_rate = 0 ;
        for(x=0;x<array1.length;x++) {
            if((array1[x].place_price) >= s && array1[x].place_price <= f){
                count_rate ++ ;
            }
        }
        for(i=0;i<array1.length -1;i++) {
            for(y=0;y<array1.length -1 ;y++) {
                if((array1[y].place_price <= f && array1[y].place_price >=s)&&(array1[y].place_price > array1[y+1].place_price)) {
                    var f = array1[y] ;
                    array1[y] = array1[y+1] ;
                    array1[y+1] = f ;
                }
            }
        }
        maximum_items = count_rate -1 ;

        show_2(1,maximum_items);
    }
</script>
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

