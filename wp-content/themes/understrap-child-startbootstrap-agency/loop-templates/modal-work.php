<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal<?php the_ID();?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>
                              <?php print get_the_title(); ?>
                            </h2>
                            <p class="item-intro text-muted">
                              <?php the_field("subtitle"); ?>
                            </p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>
                              <?php the_content(); ?>
                            </p>
                            <ul class="list-inline">
                                <li>Date: <?php the_field("date"); ?></li>
                                <li>Client: <?php the_field("client"); ?></li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
