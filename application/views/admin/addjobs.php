<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url(); ?>admin">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="javascript:void(0)">add Job</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add a Job</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>create-jobs" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Job Category </label>
                        <div class="controls">
                            <select class="span6" name="jobcategory">
                                <option selected disabled>Select Job Category</option>
                                <?php foreach($all_categories as $categories){ ?>
                                <option value="<?php echo $categories->Id; ?>"><?php echo $categories->CategoryName; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Job Title</label>
                        <div class="controls">
                            <input type="text" class="span6" name="jobheadline" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Company Name </label>
                        <div class="controls">
                            <select class="span6" name="company_id">
                                <option selected disabled>Select Company</option>
                                 <?php foreach ($all_companies as $company) {?>
                            <option value="<?=$company->id  ?>"><?= $company->cname?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Company Website(URL)</label>
                        <div class="controls">
                            <input type="text" class="span6" name="jobcompanyurl" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Company E-mail</label>
                        <div class="controls">
                            <input type="text" class="span6" name="jobcompanymail" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Contact Number</label>
                        <div class="controls">
                            <input type="text" class="span6" name="jobcompanymobile" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Vacancy</label>
                        <div class="controls">
                            <input type="text" class="span6" name="jobvacancy" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Location</label>
                        <div class="controls">
                            <input type="text" class="span6" name="joblocation" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Job Nature </label>
                        <div class="controls">
                            <select class="span6" name="jobnature">
                                <option selected disabled>Select Job Nature</option>
                                <option value="Half-Time">Half-Time</option>
                                <option value="Full-Time">Full-Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Job Description / Responsibility</label>
                        <div class="controls">
                            <textarea class="cleditor" name="jobdetails" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Job Requirements</label>
                        <div class="controls">
                            <textarea class="cleditor" name="jobrequirements" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Job Benefits</label>
                        <div class="controls">
                            <textarea class="cleditor" name="jobbenefits" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image File</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="jobimage" id="fileInput" type="file">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Deadline</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge datepicker" name="jobdeadline" id="date01" value="<?php echo date('d-m-Y'); ?>">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Job</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->