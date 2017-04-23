<?php
  $upload_dir = wp_upload_dir()['baseurl'];
  $image = get_field('image');
?>

<?php if( !empty($image) ): ?>
  <div class="col-sm-4 portfolio-item">
      <div class="portfolio-link" href="#portfolioModal<?php echo the_ID(); ?>" data-toggle="modal" data-backdrop="">
          <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
          </div>
          <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
  </div>
<?php endif; ?>
