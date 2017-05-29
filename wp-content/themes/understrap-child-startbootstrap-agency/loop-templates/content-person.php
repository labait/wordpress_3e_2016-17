<?php
  $social_profile_twitter = get_field('social_profile_twitter');
  $social_profile_facebook = get_field('social_profile_facebook');
  $email = get_field('email');
  $web = get_field('web');

?>

<div class="team-member">
    <!-- <img src="<?php print $theme_dir; ?>/img/team/1.jpg" class="img-responsive img-circle" alt=""> -->
    <?php the_post_thumbnail( 'post-thumbnail', array('class' => 'img-responsive img-circle') ); ?>
    <h4>
      <?php the_title(); ?>
    </h4>
    <p class="text-muted">
      <?php the_field('qualification'); ?>
    </p>
    <ul class="list-inline social-buttons">
        <?php if(!empty($social_profile_twitter)): ?>
          <li><a target="_blank" href="<?php print $social_profile_twitter; ?>"><i class="fa fa-twitter"></i></a></li>
        <?php endif; ?>
        <?php if(!empty($social_profile_facebook)): ?>
          <li><a target="_blank" href="<?php print $social_profile_facebook; ?>"><i class="fa fa-facebook"></i></a></li>
        <?php endif; ?>
        <?php if(!empty($web)): ?>
          <li><a target="_blank" href="<?php print $web; ?>"><i class="fa fa-globe"></i></a></li>
        <?php endif; ?>
        <?php if(!empty($email)): ?>
          <li><a target="_blank" href="<?php print $email; ?>"><i class="fa fa-envelope-o"></i></a></li>
        <?php endif; ?>
    </ul>
</div>
