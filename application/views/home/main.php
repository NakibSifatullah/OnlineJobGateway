<div class="bg-light pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-title">
                    <h2><span class="text-uppercase">Latest Jobs</span></h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="recent-job-wrapper alt-stripe mr-0">
                    <?php if(isset($latest_job)){ foreach ($latest_job as $ljob){ ?>
                    <a href="<?php echo base_url(); ?>jobs-details?j=<?php echo $ljob->JobsId; ?>" class="recent-job-item clearfix">
                        <div class="GridLex-grid-middle">
                            <div class="GridLex-col-6_xs-12">
                                <div class="job-position">
                                    <!--<div class="image">
                                        <img src="<?php echo base_url(); ?>assets/front/images/brands/alt="image" />
                                    </div>-->
                                    <div class="content">
                                        <h4><?php echo $ljob->JobTitle; ?></h4>
                                        <p><?php echo $ljob->cname; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="GridLex-col-4_xs-8_xss-12 mt-10-xss">
                                <div class="job-location">
                                    <i class="fa fa-map-marker text-primary"></i> <?php echo $ljob->Location; ?>
                                </div>
                            </div>
                            <div class="GridLex-col-2_xs-4_xss-12">
                                <div class="job-label label label-success">
                                    <?php echo $ljob->JobNature; ?>
                                </div>
                                <span class="font12 block spacing1 font400 text-center">
                                    <?php $date1 = $ljob->JobDate; $date2 = date('d-m-Y'); $diff = abs(strtotime($date2) - strtotime($date1)); $years = floor($diff / (365*60*60*24)); $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); if($days > 0){ if($months > 0){ echo $months.' months '.$days.' days ago'; }else{ echo $days.' days ago'; } }else{ echo 'Today'; } ?>
                                </span>
                            </div>
                        </div>
                    </a>
                    <?php } } ?>
                </div>

            </div>

        </div>

    </div>

</div>

<!--<div class="bg-light pt-0 pb-80">

    <div class="container">

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                <div class="section-title">

                    <h2>featured candidates</h2>

                </div>

            </div>

        </div>

        <div class="employee-grid-item-01-wrapper">

            <div class="row gap-10">

                <div class="col-xss-6 col-xs-4 col-sm-3 col-md-2">

                    <div class="employee-grid-item-01">

                        <a href="#">

                            <div class="image">
                                <img src="<?php echo base_url(); ?>assets/front/images/team/01.jpg" alt="Team" />

                                <p class="location"><i class="fa fa-map-marker"></i> Rome, Italy</p>

                            </div>

                            <div class="content">
                                <h5>Ange Ermolova</h5>
                                <ul class="skill-list">

                                    <li><span>CMS</span></li>
                                    <li><span>Wordpress</span></li>
                                    <li><span>Joomla</span></li>

                                </ul>
                            </div>

                        </a>

                    </div>

                </div>

                <div class="col-xss-6 col-xs-4 col-sm-3 col-md-2">

                    <div class="employee-grid-item-01">

                        <a href="#">

                            <div class="image">
                                <img src="<?php echo base_url(); ?>assets/front/images/team/02.jpg" alt="Team" />
                                <p class="location"><i class="fa fa-map-marker"></i> Paris, France</p>
                            </div>

                            <div class="content">
                                <h5>Khairoz Nadzri</h5>
                                <ul class="skill-list">

                                    <li><span>Android</span></li>
                                    <li><span>Mobile App</span></li>

                                </ul>
                            </div>

                        </a>

                    </div>

                </div>

                <div class="col-xss-6 col-xs-4 col-sm-3 col-md-2">

                    <div class="employee-grid-item-01">

                        <a href="#">

                            <div class="image">
                                <img src="<?php echo base_url(); ?>assets/front/images/team/03.jpg" alt="Team" />

                                <p class="location"><i class="fa fa-map-marker"></i> Bangkok, Thailand</p>

                            </div>

                            <div class="content">
                                <h5>Christine Gateau</h5>
                                <ul class="skill-list">

                                    <li><span>Java</span></li>
                                    <li><span>PHP</span></li>
                                    <li><span>SEO</span></li>
                                    <li><span>MySQL</span></li>

                                </ul>
                            </div>

                        </a>

                    </div>

                </div>

                <div class="col-xss-6 col-xs-4 col-sm-3 col-md-2">

                    <div class="employee-grid-item-01">

                        <a href="#">

                            <div class="image">
                                <img src="<?php echo base_url(); ?>assets/front/images/team/04.jpg" alt="Team" />
                                <p class="location"><i class="fa fa-map-marker"></i> Kuala Lumpur, Malaysia</p>
                            </div>

                            <div class="content">
                                <h5>Chaiyapatt Putsathit</h5>
                                <ul class="skill-list">

                                    <li><span>Wordpress</span></li>
                                    <li><span>Joomla</span></li>
                                    <li><span>CMS</span></li>

                                </ul>
                            </div>

                        </a>

                    </div>

                </div>

                <div class="col-xss-6 col-xs-4 col-sm-3 col-md-2">

                    <div class="employee-grid-item-01">

                        <a href="#">

                            <div class="image">
                                <img src="<?php echo base_url(); ?>assets/front/images/team/05.jpg" alt="Team" />

                                <p class="location"><i class="fa fa-map-marker"></i> Rome, Italy</p>

                            </div>

                            <div class="content">
                                <h5>Michel Legrand</h5>
                                <ul class="skill-list">

                                    <li><span>Accounting</span></li>
                                    <li><span>Marking</span></li>
                                    <li><span>SEO</span></li>

                                </ul>
                            </div>

                        </a>

                    </div>

                </div>

                <div class="col-xss-6 col-xs-4 col-sm-3 col-md-2">

                    <div class="employee-grid-item-01">

                        <a href="#">

                            <div class="image">
                                <img src="<?php echo base_url(); ?>assets/front/images/team/02.jpg" alt="Team" />
                                <p class="location"><i class="fa fa-map-marker"></i> Jakarta, Indonesia</p>
                            </div>

                            <div class="content">
                                <h5>Oxana Laporte</h5>
                                <ul class="skill-list">

                                    <li><span>Java</span></li>
                                    <li><span>PHP</span></li>
                                    <li><span>SEO</span></li>
                                    <li><span>MySQL</span></li>

                                </ul>
                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>-->

</div>