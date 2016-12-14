<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Bird Log Book</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <style type="text/css">
    </style>
</head>
<body>
<div id="body-bg">
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="<?php echo base_url(); ?>img/applogo.png" alt="Logo"  height="100"  >                            </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Top Menu -->
    <div id="hornav" class="bottom-border-shadow">
        <div class="container no-padding border-bottom">
            <div class="row">
                <!-- <div class="col-md-8 no-padding"> -->
                <div class="visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="index.html" class="fa-home active">Home</a>
                        </li>
                        <li>

                            <a href="<?php echo base_url(); ?>page_nav/goto_bird_glossary" class="fa-gears ">Bird Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_map" class="fa-home active">Map</a>
                        </li>
                        <li>
                            <span class="fa-font ">Log Note Library</span>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav/goto_my_log_notes">My Log Notes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav/goto_shared_lognotes">Shared Log Notes</a>
                                </li>
                            </ul>
                        </li><li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_gallery" class="fa-th ">Gallery</a>

                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_contact" class="fa-comment ">Contact Us</a>
                        </li>
                        <div class="login btn padding-horiz-20">
                            <button type="button" class="btn btn-success btn-sm"><a href="<?php echo base_url(); ?>page_nav/goto_login">Log In</a></button>
                            <button type="button" class="btn btn-success btn-sm"><a href="<?php echo base_url(); ?>page_nav/goto_signup">Sign Up</a></button>
                        </div>

                    </ul>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- End Top Menu -->
    <!-- === END HEADER === -->
<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-12">
                <h2 class="margin-bottom-10">MAP</h2>
                <!-- Intro / Why Us? -->
                <div class="row">
                    <div class="col-md-4 animate fadeIn">
                    </div>
                </div>
                <!-- End Intro / Why Us? -->
                <div class="row">
                    <hr class="margin-top-20 margin-bottom-30">
                </div>
                <div class="row">
                    <style>
                        #map {
                            width: 100%;
                            height: 500px;
                            background-color: grey;
                        }
                    </style>
                    <div id="map">
                        <script>
                            var map;
                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: 7, lng: 76},
                                    zoom: 4
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrUIjSGN6kVO4QzNSQlif0fu2S--N2hVo&callback=initMap"
                                async defer></script>
                    </div>

                    <hr class="margin-top-20 margin-bottom-30">
                    <!-- Top Panels -->
                    <div class="row padding-top-20">
                        <div class="col-md-3 animate fadeInLeft">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <i class="fa fa-tasks fa-4x"></i>
                                </div>
                                <div class="panel-body text-center">
                                    <h3 class="margin-bottom-10">Responsive Layout</h3>
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animate fadeIn">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <i class="fa fa-twitter fa-4x"></i>
                                </div>
                                <div class="panel-body text-center">
                                    <h3 class="margin-bottom-10">Bootstrap 3</h3>
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animate fadeIn">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <i class="fa fa-code fa-4x"></i>
                                </div>
                                <div class="panel-body text-center">
                                    <h3 class="margin-bottom-10">Clean Code</h3>
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animate fadeInRight">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <i class="fa fa-list-ul fa-4x"></i>
                                </div>
                                <div class="panel-body text-center">
                                    <h3 class="margin-bottom-10">Loaded</h3>
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Panels -->
                    <hr class="margin-top-3	0">
                    <!-- Middle Text -->
                    <div class="row">
                        <div class="col-md-12 text-center margin-top-10 animate fadeInUp">
                            <h2 class="text-center">Nulla in enim quis ipsum pulvinar imperdiet vitae nec velit..</h2>
                            <p class="text-center margin-bottom-20">Aenean venenatis egestas iaculis. Donec non urna quam. Nullam consectetur condimentum dolor at bibendum.</p>
                        </div>
                    </div>
                    <!-- End Middle Text -->
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
    <!-- Footer -->
    <div id="footer" class="background-grey">
        <div class="container">
            <div class="row">
                <!-- Footer Menu -->
                <div id="footermenu" class="col-md-8">
                    <ul class="list-unstyled list-inline">
                        <li>
                            <a href="#" target="_blank">Sample Link</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Sample Link</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Sample Link</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Sample Link</a>
                        </li>
                    </ul>
                </div>
                <!-- End Footer Menu -->
                <!-- Copyright -->
                <div id="copyright" class="col-md-4">
                    <p class="pull-right">(c) 2014 Your Copyright Info</p>
                </div>
                <!-- End Copyright -->
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
    <!-- Isotope - Portfolio Sorting -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.isotope.js" type="text/javascript"></script>
    <!-- Mobile Menu - Slicknav -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.slicknav.js" type="text/javascript"></script>
    <!-- Animate on Scroll-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.visible.js" charset="utf-8"></script>
    <!-- Sticky Div -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.sticky.js" charset="utf-8"></script>
    <!-- Slimbox2-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/slimbox2.js" charset="utf-8"></script>
    <!-- Modernizr -->
    <script src="<?php echo base_url(); ?>js/modernizr.custom.js" type="text/javascript"></script>
    <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->