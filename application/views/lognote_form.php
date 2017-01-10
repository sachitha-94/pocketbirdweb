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
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_home" class="fa-home active">Home</a>
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


        <div class="container background-white">
            <?php
            foreach($lognote as $bla){?>
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-9">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>Log Note</h2>
                    </div>
                    <!-- Contact Form -->
                    <form class="login-page" method="post" action="<?php echo base_url(); ?>lognote_controller/update_lognote">
                        <?php $note_id = $bla->note_ID;?>
                        <input type="text" name="note_ID" value="<?php echo $bla->note_ID;?>">
                        <label>Description</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="name" value="<?php echo $bla->name;?>">
                            </div>
                        </div>
                        <label>Location</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="exact_location" value="<?php echo $bla->exact_location;?>">
                            </div>
                        </div>
                        <label>Province</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="province" value="<?php echo $bla->province;?>">
                            </div>
                        </div>
                        <label>Nearest City</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="nearest_city" value="<?php echo $bla->nearest_city; ?>">
                            </div>
                        </div>
                        <label>Elevation</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="elevation" value="<?php echo $bla->elevation;?>">
                            </div>
                        </div>
                        <label>Habbitat</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="habbitat" value="<?php echo $bla->habbitat;?>">
                            </div>
                        </div>
                        <label>Size</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="size" value="<?php echo $bla->size;?>">
                            </div>
                        </div>
                        <label>Looks Like</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="looks_like" value="<?php echo $bla->looks_like; ?>">
                            </div>
                        </div>
                        <label>Shape</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="shape" value="<?php echo $bla->shape; ?>">
                            </div>
                        </div>
                        <label>Colors</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="colors" value="<?php echo $bla->colors;?>">
                            </div>
                        </div>
                        <label>Special</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control" name="Description"><?php echo $bla->Description;?></textarea>
                            </div>
                        </div>
                        <label>Behaviour</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="behaviour" value="<?php echo $bla->behaviour;?>">
                            </div>
                        </div>
                        <label>Image</label>
                        <div class="row margin-bottom-20">
                            <img alt="image6" src="<?php echo base_url(); ?>img/frontpage/image6.jpg">
                        </div>
                        <label>Sound Track</label>
                        <div class="row margin-bottom-20">
                            <img alt="image6" src="<?php echo base_url(); ?>img/frontpage/image6.jpg">
                        </div>
                        <p>
                            <button type="submit" class="btn btn-primary">Update Log Note</button>
                        </p>
                        <?php }

                        ?>
                    </form>
                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->

            </div>
        </div>

    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
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
<!-- === END FOOTER ===