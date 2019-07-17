<div class="main-wrapper">

    <!-- start breadcrumb -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <p class="breadcrumb-list booking-step">Job Details</p>
        </div>
    </div>
    <!-- end breadcrumb -->

    <div class="section sm">

        <div class="container">

            <div class="row">

                <div class="col-sm-5 col-md-4">

                    <div class="job-detail-sidebar">

                        <ul class="meta-list clearfix">
                            <li>
                                <h4 class="heading">Location:</h4>
                                <?php echo $detail_job->Location; ?>
                            </li>
                            <li>
                                <h4 class="heading">Vacancy:</h4>
                                <?php echo $detail_job->Vacancy; ?>
                            </li>
                            <li>
                                <h4 class="heading">Job Nature:</h4>
                                <?php echo $detail_job->JobNature; ?>
                            </li>
                            <li>
                                <h4 class="heading">Posted:</h4>
                                <?php $date1 = $detail_job->JobDate; $date2 = date('d-m-Y'); $diff = abs(strtotime($date2) - strtotime($date1)); $years = floor($diff / (365*60*60*24)); $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); if($days > 0){ if($months > 0){ echo $months.' months '.$days.' days ago'; }else{ echo $days.' days ago'; } }else{ echo 'Today'; } ?>
                            </li>
                        </ul>

                        <div class="job-detail-company-overview mt-15 clearfix">

                            <h4>Company address</h4>
                            <p><?php echo $detail_job->caddress; ?></p>
                            <h4>Company overview</h4>
                            <p><?php echo $detail_job->cdetails; ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-sm-7 col-md-8">

                    <div class="job-detail-wrapper">

                        <div class="job-detail-header bb mb-30">

                            <h2 class="heading mb-15"><?php echo $detail_job->JobTitle; ?></h2>

                            <div class="meta-div clearfix mb-25">
                                <span>Job <a href="#">Category</a> is </span>
                                <span class="job-label label label-success"><a style="color: white;" href="#" ><?php echo $detail_job->CategoryName; ?></a></span>
                            </div>

                        </div>

                        <div class="job-detail-content mt-30 clearfix">

                            <h3>Job Description</h3>
                            <p class="font600 font16"><?php echo $detail_job->JobDetails; ?></p
                            
                            <h3>Job Requirements:</h3>
                            <p class="font600 font16"><?php echo $detail_job->JobRequirements; ?></p>
                            
                            <?php 
                            if(@getimagesize($detail_job->JobImages)){?>
                                    <h3>Image</h3>
                                <img src="<?php echo $detail_job->JobImages; ?>" alt="Job Images">
                               <?php } ?>
                                <!--p style="color: #ff3333" >If you feel you meet the above criteria, please send (email) your resume along with a cover letter (with salary expectations), photograph & contact number mentioning the name of the position applying for to <strong style="color: black"> <?php echo $detail_job->cemail; ?> </strong> , OR go to our site <strong style="color: green"> <?php echo $detail_job->curl; ?></strong> OR Hard copy submit to Company office reception</p-->

                        </div>

                        <div class="apply-job-wrapper">
                            <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>apply-job?jid=<?php echo $detail_job->JobsId; ?>" >Apply this job</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>