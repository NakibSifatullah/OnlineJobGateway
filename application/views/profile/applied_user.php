<div class="section sm pb-20">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-title">
                    <h2><?php echo $applied_jobname->JobTitle; ?></h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12 col-md-11 col-md-offset-1 mb-30">
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="sevice-table table table-bordered">
                            <thead>
                                <tr class="info">
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Cv</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($applied_alluser)){ foreach ($applied_alluser as $users){?>
                                <tr>
                                    <td><?php echo $users->UserName; ?></td>
                                    <td><?php echo $users->UserEmail; ?></td>
                                    <td><?php echo $users->UserMobile; ?></td>
                                    <td><a href="<?php echo $users->UserCv; ?>"><img alt="Cv" src="<?php echo base_url(); ?>assets/front/images/doc.png" width="30"></a></td>
                                    <td><a href="<?php echo base_url(); ?>Pages/invite_user?uid=<?php echo $users->UserId; ?>&cid=<?php echo $applied_jobname->JobCompany; ?>&jid=<?php echo $applied_jobname->JobsId; ?>" class="btn btn-success btn-block">Invite now</a></td>
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