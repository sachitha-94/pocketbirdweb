<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>

    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="<?php echo base_url(); ?>js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg>
                        User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">
                                <svg class="glyph stroked male-user">
                                    <use xlink:href="#stroked-male-user"></use>
                                </svg>
                                Profile</a></li>
                        <li><a href="#">
                                <svg class="glyph stroked gear">
                                    <use xlink:href="#stroked-gear"></use>
                                </svg>
                                Settings</a></li>
                        <li><a href="<?php echo base_url(); ?>sign_up_controller/logout">
                                <svg class="glyph stroked cancel">
                                    <use xlink:href="<?php echo base_url(); ?>sign_up_controller/logout"></use>
                                </svg>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="factive"><a href="<?php echo base_url(); ?>sign_up_controller/select_new_users">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-male-user"></use>
                </svg>
                New Users</a></li>
        <!--<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
        <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
        <li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
        <li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
        <li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
        <li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>-->
        <li class="parent ">
            <a href="<?php echo base_url(); ?>sign_up_controller/select_new_comment">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use
                            xlink:href="#stroked-empty-message"></use></svg></span> New Comments
            </a>
            <a href="<?php echo base_url(); ?>sign_up_controller/select_new_complains">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use
                                xlink:href="#stroked-app-window-with-content"></use></svg></span> New Complains
            </a>
            <a href="<?php echo base_url(); ?>sign_up_controller/select_new_lognotes">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use
                                xlink:href="#stroked-bag"></use></svg></span> New Lognotes
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right"></use>
                        </svg>
                        Sub Item 1
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right"></use>
                        </svg>
                        Sub Item 2
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right"></use>
                        </svg>
                        Sub Item 3
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="<?php echo base_url(); ?>sign_up_controller/remove_user">
                <svg class="glyph stroked male-user">
                    <use xlink:href="#stroked-male-user"></use>
                </svg>
                Remove Users</a></li>
    </ul>

