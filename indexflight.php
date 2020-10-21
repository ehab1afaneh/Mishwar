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
    <script src="js/weather.js" > </script>

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

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="index.html">MISHWAR</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="has-dropdown active">
                                <a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="#destination">Destination</a></li>
                                    <li><a href="#hotels">Hotels</a></li>
                                    <li><a href="#countries">countries</a></li>
                                </ul>
                            </li>
                            <li><a href="tours.html">Mishwar</a></li>

                            <li><a href="hotels.html">Hotels</a></li>
                            <li><a href="services.html">Services</a></li>

                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
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
                        <li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
                        <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
                        <li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>
                        <li><a data-toggle="tab" href="#Weather"><img src=".\images\weather.png" class="imgweathr"> Weather</a></li>
                        <style>
                            img.imgweathr {height: 25px;width: 25px;}

                        </style>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="flight" class="tab-pane fade in active">
                        <form method="POST" action="./flightconf.php" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">From:</label>
                                        <div class="form-field">
                                            <input type="text" id="location" class="form-control" name="mylocat" placeholder="My Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Where</label>
                                        <div class="form-field">
                                            <input type="text" id="location" class="form-control" name="locat" placeholder="Search Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="date">Check-in:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" name="check-in" placeholder="Check-in date">
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
                    <div id="hotel" class="tab-pane fade">
                        <form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="booknow">
                                        <h2>Book Now</h2>
                                        <span>Best Price Online</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-in:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-out:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                    <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="car" class="tab-pane fade">
                        <form method="post" class="colorlib-form" >
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date">Where:</label>
                                        <div class="form-field">
                                            <input type="text" id="location" class="form-control" placeholder="Search Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Start Date:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Return Date:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-out date">
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
                                        <label for="date">Where:</label>
                                        <div class="form-field">
                                            <input type="text" id="myInput" name="myCountry"  class="form-control" placeholder="Search Location">
                                            <script>
                                                autocomplete(document.getElementById("myInput"), countries);
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <input type="button"  onclick="getweather()" value="Get Weather" class="btn btn-primary btn-block">
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
</div>

<div id="colorlib-services">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 animate-box text-center aside-stretch">
                <div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
                    <h3>Amazing Travel</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
							<span>
								<img src=".\images\weather.png" class="imweather">
								<style>
									img.imweather{height: 120px;width: 120px;margin-bottom: 18px;}
								</style>
							</span>
                        <h3>Weather</h3>
                        <p>It enables the tourist to know the weather conditions in the area he visits to take the necessary needs during his trip</p></div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
                        <h3>Book Your Trip</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
							<span>
								<img src=".\icons\hotel.png" id="hotel-t"></img>
							</span>
                        <style>
                            #hotel-t{
                                height: 140;
                                width: 141px;
                            }
                        </style>
                        <h3>Hotel</h3>
                        <p>Tourists can book the hotel where they will stay when arriving at the country they wish to visit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-tour colorlib-light-grey" id="destination">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box" >
                    <h2>Popular Destination</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="tour-wrap">
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-1.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Athens, Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-2.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Thailand</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-3.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Philippines</h2>
						<span class="city">Lipa, Philippines</span>
						<span class="price">$450</span>
					</span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-4.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-5.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-6.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-7.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/tour-8.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
            </a>
        </div>
    </div>





    <div id="colorlib-hotel" >
        <div class="container" id="hotels">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Recommended Hotels</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
                                    <p class="price"><span>$120</span><small> /night</small></p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
                                    <p class="price"><span>$120</span><small> /night</small></p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
                                    <p class="price"><span>$120</span><small> /night</small></p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
                                    <p class="price"><span>$120</span><small> /night</small></p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Our Satisfied Guests says</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <div class="owl-carousel2">
                        <div class="item">
                            <div class="testimony text-center">
                                <span class="img-user" style="background-image: url(images/person1.jpg);"></span>
                                <span class="user">Alysha Myers</span>
                                <small>Miami Florida, USA</small>
                                <blockquote>
                                    <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony text-center">
                                <span class="img-user" style="background-image: url(images/person2.jpg);"></span>
                                <span class="user">James Fisher</span>
                                <small>New York, USA</small>
                                <blockquote>
                                    <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony text-center">
                                <span class="img-user" style="background-image: url(images/person3.jpg);"></span>
                                <span class="user">Jacob Webb</span>
                                <small>Athens, Greece</small>
                                <blockquote>
                                    <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-tour" id="countries">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Most Popular Travel Countries</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="f-tour">
                        <div class="row row-pb-md">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-1.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-2.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-3.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-4.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="desc">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Italy, Europe</h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
                                        </div>
                                        <div class="col-md-12">
                                            <h4>Best Tours City</h4>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Rome</a></li>
                                                        <li><a href="#">Milan</a></li>
                                                        <li><a href="#">Genoa</a></li>
                                                        <li><a href="#">Verona</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Venice</a></li>
                                                        <li><a href="#">Bologna</a></li>
                                                        <li><a href="#">Trieste</a></li>
                                                        <li><a href="#">Florence</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Palermo</a></li>
                                                        <li><a href="#">Siena</a></li>
                                                        <li><a href="#">San Marino</a></li>
                                                        <li><a href="#">Naples</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-tour">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <div class="row">
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-5.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-6.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-7.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-8.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box col-md-pull-6 text-right">
                                <div class="desc">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Athens, Greece</h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
                                        </div>
                                        <div class="col-md-12">
                                            <h4>Best Tours City</h4>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Rome</a></li>
                                                        <li><a href="#">Milan</a></li>
                                                        <li><a href="#">Genoa</a></li>
                                                        <li><a href="#">Verona</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Venice</a></li>
                                                        <li><a href="#">Bologna</a></li>
                                                        <li><a href="#">Trieste</a></li>
                                                        <li><a href="#">Florence</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Palermo</a></li>
                                                        <li><a href="#">Siena</a></li>
                                                        <li><a href="#">San Marino</a></li>
                                                        <li><a href="#">Naples</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                    <h4>Mishwar Agency</h4>
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
                        <li><a href="#">Mishwar</a></li>
                        <li><a href="#">Car Rent</a></li>
                        <li><a href="#">Beach &amp; Resorts</a></li>
                        <li><a href="#">Weather</a></li>
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

