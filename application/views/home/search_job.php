<div class="bg-light pt-80 pb-80">
    <div class="container comeHere">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-title">
                    <h2>Search Jobs result</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="<?php if(count($latest_job) > 0) echo "recent-job-wrapper"?> alt-stripe mr-0">
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

                    <?php } } if(count($latest_job)<=0){ echo '<h3> No Job Found</h3>'; } ?>
                </div>

            </div>

        </div>

    </div>

</div>
</div>