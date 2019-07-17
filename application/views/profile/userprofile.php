<?php $logdata = $this->session->userdata('userdata'); ?>
<div class="section sm pb-20">

    <div class="container">

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                <div class="section-title">

                    <h2>User Profile</h2>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-12 col-md-11 col-md-offset-1 mb-30">

                <div class="row">
                    <div class="col-md-4 ">
                        <img style="margin-bottom: 10px;" class="img-circle" src="<?php echo base_url(); ?>assets/front/images/man/gCBRgv5.png" alt="images not found" width="50%">
                    </div>
                    <div class="col-md-8 ">
                        <table class="fisherman-table">
                            <tr>
                                <td><b>User Name:</b></td>
                                <td>&nbsp;<?php echo  $logdata->UserName; ?></td>
                            </tr>
                            <tr>
                                <td><b>User Email: </b></td>
                                <td>&nbsp;<?php echo  $logdata->UserEmail; ?></td>
                            </tr>
                            <tr>
                                <td><b>Contact: </b></td>
                                <td>&nbsp;<?php echo  $logdata->UserMobile; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="sevice-table table table-bordered">
                            <thead>
                                <tr class="info">
                                    <td>Job title</td>
                                    <td>Company</td>
                                    <td>Company Email</td>
                                    <td>Deadline</td>
                                    <td>Apply Date</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($users_jobsprofile)){ foreach($users_jobsprofile as $jobprofile){ ?>
                                <tr>
                                    <td><?php echo $jobprofile->JobTitle; ?></td>
                                    <td><?php echo $jobprofile->cname; ?></td>
                                    <td><?php echo $jobprofile->cemail; ?></td>
                                    <td><?php echo $jobprofile->JobDeadline; ?></td>
                                    <td><?php echo $jobprofile->ApplyDate; ?></td>
                                </tr>
                                <?php } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>