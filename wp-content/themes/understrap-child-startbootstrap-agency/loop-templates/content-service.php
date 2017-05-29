<?php
  $upload_dir = wp_upload_dir()['baseurl'];
  $image = get_field('image');
?>

<div class="col-md-4">
    <span class="fa-stack fa-4x">
        <i class="fa fa-circle fa-stack-2x text-primary"></i>
        <i class="fa <?php the_field("font_awesome_icon"); ?> fa-stack-1x fa-inverse"></i>
    </span>
    <h4 class="service-heading">
      <?php the_title(); ?>
    </h4>
    <p class="text-muted">
      <?php the_content(); ?>
    </p>
</div>
