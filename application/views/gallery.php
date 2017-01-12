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
                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_home">
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
                            <a href="i<?php echo base_url(); ?>page_nav_controller/goto_home" class="fa-home active">Home</a>
                        </li>
                        <li>

                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_bird_glossary" class="fa-gears ">Bird Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_map" class="fa-home active">Map</a>
                        </li>
                        <li>
                            <span class="fa-font ">Log Note Library</span>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_my_log_notes">My Log Notes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_shared_lognotes">Shared Log Notes</a>
                                </li>
                            </ul>
                        </li><li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_gallery" class="fa-th ">Gallery</a>

                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_about_us" class="fa-comment ">About Us</a>
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
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <h2>Gallery</h2>
                    <!-- Filter Buttons -->
                    <div class="portfolio-filter-container margin-top-20">
                        <ul class="portfolio-filter">
                            <li class="portfolio-filter-label label label-primary">
                                filter by:
                            </li>
                            <li>
                                <a href="#" class="portfolio-selected btn btn-default" data-filter="*">All</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default" data-filter=".code">Images</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default" data-filter=".design">Log Notes</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default" data-filter=".audio">Sounds</a>
                            </li>

                        </ul>
                    </div>
                    <!-- End Filter Buttons -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 portfolio-group no-padding">
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 video">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image1.jpg" alt="image1">
                                    <figcaption>
                                        <h3 class="margin-top-20">Velit esse molestie</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 design">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image2.jpg" alt="image2">
                                    <figcaption>
                                        <h3 class="margin-top-20">Quam nunc putamus</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 audio">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image3.jpg" alt="image3">
                                    <figcaption>
                                        <h3 class="margin-top-20">Placerat facer possim</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 design">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image4.jpg" alt="image4">
                                    <figcaption>
                                        <h3 class="margin-top-20">Nam liber tempor</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 design">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image5.jpg" alt="image5">
                                    <figcaption>
                                        <h3 class="margin-top-20">Donec non urna</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 code">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image6.jpg" alt="image6">
                                    <figcaption>
                                        <h3 class="margin-top-20">Nullam consectetur</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 design">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image7.jpg" alt="image7">
                                    <figcaption>
                                        <h3 class="margin-top-20">Velit esse molestie</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 code">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image8.jpg" alt="image8">
                                    <figcaption>
                                        <h3 class="margin-top-20">Quam nunc putamus</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 video">
                        <div>
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>img/portfolio/image9.jpg" alt="image9">
                                    <figcaption>
                                        <h3 class="margin-top-20">Placerat facer possim</h3>
                                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
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