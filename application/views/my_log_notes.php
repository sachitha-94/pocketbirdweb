<!--=== BEGIN HEADER === -->
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
                    <a href="index.html">
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
                            <a href="index.html" class="fa-home active">Home</a>
                        </li>
                        <li>

                            <a href="<?php echo base_url(); ?>page_nav/goto_bird_glossary" class="fa-gears ">Bird
                                Glossary</a>
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
                                    <a href="<?php echo base_url(); ?>page_nav/goto_shared_lognotes">Shared Log
                                        Notes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_gallery" class="fa-th ">Gallery</a>

                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_contact" class="fa-comment ">Contact Us</a>
                        </li>
                        <div class="login btn padding-horiz-20">
                            <button type="button" class="btn btn-success btn-sm"><a
                                    href="<?php echo base_url(); ?>page_nav/goto_login">Log In</a></button>
                            <button type="button" class="btn btn-success btn-sm"><a
                                    href="<?php echo base_url(); ?>page_nav/goto_signup">Sign Up</a></button>
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

    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Main Column -->
            <div class="col-md-9">
                <!-- Blog Post -->
                <div class="blog-post padding-bottom-20">
                    <!-- Blog Item Header -->
                    <div class="blog-item-header">
                        <!-- Title -->
                        <h2>
                            <a href="#">
                                A Sample Blog Title</a>
                        </h2>
                        <div class="clearfix"></div>
                        <!-- End Title -->
                        <!-- Date -->
                        <div class="blog-post-date">
                            <a href="#">22nd Apr, 2014</a>
                        </div>
                        <!-- End Date -->
                    </div>
                    <!-- End Blog Item Header -->
                    <!-- Blog Item Details -->
                    <div class="blog-post-details">
                        <!-- Author Name -->
                        <div class="blog-post-details-item blog-post-details-item-left">
                            <i class="fa fa-user color-gray-light"></i>
                            <a href="#">Admin</a>
                        </div>
                        <!-- End Author Name -->
                        <!-- Tags -->
                        <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                            <i class="fa fa-tag color-gray-light"></i>
                            <a href="#">jQuery</a>,
                            <a href="#">HTML5</a>,
                            <a href="#">CSS</a>
                        </div>
                        <!-- End Tags -->
                        <!-- # of Comments -->
                        <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                            <a href="">
                                <i class="fa fa-comments color-gray-light"></i>
                                2 Comments
                            </a>
                        </div>
                        <!-- End # of Comments -->
                    </div>
                    <!-- End Blog Item Details -->
                    <!-- Blog Item Body -->
                    <div class="blog">
                        <div class="clearfix"></div>
                        <div class="blog-post-body row margin-top-15">
                            <div class="col-md-5">
                                <img class="margin-bottom-20" src="<?php echo base_url(); ?>img/blog/image1.jpg"
                                     alt="thumb1">
                            </div>
                            <div class="col-md-7">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                <!-- Read More -->
                                <a href="<?php echo base_url(); ?>lognote_controller/get_lognote_c" class="btn btn-primary">
                                    Update Log Note
                                    <i class="icon-chevron-right readmore-icon"></i>
                                </a>
                                <!-- End Read More -->
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Item Body -->
                </div>
                <!-- End Blog Item -->
                <!-- Blog Post -->
                <div class="blog-post padding-bottom-20">
                    <!-- Blog Item Header -->
                    <div class="blog-item-header">
                        <!-- Title -->
                        <h2>
                            <a href="#">
                                Another Sample Blog</a>
                        </h2>
                        <div class="clearfix"></div>
                        <!-- End Title -->
                        <!-- Date -->
                        <div class="blog-post-date">
                            <a href="#">22nd Apr, 2014</a>
                        </div>
                        <!-- End Date -->
                    </div>
                    <!-- End Blog Item Header -->
                    <!-- Blog Item Details -->
                    <div class="blog-post-details">
                        <!-- Author Name -->
                        <div class="blog-post-details-item blog-post-details-item-left">
                            <i class="fa fa-user color-gray-light"></i>
                            <a href="#">Admin</a>
                        </div>
                        <!-- End Author Name -->
                        <!-- Tags -->
                        <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                            <i class="fa fa-tag color-gray-light"></i>
                            <a href="#">PHP</a>,
                            <a href="#">Ruby</a>,
                            <a href="#">Javascript</a>
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
                    <!-- End Blog Item Details -->
                    <!-- Blog Item Body -->
                    <div class="blog">
                        <div class="clearfix"></div>
                        <div class="blog-post-body row margin-top-15">
                            <div class="col-md-5">
                                <img class="margin-bottom-20" src="<?php echo base_url(); ?>img/blog/image2.jpg"
                                     alt="thumb2">
                            </div>
                            <div class="col-md-7">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                <!-- Read More -->
                                <a href="#" class="btn btn-primary">
                                    Read More
                                    <i class="icon-chevron-right readmore-icon"></i>
                                </a>
                                <!-- End Read More -->
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Item Body -->
                </div>
                <!-- End Blog Item -->
                <!-- Blog Post -->
                <div class="blog-post padding-bottom-20">
                    <!-- Blog Item Header -->
                    <div class="blog-item-header">
                        <!-- Title -->
                        <h2>
                            <a href="#">
                                Yet Another Sample Blog Title</a>
                        </h2>
                        <div class="clearfix"></div>
                        <!-- End Title -->
                        <!-- Date -->
                        <div class="blog-post-date">
                            <a href="#">22nd Apr, 2014</a>
                        </div>
                        <!-- End Date -->
                    </div>
                    <!-- End Blog Item Header -->
                    <!-- Blog Item Details -->
                    <div class="blog-post-details">
                        <!-- Author Name -->
                        <div class="blog-post-details-item blog-post-details-item-left">
                            <i class="fa fa-user color-gray-light"></i>
                            <a href="#">Admin</a>
                        </div>
                        <!-- End Author Name -->
                        <!-- Tags -->
                        <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                            <i class="fa fa-tag color-gray-light"></i>
                            <a href="#">jQuery</a>,
                            <a href="#">HTML</a>,
                            <a href="#">Grunt</a>
                        </div>
                        <!-- End Tags -->
                        <!-- # of Comments -->
                        <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                            <a href="">
                                <i class="fa fa-comments color-gray-light"></i>
                                1 Comments
                            </a>
                        </div>
                        <!-- End # of Comments -->
                    </div>
                    <!-- End Blog Item Details -->
                    <!-- Blog Item Body -->
                    <div class="blog">
                        <div class="clearfix"></div>
                        <div class="blog-post-body row margin-top-15">
                            <div class="col-md-5">
                                <img class="margin-bottom-20" src="<?php echo base_url(); ?>img/blog/image3.jpg"
                                     alt="thumb3">
                            </div>
                            <div class="col-md-7">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                <!-- Read More -->
                                <a href="#" class="btn btn-primary">
                                    Read More
                                    <i class="icon-chevron-right readmore-icon"></i>
                                </a>
                                <!-- End Read More -->
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Item Body -->
                </div>
                <!-- End Blog Item -->
                <!-- Blog Post -->
                <div class="blog-post padding-bottom-20">
                    <!-- Blog Item Header -->
                    <div class="blog-item-header">
                        <!-- Title -->
                        <h2>
                            <a href="#">
                                And One More Sample Blog Title</a>
                        </h2>
                        <div class="clearfix"></div>
                        <!-- End Title -->
                        <!-- Date -->
                        <div class="blog-post-date">
                            <a href="#">22nd Apr, 2014</a>
                        </div>
                        <!-- End Date -->
                    </div>
                    <!-- End Blog Item Header -->
                    <!-- Blog Item Details -->
                    <div class="blog-post-details">
                        <!-- Author Name -->
                        <div class="blog-post-details-item blog-post-details-item-left">
                            <i class="fa fa-user color-gray-light"></i>
                            <a href="#">Admin</a>
                        </div>
                        <!-- End Author Name -->
                        <!-- Tags -->
                        <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                            <i class="fa fa-tag color-gray-light"></i>
                            <a href="#">HTML</a>,
                            <a href="#">HTML5</a>,
                            <a href="#">CSS3</a>
                        </div>
                        <!-- End Tags -->
                        <!-- # of Comments -->
                        <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                            <a href="">
                                <i class="fa fa-comments color-gray-light"></i>
                                5 Comments
                            </a>
                        </div>
                        <!-- End # of Comments -->
                    </div>
                    <!-- End Blog Item Details -->
                    <!-- Blog Item Body -->
                    <div class="blog">
                        <div class="clearfix"></div>
                        <div class="blog-post-body row margin-top-15">
                            <div class="col-md-5">
                                <img class="margin-bottom-20" src="<?php echo base_url(); ?>img/blog/image4.jpg"
                                     alt="thumb4">
                            </div>
                            <div class="col-md-7">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                <!-- Read More -->
                                <a href="#" class="btn btn-primary">
                                    Read More
                                    <i class="icon-chevron-right readmore-icon"></i>
                                </a>
                                <!-- End Read More -->
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Item Body -->
                </div>
                <!-- End Blog Item -->
                <!-- Pagination -->
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li class="disabled">
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
                <!-- End Pagination -->
            </div>
            <!-- End Main Column -->
        </div>
    </div>

    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->

</div>
</div>-->
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
<!-- === END FOOTER ===