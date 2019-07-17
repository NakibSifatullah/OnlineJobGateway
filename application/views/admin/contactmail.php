<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Peoples Contact E-mail</h2>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Messages</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contactmail as $cmail) { ?>
                        <tr>
                            <td><?php echo $cmail->name; ?></td>
                            <td><?php echo $cmail->email; ?></td>
                            <td><?php echo $cmail->subject; ?></td>
                            <td><?php echo $cmail->messages; ?></td>
                            <td><?php echo $cmail->contactdate; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div><!--/span-->