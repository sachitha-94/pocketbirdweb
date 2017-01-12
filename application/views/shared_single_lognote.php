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
    <?php
    $username = $this->session->userdata('username');
    ?>
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <?php
            foreach($one_lognote as $bla){
            ?>
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-9">
                    <div class="blog-post">
                        <div class="blog-item-header">
                            <h2>
                                <a href="#">
                                    <?php echo $bla->note_ID;?>
                                </a>
                            </h2>
                            <!-- Date -->
                            <div class="blog-post-date">
                                <a href="#"><?php echo $bla->exact_location;?></a>
                            </div>
                            <!-- End Date -->
                        </div>
                        <div class="blog-post-details">
                            <!-- Author Name -->
                            <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                <i class="fa fa-user color-gray-light"></i>
                                <a href="#"><?php echo $bla->user_ID;?></a>
                            </div>
                            <!-- End Author Name -->
                            <!-- Tags -->
                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                <i class="fa fa-tag color-gray-light"></i>
                                <a href="#"><?php echo $bla->province;?></a>,
                                <a href="#">Javascript</a>,
                                <a href="#">CoffeeScript</a>
                            </div>
                            <!-- End Tags -->
                            <!-- # of Comments -->
                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                <a href="">
                                    <i class="fa fa-comments color-gray-light"></i>
                                    3 Comments
                                </a>
                            </div>
                            <!-- End # of Comments -->
                        </div>
                        <div class="blog-item">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="<?php echo base_url(); ?>img/blog/image1.jpg" alt="image1">
                                </div>
                                <div class="col-md-7">
                                    <p><?php echo $bla->Description;?></p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <?php echo $bla->exact_location;?></p>
                                </div>
                            </div>
                            <div class="blog-item-footer">
                                <!-- About the Author -->
                                <div class="blog-author panel panel-default margin-bottom-30">
                                    <div class="panel-heading">
                                        <h3>About the Author</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img class="pull-left" src="<?php echo base_url(); ?>img/profiles/87.jpg" alt="image1">
                                            </div>
                                            <div class="col-md-10">
                                                <label>John Doe</label>
                                                <p>Author Descriprion</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End About the Author -->
                                <a href="<?php echo base_url(); ?>page_nav_controller/goto_lognote_form/<?php echo $bla->note_ID;?>" class="btn btn-primary">
                                    Update Log Note
                                    <i class="icon-chevron-right readmore-icon"></i>
                                </a>
                                <!-- Comments -->
                                <div class="blog-recent-comments panel panel-default margin-bottom-30">
                                    <div class="panel-heading">
                                        <h3>Comments</h3>
                                    </div>
                                    <ul class="list-group">
                                        <?php
                                        foreach($comment as $com){
                                        ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-2 profile-thumb">
                                                    <a href="#">
                                                        <img class="media-object" src="<?php echo base_url(); ?>img/profiles/99.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-10">
                                                    <h4><?php echo $com->content;?></h4>
                                                    <p>Comment 1</p>
                                                    <span class="date">
                                                                <i class="fa fa-clock-o color-gray-light"></i><?php echo $com->content;?></span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>

                                        <!-- Comment Form -->
                                        <li class="list-group-item">
                                            <div class="blog-comment-form">
                                                <div class="row margin-top-20">
                                                    <div class="col-md-12">
                                                        <div class="pull-left">
                                                            <h3>Leave a Comment</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-top-20">
                                                    <div class="col-md-12">
                                                        <form method="post" action="<?php echo base_url(); ?>lognote_controller/add_comment">
                                                            <input type="hidden" name="note_id" value="<?php echo $bla->note_ID;?>">
                                                            <label>Name</label>
                                                            <div class="row margin-bottom-20">
                                                                <div class="col-md-7 col-md-offset-0">
                                                                    <input class="form-control" type="text" name="name">
                                                                </div>
                                                            </div>
                                                            <label>Email
                                                                <span>*</span>
                                                            </label>
                                                            <div class="row margin-bottom-20">
                                                                <div class="col-md-7 col-md-offset-0">
                                                                    <input class="form-control" type="text" name="emial">
                                                                </div>
                                                            </div>
                                                            <label>Message</label>
                                                            <div class="row margin-bottom-20">
                                                                <div class="col-md-11 col-md-offset-0">
                                                                    <textarea class="form-control" rows="8" name="content"></textarea>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                <button class="btn btn-primary" type="submit">Send Message</button>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Comment Form -->
                                    </ul>
                                </div>
                                <!-- End Comments -->
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Post -->
                </div>

               <?php } ?>
                <!-- End Main Column -->
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