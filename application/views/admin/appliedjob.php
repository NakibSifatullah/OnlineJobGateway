<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>All Applied Jobs</h2>
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
                        <th>Applied User</th>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>E-mail</th>
                        <th>Contact</th>
                        <th>Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($appliedjob as $ajobs) { ?>
                        <tr>
                            <td><?php echo $ajobs->UserName; ?></td>
                            <td><?php echo $ajobs->JobTitle; ?></td>
                            <td class="center"><?php echo $ajobs->cname; ?></td>
                            <td class="center"><?php echo $ajobs->cemail; ?></td>
                            <td class="center"><?php echo $ajobs->cphone; ?></td>
                            <td class="center"><?php echo $ajobs->JobDeadline; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div><!--/span-->