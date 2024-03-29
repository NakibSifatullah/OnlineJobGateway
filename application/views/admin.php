<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Welcome to job house Dashboard</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Abdullah Al Mamun">
        <meta name="keyword" content="">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url(); ?>assets/admin/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/img/favicon.ico">
        <!-- end: Favicon -->
    </head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo base_url(); ?>admin"><span>job house</span></a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                                                        <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> <?php $logged = $this->session->userdata('logged'); echo $logged->UserName; ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                    <li><a href="<?php echo base_url(); ?>logout"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="<?php echo base_url(); ?>admin"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                            <li>
                                <a class="dropmenu" href="javascript:void(0)"><i class="icon-envelope"></i><span class="hidden-tablet"> Job category</span></a>
                                <ul>
                                    <li><a class="submenu" href="<?php echo base_url(); ?>add-category"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Category</span></a></li>
                                    <li><a class="submenu" href="<?php echo base_url(); ?>view-category"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Category</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropmenu" href="javascript:void(0)"><i class="icon-tasks"></i><span class="hidden-tablet"> Jobs</span></a>
                                <ul>
                                   <li><a class="submenu" href="<?php echo base_url(); ?>add-jobs"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Job</span></a></li>
                                    <li><a class="submenu" href="<?php echo base_url(); ?>view-jobs"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Job</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropmenu" href="javascript:void(0)"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Admin</span></a>
                                <ul>
                                    <li><a class="submenu" href="<?php echo base_url(); ?>add-admin"><i class="icon-file-alt"></i><span class="hidden-tablet">Add admin</span></a></li>
                                    <li><a class="submenu" href="<?php echo base_url(); ?>view-admin"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Admin</span></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>applied-job"><i class="icon-edit"></i><span class="hidden-tablet"> Applied Job</span></a></li>
                            <li><a href="<?php echo base_url(); ?>contact-mail"><i class="icon-edit"></i><span class="hidden-tablet"> Contact E-mail</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">
                    <?php $info_msg = $this->session->userdata('msg'); if(isset($info_msg)){ ?>
                    <div class="box-content alerts">
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><?php echo $info_msg; ?></strong>
                        </div>
                    </div>
                    <div style="margin-bottom: 30px;"></div>
                    <?php } $this->session->unset_userdata('msg'); ?>
                    <?php if (isset($admin_pages)) { echo $admin_pages; } ?>
                </div>
                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <footer style="text-align: center">
            <p>
                <span>&copy; 2016 <a href="javascript:void(0)" alt="job house" style="color: #ff3333;">Design and developed by Abdullah Al Mamun</a></span>
            </p>
        </footer>

        <!-- start: JavaScript-->

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.ui.touch-punch.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/modernizr.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.cookie.js"></script>

        <script src='<?php echo base_url(); ?>assets/admin/js/fullcalendar.min.js'></script>

        <script src='<?php echo base_url(); ?>assets/admin/js/jquery.dataTables.min.js'></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/excanvas.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.resize.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.chosen.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.uniform.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.cleditor.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.noty.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.elfinder.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.raty.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.iphone.toggle.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.gritter.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.imagesloaded.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.masonry.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.knob.modified.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/counter.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/retina.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
        <!-- end: JavaScript-->

    </body>
</html>
