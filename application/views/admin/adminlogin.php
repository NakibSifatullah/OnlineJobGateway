<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Login to Online Job Gateway admin panel</title>
        <meta name="description" content="Online Jobgateway Dashboard">
        <meta name="author" content="Abdullah Al Mamun">
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

        <style type="text/css">
            body { background: url(./assets/admin/img/bg-login.jpg) !important; }
        </style>



    </head>

    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="login-box">
                        <div class="icons">
                            <a href="index.html"><i class="halflings-icon home"></i></a>
                            <a href="#"><i class="halflings-icon cog"></i></a>
                        </div>
                        <h2>Login to your account</h2>
                        <form class="form-horizontal" action="<?php echo base_url(); ?>admin-login" method="post">
                            <fieldset>

                                <div class="input-prepend" title="Username">
                                    <span class="add-on"><i class="halflings-icon user"></i></span>
                                    <input class="input-large span10" name="urname" id="username" type="text" placeholder="type useremail" required/>
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend" title="Password">
                                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                                    <input class="input-large span10" name="uspassword" id="password" type="password" placeholder="type password" required/>
                                </div>
                                <div class="clearfix"></div>

                                <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                                <div class="button-login">	
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="clearfix"></div>
                            </fieldset>
                        </form>
                        <hr>
                        <!--h3>Forgot Password?</h3-->
                        <!--p>
                            No problem, <a href="#">click here</a> to get a new password.
                        </p-->	
                    </div><!--/span-->
                </div><!--/row-->


            </div><!--/.fluid-container-->

        </div><!--/fluid-row-->

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
