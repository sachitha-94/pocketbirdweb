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
                        <form action="<?php echo base_url(); ?>image_controller/search_by_shape" method="post">
                            <select id="shape" name="shape">
                                <option value="">Category</option>
                                <option value="1">Shearwaters,petrers & Ganners</option>
                                <option value="2">Comorants and Pelicans</option>
                                <option value="3">Herons, Egrets & Storks</option>
                                <option value="4">Gees & Ducks</option>
                                <option value="5">Eagles & Hawks</option>
                                <option value="6">Quails and Fowls</option>
                                <option value="7">Rails</option>
                                <option value="8">Shore Birds</option>
                                <option value="9">pigeons</option>
                                <option value="10">Cuckoos</option>
                                <option value="11">Owls</option>
                                <option value="12">Swifts</option>
                                <option value="13">Barbets & woodpeckers</option>
                                <option value="14">Larks & Pipits</option>
                                <option value="15">Swallows</option>
                                <option value="16">Bullbuls & Orioles</option>
                                <option value="17">Warblers</option>
                                <option value="18">Thrushers, Babblers</option>
                                <option value="19">Sunbird & flowerpeakers</option>
                                <option value="20">Crows</option>
                                <option value="21">Small Brown Bird</option>
                            </select>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                        <form action="<?php echo base_url(); ?>image_controller/search_by_province" method="post">
                            <select id="province" name="province">
                                <option value="">Province</option>
                                <option value="Central">Central</option>
                                <option value="Eastern">Eastern</option>
                                <option value="North Central">North Central</option>
                                <option value="Northern">Northern</option>
                                <option value="North Western">North Western</option>
                                <option value="Sabaragamuwa">Sabaragamuwa</option>
                                <option value="Uva">Uva</option>
                                <option value="Western">Western</option>

                            </select>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                        <form action="<?php echo base_url(); ?>image_controller/search_by_habitat" method="post">
                            <select id="habitat" name="habitat">
                                <option value="">Habitat</option>
                                <option value="Beach">Beach</option>
                                <option value="Dry Zone Forest">Dry Zone Forest</option>
                                <option value="Forest">Forest</option>
                                <option value="Home Garden">Home Garden</option>
                                <option value="Lake">Lake</option>
                                <option value="Low Land Rainforest">Low Land Rainforest</option>
                                <option value="Mountain">Mountain</option>
                                <option value="Mountain Rainforest">Mountain Rainforest</option>
                                <option value="River">River</option>
                                <option value="Riverine Forest">Riverine Forest</option>
                                <option value="Scurbland">Scurbland</option>
                                <option value="Tea Field">Tea Field</option>
                                <option value="Paddy Field">Paddy Field</option>
                                <option value="Rubber Field">Rubber Field</option>
                                <option value="Vegitable Field">Vegitable Field</option>
                                <option value="Other">Other</option>


                            </select>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                    <!-- End Filter Buttons -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 portfolio-group no-padding">
                    <!-- Portfolio Item -->
                    <?php foreach($image as $bla){?>
                        <div class="col-md-4 portfolio-item margin-bottom-40 video">
                            <div>
                                    <figure>
                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $bla->image_ID;?>.jpg" alt="image1">
                                        <figcaption>
                                            <h3 class="margin-top-20"><?php echo $bla->date ?></h3>
                                            <span><?php echo $bla->time ?></span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

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