<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url(); ?>admin">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="javascript:void(0)">Add Admin</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Admin</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>save-admin" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="uname">User Name </label>
                        <div class="controls">
                            <input type="text" class="span6" name="uname" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="uname">Email </label>
                        <div class="controls">
                            <input type="text" class="span6" name="umail" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="uname">Password </label>
                        <div class="controls">
                            <input type="password" class="span6" name="upass" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="uname">Mobile </label>
                        <div class="controls">
                            <input type="text" class="span6" name="uphone" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Date</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge datepicker" name="udate" id="date01" value="<?php echo date('d-m-Y'); ?>">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Admin</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->