<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Bird Log Book</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
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
                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_home">
                        <img src="<?php echo base_url(); ?>img/applogo.png" alt="Logo" height="100"> </a>
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
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_home" class="fa-home active">Home</a>
                        </li>
                        <li>

                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_bird_glossary" class="fa-gears ">Bird
                                Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_map" class="fa-home">Map</a>
                        </li>
                        <li>
                            <span class="fa-font ">Log Note Library</span>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_my_log_notes">My Log Notes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_shared_lognotes">Shared Log
                                        Notes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_gallery" class="fa-th ">Gallery</a>

                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_contact" class="fa-comment ">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_contact" class="fa-comment ">Contact Us</a>
                        </li>
                        <?php if ($this->session->has_userdata('username')) { ?>
                            <div class="login btn padding-horiz-20">
                                <p><?php echo $this->session->userdata('username') ?></p>
                                <button type="button" class="btn btn-success btn-sm"><a
                                        href="<?php echo base_url(); ?>sign_up_controller/logout">LogOut</a></button>
                            </div>
                        <?php } else { ?>
                            <div class="login btn padding-horiz-20">
                                <button type="button" class="btn btn-success btn-sm"><a
                                        href="<?php echo base_url(); ?>page_nav_controller/goto_login">Log In</a></button>
                                <button type="button" class="btn btn-success btn-sm"><a
                                        href="<?php echo base_url(); ?>page_nav_controller/goto_signup">Sign Up</a></button>
                            </div>
                        <?php } ?>

                    </ul>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- End Top Menu -->
    <!-- === END HEADER === -->
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <h2 class="margin-bottom-10">About Us</h2>
                    <div class="row margin-bottom-30">
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>
                            <p>Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Aliquam dictum nulla eu varius porta. Maecenas congue dui id posuere fermentum. Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales.
                                Cras sed iaculis enim. Sed aliquet viverra nisl a tristique. Curabitur vitae mauris sem.</p>
                        <!-- Person Details -->

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 person-details margin-bottom-30">
                        <figure>
                            <figcaption>
                                <h3 class="margin-bottom-10">Akhila
                                    <small>- Programmer</small>
                                </h3>
                                <span>Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique.</span>
                            </figcaption>
                            <img src="assets/img/theteam/image1.jpg" alt="image1">
                            <ul class="list-inline person-details-icons">
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/akhila.wijewardena">
                                        <i class="fa-lg fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </figure>
                    </div>
                    <!-- //Portfolio Item// -->
                    <!-- Person Details -->
                    <div class="col-md-3 col-sm-3 col-xs-6 person-details margin-bottom-30">
                        <figure>
                            <figcaption>
                                <h3 class="margin-bottom-10">Simon
                                    <small>- Sales Assistant</small>
                                </h3>
                                <span>Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique.</span>
                            </figcaption>
                            <img src="assets/img/theteam/image2.jpg" alt="image2">
                            <ul class="list-inline person-details-icons">
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </figure>
                    </div>
                    <!-- //Portfolio Item// -->
                    <!-- Person Details -->
                    <div class="col-md-3 col-sm-3 col-xs-6 person-details margin-bottom-30">
                        <figure>
                            <figcaption>
                                <h3 class="margin-bottom-10">Jeff
                                    <small>- Support</small>
                                </h3>
                                <span>Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique.</span>
                            </figcaption>
                            <img src="assets/img/theteam/image3.jpg" alt="image3">
                            <ul class="list-inline person-details-icons">
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </figure>
                    </div>
                    <!-- //Portfolio Item// -->
                    <div class="col-md-3 col-sm-3 col-xs-6 person-details margin-bottom-30">
                        <figure>
                            <figcaption>
                                <h3 class="margin-bottom-10">April
                                    <small>- Programmer</small>
                                </h3>
                                <span>Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique.</span>
                            </figcaption>
                            <img src="assets/img/theteam/image1.jpg" alt="image1">
                            <ul class="list-inline person-details-icons">
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </figure>
                    </div>
                    <!-- //Portfolio Item// -->
                    <!-- Person Details -->
                    <div class="col-md-3 col-sm-3 col-xs-6 person-details margin-bottom-30">
                        <figure>
                            <figcaption>
                                <h3 class="margin-bottom-10">Simon
                                    <small>- Sales Assistant</small>
                                </h3>
                                <span>Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique.</span>
                            </figcaption>
                            <img src="assets/img/theteam/image2.jpg" alt="image2">
                            <ul class="list-inline person-details-icons">
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </figure>
                    </div>
                    <!-- //Portfolio Item// -->
                    <!-- Person Details -->
                    <div class="col-md-3 col-sm-3 col-xs-6 person-details margin-bottom-30">
                        <figure>
                            <figcaption>
                                <h3 class="margin-bottom-10">Jeff
                                    <small>- Support</small>
                                </h3>
                                <span>Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique.</span>
                            </figcaption>
                            <img src="assets/img/theteam/image3.jpg" alt="image3">
                            <ul class="list-inline person-details-icons">
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-lg fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </figure>
                    </div>
                    <!-- //Portfolio Item// -->

                </div>


            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
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
                <p class="pull-right">(c)Copyrights by CURATRIX 2016</p>
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