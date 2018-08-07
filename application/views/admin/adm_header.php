<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url().'assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url().'assets/vendor/metisMenu/metisMenu.min.css' ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url().'assets/dist/css/sb-admin-2.css' ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url().'assets/vendor/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url().'Admin' ?>">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url().'Admin/logout' ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <div class="col-md-6">
                                    <img src="<?= base_url().'assets/images/user.png' ?>" alt="" width="50" height="50" style="border-radius:50%">
                                </div>
                                <div class="col-md-6">
                                    <p class="pull-right">Welcome,<br><?= $this->session->userdata('nama');?></p><br>
                                </div>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?= base_url().'Admin' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <?php if( $this->session->userdata('level') === 'Admin' ) : ?>
                        <li>
                            <a href="<?= base_url().'Admin/member' ?>"><i class="fa fa-user fa-fw"></i> Manage Member</a>
                        </li>
                        <?php endif;?>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">