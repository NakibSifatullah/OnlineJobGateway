<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Title Of Site -->
        <title>Online Job Gateway ||| Largest Job Web portal in Bangladesh</title>
        <meta name="description" content="HTML Responsive Landing Page Template for Job Portal Based on Twitter Bootstrap 3.x.x" />
        <meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
        <meta name="author" content="crenoveative" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/front/images/ico/favicon.png" />

        <!-- CSS Plugins -->
<!--        <link rel="stylesheet" href="assets/front/bootstrap/css/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/bootstrap/css/bootstrap.min.css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/front/css/animate.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/front/css/main.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/front/css/component.css" rel="stylesheet" />

        <!-- CSS Font Icons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/linearicons/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/simple-line-icons/css/simple-line-icons.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/ionicons/css/ionicons.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/rivolicons/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/flaticon-line-icon-set/flaticon-line-icon-set.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/flaticon-streamline-outline/flaticon-streamline-outline.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/flaticon-thick-icons/flaticon-thick.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/icons/flaticon-ventures/flaticon-ventures.css" />

        <!-- CSS Custom -->
        <link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


    <body class="Home">


        <div id="#introLoader" class="#introLoading"></div>

        <!-- start Container Wrapper -->
        <div class="container-wrapper">

            <!-- start Header -->
            <header id="header">

                <!-- start Navbar (Header) -->
                <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

                    <div class="container">

                        <div class="logo-wrapper">
                            <div class="logo">
                                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/front/images/logoy.png" alt="Logo" style="height: 113px; margin-top: -30px;"/></a>
                            </div>
                        </div>

                        <div id="navbar" class="navbar-nav-wrapper navbar-arrow">

                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li><a href="<?php echo base_url(); ?>"><span class="text-capitalize">Home</span></a></li>
                                <?php $logdata = $this->session->userdata('userdata'); if(isset($logdata->cname)){

                                    ?>
                                <li><a href="<?php echo base_url(); ?>post-jobs"><span class="text-capitalize">Post Job</span></a></li>
                                <?php } ?>
                                <li><a href="<?php echo base_url(); ?>jobs"><span class="text-capitalize">Jobs</span></a></li>
                                <li><a href="<?php echo base_url(); ?>jobs-categories"><span class="text-capitalize">Category</span></a></li>
                                <li><a href="<?php echo base_url(); ?>contact-us"><span class="text-capitalize">Contact Us</span></a></li>
                                <li><a href="<?php echo base_url(); ?>about-us"><span class="text-capitalize">About Us</span></a></li>
                            </ul>

                        </div><!--/.nav-collapse -->

                        <div class="nav-mini-wrapper">
                            <ul class="nav-mini sign-in">
                                <?php $logdata = $this->session->userdata('userdata'); if(isset($logdata)){ ?>
                                <li><a href="javascript:void(0)"><?php if(isset($logdata->UserName)){ echo $logdata->UserName; }else if(isset($logdata->cname)){ echo $logdata->cname; } ?></a></li>
                                <li><a href="<?php echo base_url(); ?>log-out">Log Out</a><a href="<?php if(isset($logdata->UserName)){ echo base_url().'users-profiles'; }else if(isset($logdata->cname)){ echo base_url().'company-profiles'; } ?>">Profile</a></li>
                                <?php }else{ ?>
                                <li><a data-toggle="modal" href="#loginModal">Login</a></li>
                                <li><a data-toggle="modal" href="#registerModal">Register</a></li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>

                    <div id="slicknav-mobile"></div>

                </nav>
                <!-- end Navbar (Header) -->
<?php // print_r($this->session) ?>
                <!-- start Sign-in Modal -->
                <div id="loginModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Sign-in into your account</h4>
                    </div>

                    <style>
                          .nav-tabs > li.active > a {
                            background-color: #7f7fff;
                            color: #ffffff;
                          }
                          .nav-tabs > li > a:hover,
                          .nav-tabs > li > a:focus,
                          .nav-tabs > li.active > a:hover,
                          .nav-tabs > li.active > a:focus {
                            background-color: #cc0033;
                            color: #fff;
                          }
                    </style>

                    <ul class="nav nav-tabs">
                        <li class="col-sm-6 col-md-6">
                            <a class="btn btn-primary btn-block mb-5-xs" data-toggle="tab" href="#loginjobseekers">Login as Job Seeker</a>
                        </li>
                        <li class="col-sm-6 col-md-6">
                            <a class="btn btn-info btn-block" data-toggle="tab" href="#loginemployers">Login as Job Provider</a>
                        </li>
                    </ul>
                    <div class="col-md-12">
                        <div class="login-modal-or">
                            <div><span></span></div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="loginjobseekers" class="tab-pane fade">
                            <form action="<?php echo base_url(); ?>user-login" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row gap-20">

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>User Email</label>
                                                <input class="form-control" placeholder="Enter User Email" name="umail" type="email" required="required" required/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter Password" name="upass" type="password" required="required" />
                                            </div>

                                        </div>

                                        <!--div class="col-sm-6 col-md-6">
                                            <div class="checkbox-block">
                                                <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox" />
                                                <label class="" for="remember_me_checkbox">Remember me</label>
                                            </div>
                                        </div-->

                                        <div class="col-sm-12 col-md-12">
                                            <div class="login-box-box-action">
                                                No account? <a data-toggle="modal" href="#registerModal">Register</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer text-center">
                                    <button type="submit" class="btn btn-primary">Log-in</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                                </div>
                            </form>
                        </div>
                        <div id="loginemployers" class="tab-pane fade">
                            <form action="<?php echo base_url(); ?>company-login" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row gap-20">

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Company Email</label>
                                                <input class="form-control" placeholder="Enter Company Email" name="cmail" type="text" required/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter Password" name="cpass" type="password" required/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="login-box-box-action">
                                                No account? <a data-toggle="modal" href="#registerModal">Register</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer text-center">
                                    <button type="submit" class="btn btn-primary">Log-in</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end Sign-in Modal -->

                <!-- start Register Modal -->
                <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Register your account</h4>
                    </div>

                    <div class="modal-body">

                        <div class="row gap-20">

                            <ul class="nav nav-tabs">
                                <li class="col-sm-6 col-md-6">
                                    <a class="btn btn-primary btn-block mb-5-xs" data-toggle="tab" href="#jobseekers">Register as Job Seeker</a>
                                </li>
                                <li class="col-sm-6 col-md-6">
                                    <a class="btn btn-info btn-block" data-toggle="tab" href="#employers">Register as Job Provider</a>
                                </li>
                            </ul>

                            <div class="col-md-12">
                                <div class="login-modal-or">
                                    <div><span></span></div>
                                </div>
                            </div>

                            <div class="tab-content">
                                <div id="jobseekers" class="tab-pane fade">
                                    <form action="<?php echo base_url(); ?>user-register" method="post" enctype="multipart/form-data">

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" placeholder="Enter your username" name="uname" type="text" required />
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input class="form-control" placeholder="Enter your email address" name="umail" type="email" required="required" />
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter password" name="upass" type="password" required/>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input class="form-control" placeholder="Enter mobile no." name="umobile" type="number" required/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Upload your CV</label>
                                                <input type="file" class="file-input" name="ucv" accept=".pdf,.doc,.docx" required="required" />
                                            </div>

                                        </div>
                                        <div class="modal-footer text-center">
                                            <button type="submit" class="btn btn-primary">Register</button>
                                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                                        </div>
                                    </form>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="login-box-box-action">
                                                Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
                                            </div>
                                        </div>
                                </div>
                                <div id="employers" class="tab-pane fade">
                                    <form action="<?php echo base_url(); ?>company-register" method="post" enctype="multipart/form-data">

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Company name</label>
                                                <input class="form-control" placeholder="Enter company name" name="cname" type="text" required/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Company Email</label>
                                                <input class="form-control" placeholder="Enter company email" name="cmail" type="text" required/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter password" name="cpass" type="password" required/>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input class="form-control" placeholder="Enter mobile no." name="cmobile" type="number" required/>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Company URL</label>
                                                <input class="form-control" placeholder="Enter company url" name="cweb" type="text" required/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea name="caddress" class="form-control" rows="5" id="comment"></textarea>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12">

                                            <div class="form-group">
                                                <label>Details</label>
                                                <textarea name="cdetails" class="form-control" rows="5" id="comment" required></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer text-center">
                                            <button type="submit" class="btn btn-primary">Register</button>
                                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        </div>

                </div>
                <!-- end Register Modal -->

                <!-- start Forget Password Modal -->
                <div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Restore your forgotten password</h4>
                    </div>

                    <div class="modal-body">
                        <div class="row gap-20">

                            <!--<div class="col-sm-12 col-md-12">
                                <p class="mb-20">Maids table how learn drift but purse stand yet set. Music me house could among oh as their. Piqued our sister shy nature almost his wicket. Hand dear so we hour to.</p>
                            </div>-->

                            <div class="col-sm-12 col-md-12">

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" placeholder="Enter your email address" type="text" />
                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="checkbox-block">
                                    <input id="forgot_password_checkbox" name="forgot_password_checkbox" class="checkbox" value="First Choice" type="checkbox" />
                                    <label class="" for="forgot_password_checkbox">Generate new password</label>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="login-box-box-action">
                                    Return to <a data-toggle="modal" href="#loginModal">Log-in</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-primary">Restore</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                    </div>

                </div>
                <!-- end Forget Password Modal -->

            </header>

            <!-- start Main Wrapper -->
            <div class="main-wrapper">

                <!-- start hero-header -->
                <div class="hero alt-pb" style="background-image:url('http://localhost/onlinejobgateway/assets/front/images/hero-header/01.jpg');">
                    <?php if(isset($header)){ echo $header; } ?>
                <!--info message-->
                </div>
                <?php $info_msg = $this->session->userdata('info_msg'); if(isset($info_msg)){ ?>
                <div class="alert alert-success text-center" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <h3> <?php echo $info_msg; ?> </h3>
                </div>
                <?php $this->session->unset_userdata('info_msg'); } ?>

                <!-- end hero-header -->

                <?php if(isset($pages)){ echo $pages; } ?>


                <footer class="footer-wrapper">

                    <div class="main-footer">

                        <div class="container">

                            <div class="row">

                                <div class="col-sm-12 col-md-9">

                                    <div class="row">

                                        <div class="col-sm-6 col-md-4">

                                            <div class="footer-about-us">
                                                <h5 class="footer-title">About Online Job Gateway</h5>
                                                <p>It is a very enrich job portal for serching all kinds of job.</p>
                                                <a href="<?php echo base_url(); ?>about-us">read more</a>
                                            </div>

                                        </div>

                                        <div class="col-sm-6 col-md-5 mt-30-xs">
                                            <h5 class="footer-title">Quick Links</h5>

                                            <ul class="footer-menu clearfix">
                                                <li><a href="<?php echo base_url(); ?>jobs">Jobs</a></li>
                                                <li><a href="<?php echo base_url(); ?>post-jobs">Post Jobs</a></li>
                                                <li><a href="<?php echo base_url(); ?>jobs-categories">Category</a></li>
                                                <li><a href="<?php echo base_url(); ?>about-us">About us</a></li>
                                                <li><a href="<?php echo base_url(); ?>contact-us">Contact us</a></li>
                                                <!--li><a href="#">Help</a></li-->
                                                <!--<li><a href="#">Post a Job</a></li-->
                                                <!--li><a href="#">Contact us</a></li-->
                                                <!--li><a href="#">Publisher</a></li-->
                                                <!--li><a href="#">Include My Jobs</a></li-->
                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-12 col-md-3 mt-30-sm">

                                    <h5 class="footer-title">Help Desk</h5>
                                    <a href="<?php echo base_url(); ?>contact-us">Contact us</a>

                                    <!--p>Subsribe to get our latest updates and oeffers</p-->

                                    <div class="footer-newsletter">

                                        <!--div class="form-group">
                                            <input class="form-control" placeholder="enter your email " />
                                            <button class="btn btn-primary">subsribe</button>
                                        </div-->

                                        <!--p class="font-italic font13">*** Help Desk</p-->

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="bottom-footer">

                        <div class="container">

                            <div class="row">

                                <div class="col-sm-4 col-md-4">

                                    <p class="copy-right">&#169; Copyright 2019 Nakib Sifatullah </p>

                                </div>

                                <!--div class="col-sm-4 col-md-4">

                                    <ul class="bottom-footer-menu">
                                        <li><a href="#">Cookies</a></li>
                                        <li><a href="#">Policies</a></li>
                                        <li><a href="#">Terms</a></li>
                                        <li><a href="#">Blogs</a></li>
                                    </ul>

                                </div-->

                                <div class="col-sm-4 col-md-4">
                                    <ul class="bottom-footer-menu for-social">
                                        <li><a href="https://twitter.com/?lang=en"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
                                        <li><a href="https://plus.google.com/collections/featured"><i class="ri ri-google-plus" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="ri ri-youtube-play" data-toggle="tooltip" data-placement="top" title="youtube"></i></a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>

                </footer>

            </div>
            <!-- end Main Wrapper -->

        </div> <!-- / .wrapper -->
        <!-- end Container Wrapper -->


        <!-- start Back To Top -->
        <div id="back-to-top">
            <a href="#"><i class="ion-ios-arrow-up"></i></a>
        </div>
        <!-- end Back To Top -->

        <!-- JS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap-modalmanager.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/smoothscroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.slicknav.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.placeholder.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap-tokenfield.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/typeahead.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap3-wysihtml5.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-filestyle.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/ion.rangeSlider.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/handlebars.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.countimator.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.countimator.wheel.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/easy-ticker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.introLoader.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.responsivegrid.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/customs.js"></script>

        <script type="text/javascript">
            $(document).ready (function(){
                var h = $(".comeHere").offset().top;
                $('html, body').animate({
                scrollTop: h - 100
                }, 500);
            });

//            $(document).ready (function(){
//                $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
//                    $("#success-alert").slideUp(500);
//                });
//            });
        </script>

    </body>
</html>
