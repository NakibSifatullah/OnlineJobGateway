<?php $logdata = $this->session->userdata('userdata'); ?>
<div class="section sm pb-20">

    <div class="container">

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                <div class="section-title">

                    <h2>Company Profile</h2>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-12 col-md-11 col-md-offset-1 mb-30">

                <div class="row">
                    <div class="col-md-4 ">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/front/images/company.jpg" alt="images not found" width="50%">
                    </div>
                    <div class="col-md-8 ">
                        <table class="table table-condensed">
                            <tr>
                                <td><b>Company Name:</b></td>
                                <td>&nbsp;<?php echo $logdata->cname; ?></td>
                            </tr>
                            <tr>
                                <td><b>Company Email: </b></td>
                                <td><?php echo $logdata->cemail; ?></td>
                            </tr>
                            <tr>
                                <td><b>Contact: </b></td>
                                <td><?php echo $logdata->cphone; ?></td>
                            </tr>
                            <tr>
                                <td><b>Address: </b></td>
                                <td><?php echo $logdata->caddress; ?></td>
                            </tr>
                            <tr>
                                <td><b>Details: </b></td>
                                <td><?php echo $logdata->cdetails; ?></td>
                            </tr>
                            <tr>
                                <td><b>Website: </b></td>
                                <td><a href="<?php echo $logdata->curl; ?>" target="_blank"><?php echo $logdata->curl; ?></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 table-responsive" id="Fisherman">
                        <table class="sevice-table table table-bordered">
                            <thead>
                                <tr class="info">
                                    <td>Job Title</td>
                                    <td>Vacancy</td>
                                    <td>Job Nature</td>
                                    <td>Location</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($company_alljobs)){ foreach ($company_alljobs as $cjobs){?>
                                <tr>
                                    <td><?php echo $cjobs->JobTitle; ?></td>
                                    <td><?php echo $cjobs->Vacancy; ?></td>
                                    <td><?php echo $cjobs->JobNature; ?></td>
                                    <td><?php echo $cjobs->Location; ?></td>
                                    <td><a href="<?php echo base_url(); ?>Pages/applied_user?jid=<?php echo $cjobs->JobsId; ?>" class="btn btn-primary btn-block">View Applied User</a></td>
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