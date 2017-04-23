<div class="portfolio-modal modal fade" id="portfolioModal<?php echo the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <h2>
                              <?php the_title(); ?>
                            </h2>
                            <hr class="star-primary">
                            <img class="img-fluid img-centered" src="img/portfolio/cake.png" alt="">
                            <p>
                              <?php the_content(); ?>
                            </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                                </li>
                            </ul>
                            <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
