<div class="section sm pb-20">

    <div class="container">

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                <div class="section-title">

                    <h2><span class="text-uppercase">Post a Job</span></h2>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-7 col-md-6 col-md-offset-1 mb-30">

                <form class="contact-form-wrapper" data-toggle="validator" action="<?php echo base_url(); ?>create-jobs" method="post" enctype="multipart/form-data" >

                <div class="row">

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="inputName">Job Category <span class="font10 text-danger">(required)</span></label>
                            <select class="form-control" name="jobcategory" required>
                                <option selected value="">Select Job Category</option>
                                <?php if(isset($all_categories)){ foreach($all_categories as $category){ ?>
                                <option value="<?php echo $category->Id; ?>"><?php echo $category->CategoryName; ?></option>
                                <?php } } ?>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="inputName">Job Nature <span class="font10 text-danger">(required)</span></label>
                            <select class="form-control" name="jobnature" required="required">
                                <option selected value="">Select Job Nature</option>
                                <option value="Half-Time">Half-Time</option>
                                <option value="Full-Time">Full-Time</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="inputEmail">Job Title <span class="font10 text-danger">(required)</span></label>
                            <input id="inputEmail" type="text" name="jobheadline" class="form-control" data-error="Your email is required and must be a valid email address" required="" />
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="inputName">Vacancy <span class="font10 text-danger">(required)</span></label>
                            <input id="inputName" type="text" name="jobvacancy" class="form-control" data-error="Your name is required" required="" />
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Location <span class="font10 text-danger">(required)</span></label>
                            <input type="text" name="joblocation" class="form-control" data-error="Your name is required" required="" />
                        </div>

                    </div>

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="inputMessage">Job Description/Resposibility </label>
                            <textarea name="jobdetails" id="inputMessage" class="form-control" rows="4" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required=""></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="inputMessage">Job Requirements </label>
                            <textarea name="jobrequirements" id="inputMessage" class="form-control" rows="4" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required=""></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="inputMessage">Job Benefits </label>
                            <textarea name="jobbenefits" id="inputMessage" class="form-control" rows="4" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required=""></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="inputName">Job Images</label>
                            <input id="inputName" type="file" name="jobimage" class="form-control" />
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label>Deadline</label>
                            <input type="text" name="jobdeadline" value="<?php echo date('d-m-Y'); ?>" class="form-control" />
                        </div>

                    </div>

                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary mt-5">Post Job</button>
                        <button type="reset" class="btn btn-danger mt-5">Cancel</button>
                    </div>

                </div>

                </form>

            </div>

        </div>

    </div>

</div>