</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>page_nav_controller/goto_home">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->
    <?php
    if(!empty($users)) { ?>
    <div class="row">

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-green panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked bag">
                            <use xlink:href="#stroked-bag"></use>
                        </svg>
                    </div>


                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $lognotes; ?></div>
                        <div class="text-muted">New Log Notes</div>

                    </div>
                    <button type="button" class="btn btn-success btn-sm"><a
                                href="<?php echo base_url(); ?>page_nav_controller/goto_signup">view details</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-green panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked empty-message">
                            <use xlink:href="#stroked-empty-message"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $comments; ?></div>
                        <div class="text-muted">New Comments</div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm"><a
                                href="<?php echo base_url(); ?>sign_up_controller/select_new_comment">view details</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-green panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $users; ?></div>
                        <div class="text-muted">New Users</div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm"><a
                                href="<?php echo base_url(); ?>sign_up_controller/select_new_users">view details</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-green panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked app-window-with-content">
                            <use xlink:href="#stroked-app-window-with-content"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $complains; ?></div>
                        <div class="text-muted">New Complains</div>
                    </div>

                    <button type="button" class="btn btn-success btn-sm"><a
                                href="<?php echo base_url(); ?>sign_up_controller/select_new_complains">view details</a>
                    </button>
                </div>
            </div>
        </div>

        <?php /*
        if(isset($userdetail)) {
            foreach ($userdetail as $result) {
                echo $result['user_id'],' ',$result['firstname'], ' ', $result['lastname'], ' ', $result['username'], ' ', $result['email'], ' ', $result['what'],'  ';?><button type="button" class="btn btn-success btn-sm"><a
                                href="<?php echo base_url(); ?>sign_up_controller/updateview/<?php echo $result['user_id'] ?>">viewed</a></button><?php echo '  '?><button type="button" class="btn btn-success btn-sm"><a
                            href="<?php echo base_url(); ?>sign_up_controller/updateapprove/<?php echo $result['user_id'] ?>">approved</a></button><?php echo "<br>"."<br>";
            }
        }*/
        ?>
        <?php
        if(!empty($userdetail)) { ?>
            <table border="2" style="background-color: ghostwhite; color: black; margin: 2px auto; width:70%;">
                <caption style="font-size: large">NEW USERS</caption>
                <thead>
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Firstname</th>
                    <th style="text-align: center">Lastname</th>
                    <th style="text-align: center">Username</th>
                    <th style="text-align: center">What</th>
                    <th style="text-align: center">Email</th>
                    <th></th>
                </tr>
                </thead>
                <?php if (isset($userdetail)) {
                    foreach ($userdetail as $result) {//foreach($result  as $r):
                        ?>
                        <tr>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['user_id'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['firstname'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['lastname'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['username'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['what'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['email'] ?></td>
                            <td style="padding: 10px;text-align: center;">
                                <button type="button" class="btn btn-success btn-sm"><a
                                            href="<?php echo base_url(); ?>sign_up_controller/updateview/<?php echo $result['user_id'] ?>">viewed</a>
                                </button><?php echo "<br>" ?>
                                <button type="button" class="btn btn-success btn-sm" style="margin: 2px"><a
                                            href="<?php echo base_url(); ?>sign_up_controller/updateapprove/<?php echo $result['user_id'] ?>">approved</a>
                                </button>
                            </td>

                        </tr>

                    <?php }
                }//endforeach; ?>
            </table>
            <?php
        }
        if(!empty($commentdetail)) { ?>
            <table border="2" style="background-color: ghostwhite; color: black; margin: 2px auto; width:70%;">
                <caption style="font-size: large">NEW COMMENTS</caption>
                <tr >
                    <th style="text-align: center">comment_ID</th>
                    <th style="text-align: center">note_ID</th>
                    <th style="text-align: center">user_ID</th>
                    <th style="text-align: center">date</th>
                    <th style="text-align: center">time</th>
                    <th style="text-align: center">content</th>
                    <th></th>
                </tr>
                <?php if (isset($commentdetail)) {
                    foreach ($commentdetail as $result) {//foreach($result  as $r):
                        ?>
                        <tr>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['comment_ID'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['note_ID'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['user_ID'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['date'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['time'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['content'] ?></td>
                            <td style="padding: 10px;text-align: center;">
                                <button type="button" class="btn btn-success btn-sm"><a
                                            href="<?php echo base_url(); ?>sign_up_controller/update_viewed_comment/<?php echo $result['comment_ID'] ?>">Reject</a>
                                </button><?php echo "<br>" ?>
                                <button type="button" class="btn btn-success btn-sm" style="margin: 2px"><a
                                            href="<?php echo base_url(); ?>sign_up_controller/update_approve_comment/<?php echo $result['comment_ID'] ?>">approved</a>
                                </button>
                            </td>

                        </tr>

                    <?php }
                }//endforeach; ?>
            </table>
            <?php
        }
        if(!empty($complainsdetail)) { ?>
            <table border="2" style="background-color: ghostwhite; color: black; margin: 2px auto; width:70%;">
                <caption style="font-size: large">NEW COMPLAINS</caption>
                <tr >
                    <th style="text-align: center">Complain_ID</th>
                    <th style="text-align: center">User_ID</th>
                    <th style="text-align: center">Date_ID</th>
                    <th style="text-align: center">Time</th>
                    <th style="text-align: center">Content</th>
                    <th></th>
                </tr>
                <?php if (isset($complainsdetail)) {
                    foreach ($complainsdetail as $result) {//foreach($result  as $r):
                        ?>
                        <tr>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['complain_ID'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['user_ID'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['date'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['time'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['content'] ?></td>

                            <td style="padding: 10px;text-align: center;">
                                <button type="button" class="btn btn-success btn-sm" style="margin: 2px"><a
                                            href="<?php echo base_url(); ?>sign_up_controller/update_viewed_complains/<?php echo $result['complain_ID'] ?>">viewed</a>
                                </button>
                            </td>

                        </tr>

                    <?php }
                }//endforeach; ?>
            </table>
            <?php
        }
        }
        ?>
        <?php
        if(!empty($approved_user_details)) { ?>
            <table border="2" style="background-color: ghostwhite; color: black; margin: 2px auto; width:70%;">
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Firstname</th>
                    <th style="text-align: center">Lastname</th>
                    <th style="text-align: center">Username</th>
                    <th style="text-align: center">What</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center"></th>
                </tr>
                <?php if (isset($approved_user_details)) {
                    foreach ($approved_user_details as $result) {//foreach($result  as $r):
                        ?>
                        <tr>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['user_id'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['firstname'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['lastname'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['username'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['what'] ?></td>
                            <td style="padding: 10px;text-align: center;"><?php echo $result['email'] ?></td>
                            <td style="padding: 10px;text-align: center;">
                                <button type="button" class="btn btn-success btn-sm"><a
                                            href="<?php echo base_url(); ?>sign_up_controller/deleteuser/<?php echo $result['user_id']?>">remove</a>
                                </button>

                            </td>

                        </tr>

                    <?php }
                }//endforeach; ?>
            </table>
            <?php

        }
        ?>
    </div><!--/.row-->
    <?php

    ?>





</div>    <!--/.main-->

<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/chart.min.js"></script>
<script src="<?php echo base_url(); ?>js/chart-data.js"></script>
<script src="<?php echo base_url(); ?>js/easypiechart.js"></script>
<script src="<?php echo base_url(); ?>js/easypiechart-data.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
<script>
    $('#calendar').datepicker({});

    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
