<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>All Admin</h2>
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
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_admin as $admin) { ?>
                        <tr>
                            <td><?php echo $admin->UserName; ?></td>
                            <td class="center"><?php echo $admin->UserMail; ?></td>
                            <td class="center"><?php echo $admin->UserMobile; ?></td>
                            <td class="center"><?php echo $admin->UserDate; ?></td>
                            <td class="center">
                                <a href="<?php echo base_url(); ?>edit-admin?aid=<?php echo $admin->Id; ?>" class="btn btn-info">Edit</a>
                                <a href="<?php echo base_url(); ?>delete-admin?aid=<?php echo $admin->Id; ?>" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div><!--/span-->