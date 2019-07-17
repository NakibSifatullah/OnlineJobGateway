<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Jobs Categories</h2>
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
                        <th>Category</th>
                        <th>Details</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_categories as $category) { ?>
                        <tr>
                            <td><?php echo $category->CategoryName; ?></td>
                            <td class="center"><?php echo $category->CategoryDetails; ?></td>
                            <td class="center"><?php echo $category->CategoryDate; ?></td>
                            <td class="center">
                                <a href="<?php echo base_url(); ?>edit-category?cid=<?php echo $category->Id; ?>" class="btn btn-info">Edit</a>
                                <a href="<?php echo base_url(); ?>delete-category?cid=<?php echo $category->Id; ?>" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div><!--/span-->