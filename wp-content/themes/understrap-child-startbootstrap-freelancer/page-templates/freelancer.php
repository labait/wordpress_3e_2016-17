<?php
/**
 * Template Name: Freelancer
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$upload_dir = wp_upload_dir()['baseurl'];
?>


<?php if(FALSE): ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'loop-templates/content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>
<?php endif; ?>

<!-- Portfolio Grid Section -->
<section id="portfolio">
		<div class="container">
				<h2 class="text-center">Portfolio</h2>
				<hr class="star-primary">
				<div class="row">
					<?php
						$args = array(
							 'post_type' => 'work',
							 'orderby' => 'rand'
					 );
					 $query = new WP_Query( $args );
					?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php get_template_part( 'loop-templates/content', 'work' ); ?>
					<?php
						endwhile; // end of the loop.
						wp_reset_query();
					?>
				</div>
		</div>
</section>


<!-- SECTIONS -->
<?php
	$args = array('post_type' => 'section');
 $query = new WP_Query( $args );
?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	<?php get_template_part( 'loop-templates/content', 'section' ); ?>
<?php
	endwhile; // end of the loop.
	wp_reset_query();
?>




<!-- Contact Section -->
<section id="contact">
		<div class="container">
				<h2 class="text-center">Contact Me</h2>
				<hr class="star-primary">
				<div class="row">
						<div class="col-lg-8 offset-lg-2">
								<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
								<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
								<form name="sentMessage" id="contactForm" novalidate>
										<div class="control-group">
												<div class="form-group floating-label-form-group controls">
														<label>Name</label>
														<input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
														<p class="help-block text-danger"></p>
												</div>
										</div>
										<div class="control-group">
												<div class="form-group floating-label-form-group controls">
														<label>Email Address</label>
														<input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
														<p class="help-block text-danger"></p>
												</div>
										</div>
										<div class="control-group">
												<div class="form-group floating-label-form-group controls">
														<label>Phone Number</label>
														<input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
														<p class="help-block text-danger"></p>
												</div>
										</div>
										<div class="control-group">
												<div class="form-group floating-label-form-group controls">
														<label>Message</label>
														<textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
														<p class="help-block text-danger"></p>
												</div>
										</div>
										<br>
										<div id="success"></div>
										<div class="form-group">
												<button type="submit" class="btn btn-success btn-lg">Send</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</section>


<!-- MODALS -->
<?php
	$args = array('post_type' => 'work');
 $query = new WP_Query( $args );
?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	<?php get_template_part( 'loop-templates/modal', 'work' ); ?>
<?php
	endwhile; // end of the loop.
	wp_reset_query();
?>

<?php get_footer(); ?>
