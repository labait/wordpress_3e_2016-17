<?php
  $upload_dir = wp_upload_dir()['baseurl'];
  $image = get_field('image');
?>

<div class="col-md-4 col-sm-6 portfolio-item">
    <a href="#portfolioModal<?php the_ID();?>" class="portfolio-link" data-toggle="modal">
        <div class="portfolio-hover">
            <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
            </div>
        </div>
        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <!--
        <img src="<?php print $theme_dir; ?>/img/portfolio/roundicons.png" class="img-responsive" alt="">
      -->
    </a>
    <div class="portfolio-caption">
        <h4>
          <?php the_title(); ?>
        </h4>
        <p class="text-muted">
          <?php the_field("subtitle"); ?>
        </p>
    </div>
</div>
