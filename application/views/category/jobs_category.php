<div class="section sm">

    <div class="container">

        <div class="browse-job-wrapper mt-0">

            <div class="browse-job-box">

                <div class="row">

                    <div class="col-sm-4 col-md-3">

                        <div class="browse-job-title">

                            <h3 class="text-primary text-uppercase mb-0">Jobs <span class="text-uppercase">Category</span></h3>
                            

                        </div>

                    </div>

                    <div class="col-sm-8 col-md-9">

                        <div class="browse-job-content">

                            <div class="browse-job-inner">

                                <div class="row gap-20">
                                    
                                    <?php if(isset($all_categories)){ foreach ($all_categories as $category){  ?>

                                    <div class="col-sm-6 col-md-4">

                                        <h3><a href="<?php echo base_url(); ?>categories-job?cj=<?php echo $category->Id; ?>"><?php echo $category->CategoryName; ?><span class="text-muted font-italic">(<?php echo $category->Jobcount; ?>)</span></a></h3>

                                    </div>
                                    
                                    <?php } } ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>