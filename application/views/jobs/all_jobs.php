<div class="section sm">

    <div class="container">

        <div class="sorting-wrappper">

            <!--<div class="sorting-header">
                <h3 class="sorting-title">We found 2,584 live jobs</h3>
            </div>-->

        </div>

        <div class="result-wrapper">

            <div class="row">

                <div class="col-sm-8 col-md-9 mt-25">

                    <div class="result-list-wrapper">

                        <?php if(isset($all_jobs)){ foreach ($all_jobs as $job){ ?>
                        
                        <div class="job-item-list">

                            <!--<div class="image">
                                <img src="<?php echo base_url(); ?>assets/front/images/brands" />
                            </div>-->

                            <div class="content">
                                <div class="job-item-list-info">

                                    <div class="row">

                                        <div class="col-sm-7 col-md-8">

                                            <h4 class="heading"><a href="<?php echo base_url(); ?>jobs-details?j=<?php echo $job->JobsId; ?>"><?php echo $job->JobTitle; ?></a></h4>
                                            <div class="meta-div clearfix mb-25">
                                                <span>at <a href="javascript:void(0)"><?php echo $job->cname; ?></a></span>
                                                <span class="job-label label label-danger"><?php echo $job->JobNature; ?></span>
                                            </div>

                                            <p class="texing"><?php echo $job->JobDetails; ?> ...</p>
                                        </div>

                                        <div class="col-sm-5 col-md-4">
                                            <ul class="meta-list">
                                                <li>
                                                    <span>Location:</span>
                                                    <?php echo $job->Location; ?>
                                                </li>
                                                <li>
                                                    <span>Job Vacancy:</span>
                                                    <?php echo $job->Vacancy; ?>
                                                </li>
                                                <li>
                                                    <span>Contact</span>
                                                    <?php echo $job->cphone; ?>
                                                </li>
                                                <li>
                                                    <span>Posted: </span>
                                                    <?php $date1 = $job->JobDate; $date2 = date('d-m-Y'); $diff = abs(strtotime($date2) - strtotime($date1)); $years = floor($diff / (365*60*60*24)); $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); if($days > 0){ if($months > 0){ echo $months.' months '.$days.' days ago'; }else{ echo $days.' days ago'; } }else{ echo 'Today'; } ?>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="job-item-list-bottom">

                                    <div class="row">

                                        <div class="col-sm-7 col-md-8">
                                            <div class="sub-category">
                                                Category: <a href="<?php echo base_url(); ?>categories-job?cj=<?php echo $job->Id; ?>"><?php echo $job->CategoryName; ?></a>
                                            </div>
                                        </div>

                                        <div class="col-sm-5 col-md-4">
                                            <a href="<?php echo base_url(); ?>apply-job?jid=<?php echo $job->JobsId; ?>" class="btn btn-primary">Apply for Job</a>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>
                        <?php  } }  ?>

                    </div>

                    <!--<div class="pager-wrapper">

                        <ul class="pager-list">
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="number">
                                <span class="mr-5"><span class="font600">page</span></span>
                            </li>
                            <li class="form">
                                <form />
                                <input type="text" value="1" class="form-control" /> 
                                </form>
                            </li>
                            <li class="number">
                                <span class="mr-5">/</span> <span class="font600">79</span>
                            </li>
                            <li class="paging-nav"><a href="#">go</a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>	

                    </div>-->

                </div>

                <!--<div class="col-sm-4 col-md-3 mt-25">

                    <div class="result-list-wrapper">

                        <aside class="sidebar with-filter">

                            <div class="sidebar-inner">

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">Featured Employers</h4>

                                    <div class="top-company-2-wrapper">

                                        <div class="GridLex-gap-10">

                                            <div class="GridLex-grid-noGutter-equalHeight">

                                                <div class="GridLex-col-12_sm-12_xs-6_xss-12">

                                                    <div class="top-company-2">
                                                        <a href="#">

                                                            <div class="image">
                                                                <img src="<?php echo base_url(); ?>assets/front/images/brands/08.png" alt="image" />
                                                            </div>

                                                            <div class="content">
                                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                                            </div>

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="GridLex-col-12_sm-12_xs-6_xss-12">

                                                    <div class="top-company-2">
                                                        <a href="#">

                                                            <div class="image">
                                                                <img src="<?php echo base_url(); ?>assets/front/images/brands/09.png" alt="image" />
                                                            </div>

                                                            <div class="content">
                                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                                            </div>

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="GridLex-col-12_sm-12_xs-6_xss-12">

                                                    <div class="top-company-2">
                                                        <a href="#">

                                                            <div class="image">
                                                                <img src="<?php echo base_url(); ?>assets/front/images/brands/05.png" alt="image" />
                                                            </div>

                                                            <div class="content">
                                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                                            </div>

                                                        </a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">Top Locations</h4>

                                    <ul class="sidebar-link-list">
                                        <li><a href="#">Louisville, KY <span>(432)</span></a></li>
                                        <li><a href="#">Charleroi, PA <span>(123)</span></a></li>
                                        <li><a href="#">New York, NY<span>(3332)</span></a>
                                            <ul class="sidebar-link-list active">
                                                <li><a href="#">Mahattan<span>(23)</span></a></li>
                                                <li><a href="#">Broadway<span>(43)</span></a></li>
                                                <li><a href="#">Midtown<span>(09)</span></a></li>
                                                <li><a href="#">Brooklyn<span>(18)</span></a></li>
                                                <li><a href="#">Wall Streat<span>(65)</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Richmond, VA <span>(134)</span></a></li>
                                        <li><a href="#">Overland Park, KS <span>(321)</span></a></li>
                                        <li><a href="#">Dallas, TX <span>(554)</span></a></li>
                                        <li><a href="#">Irvine, CA <span>(66)</span></a></li>
                                        <li><a href="#">Escondido, CA <span>(78)</span></a></li>
                                    </ul>

                                </div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">Related Keyword</h4>

                                    <div class="sub-category">
                                        <a href="#">Engineer</a>
                                        <a href="#">Packaging</a>
                                        <a href="#">Package</a>
                                        <a href="#">Manufacturing</a>
                                        <a href="#">Product Design</a>
                                        <a href="#">Engineer</a>
                                        <a href="#">Packaging</a>
                                        <a href="#">Package</a>
                                        <a href="#">Manufacturing</a>
                                        <a href="#">Product Design</a>
                                    </div>

                                </div>

                            </div>

                        </aside>

                    </div>

                </div>-->

            </div>

        </div>

    </div>

</div>