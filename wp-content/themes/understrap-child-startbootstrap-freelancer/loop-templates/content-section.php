<?php
  $link = get_field("link");
  $link_text = get_field("link_text");
  $link_icon_fontawesome = get_field("link_icon_fontawesome");
  //print($link);
?>

<section class="success" id="section-<?php the_id(); ?>" style="background-color: <?php print get_field("color_background"); ?>;">
		<div class="container">
				<h2 class="text-center">
          <?php the_title(); ?>
        </h2>
				<hr>
				<div class="row">
						<div class="col-lg-8 offset-lg-2">
						<?php the_content(); ?>
            <?php if(!empty($link_icon_fontawesome) && !empty($link) ): ?>
						<div class="col-lg-8 offset-lg-2 text-center">
								<a href="<?php get_field("link"); ?>" class="btn btn-lg btn-outline">
										<i class="fa <?php print $link_icon_fontawesome; ?>"></i> <?php print $link_text; ?>
								</a>
						</div>
          <?php endif; ?>
				</div>
		</div>
</section>
