<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url(); ?>admin">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="javascript:void(0)">edit Job</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Job Information</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>update-job" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Job Category </label>
                        <div class="controls">
                            <select class="span6" name="jobcategory">
                                <option disabled>Select Job Category</option>
                                <?php foreach($all_categories as $categories){ ?>
                                <option value="<?php echo $categories->Id; ?>" <?php if($categories->Id==$update_jobs->JobCategory){ echo 'selected'; } ?> ><?php echo $categories->CategoryName; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Job Title</label>
                        <div class="controls">
                            <input type="text" class="span6" name="jobheadline" value="<?php echo $update_jobs->JobTitle; ?>" >
                            <input type="hidden" name="jobsid" value="<?php echo $update_jobs->JobsId; ?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Vacancy</label>
                        <div class="controls">
                            <input type="text" class="span6" name="jobvacancy" value="<?php echo $update_jobs->Vacancy; ?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Location</label>
                        <div class="controls">
                            <input type="text" class="span6" name="joblocation" value="<?php echo $update_jobs->Location; ?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Job Nature </label>
                        <div class="controls">
                            <select class="span6" name="jobnature">
                                <option disabled>Select Job Nature</option>
                                <option value="Half-Time" <?php if($update_jobs->Location=='Half-Time'){ echo 'selected'; } ?> >Half-Time</option>
                                <option value="Full-Time" <?php if($update_jobs->Location=='Full-Time'){ echo 'selected'; } ?> >Full-Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Job Description / Responsibility</label>
                        <div class="controls">
                            <textarea class="cleditor" name="jobdetails" id="textarea2" rows="3"><?php echo $update_jobs->JobDetails; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Job Requirements</label>
                        <div class="controls">
                            <textarea class="cleditor" name="jobrequirements" id="textarea2" rows="3"><?php echo $update_jobs->JobRequirements; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Job Benefits</label>
                        <div class="controls">
                            <textarea class="cleditor" name="jobbenefits" id="textarea2" rows="3"><?php echo $update_jobs->JobBenefits; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput"></label>
                        <div class="controls">
                            <img src="<?php echo $update_jobs->JobImages; ?>" alt="" width="100" >
                            <input type="hidden" name="jobpreviuousimage" value="<?php echo $update_jobs->JobImages; ?>" >
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
                            <input type="text" class="input-xlarge datepicker" name="jobdeadline" id="date01" value="<?php echo $update_jobs->JobDeadline; ?>" >
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update Job</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->