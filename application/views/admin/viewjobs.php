<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>All Jobs</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Job Category</th>
                        <th>Company</th>
                        <th>E-mail</th>
                        <th>Contact</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_jobs as $jobs) { ?>
                        <tr>
                            <td><?php echo $jobs->JobTitle; ?></td>
                            <td class="center"><?php echo $jobs->JobCategory; ?></td>
                            <td class="center"><?php echo $jobs->cname; ?></td>
                            <td class="center"><?php echo $jobs->cemail; ?></td>
                            <td class="center"><?php echo $jobs->cphone; ?></td>
                            <td class="center"><?php echo $jobs->JobDeadline; ?></td>
                            <td class="center"><?php if($jobs->JobStatus==1){ echo 'Published'; }else{ echo'Not Publish'; } ?></td>
                            <td class="center">
                                <a href="<?php echo base_url(); ?>edit-job?jid=<?php echo $jobs->JobsId; ?>" class="btn btn-info">Edit</a>
                                <a href="<?php echo base_url(); ?>delete-job?jid=<?php echo $jobs->JobsId; ?>" class="btn btn-warning">Delete</a>
                                <?php if($jobs->JobStatus==1){ ?>
                                <a href="<?php echo base_url(); ?>Admin/unpublish_job?jid=<?php echo $jobs->JobsId; ?>" class="btn btn-danger">Unpublish</a>
                                <?php }else{ ?>
                                <a href="<?php echo base_url(); ?>Admin/publish_job?jid=<?php echo $jobs->JobsId; ?>" class="btn btn-primary">Publish</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div><!--/span-->