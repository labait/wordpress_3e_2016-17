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
						<div class="col-sm-4 portfolio-item">
								<div class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x"></i>
												</div>
										</div>
										<img class="img-fluid" src="<?php echo $upload_dir; ?>/portfolio/cabin.png" alt="">
								</div>
						</div>
						<div class="col-sm-4 portfolio-item">
								<div class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x"></i>
												</div>
										</div>
										<img class="img-fluid" src="<?php echo $upload_dir; ?>/portfolio/cake.png" alt="">
								</div>
						</div>
						<div class="col-sm-4 portfolio-item">
								<div class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x"></i>
												</div>
										</div>
										<img class="img-fluid" src="<?php echo $upload_dir; ?>/portfolio/circus.png" alt="">
								</div>
						</div>
						<div class="col-sm-4 portfolio-item">
								<div class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x"></i>
												</div>
										</div>
										<img class="img-fluid" src="<?php echo $upload_dir; ?>/portfolio/game.png" alt="">
								</div>
						</div>
						<div class="col-sm-4 portfolio-item">
								<div class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x"></i>
												</div>
										</div>
										<img class="img-fluid" src="<?php echo $upload_dir; ?>/portfolio/safe.png" alt="">
								</div>
						</div>
						<div class="col-sm-4 portfolio-item">
								<div class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x"></i>
												</div>
										</div>
										<img class="img-fluid" src="<?php echo $upload_dir; ?>/portfolio/submarine.png" alt="">
								</div>
						</div>
				</div>
		</div>
</section>

<!-- About Section -->
<section class="success" id="about">
		<div class="container">
				<h2 class="text-center">About</h2>
				<hr class="star-light">
				<div class="row">
						<div class="col-lg-4 offset-lg-2">
								<p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
						</div>
						<div class="col-lg-4">
								<p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
						</div>
						<div class="col-lg-8 offset-lg-2 text-center">
								<a href="#" class="btn btn-lg btn-outline">
										<i class="fa fa-download"></i> Download Theme
								</a>
						</div>
				</div>
		</div>
</section>

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

<?php get_footer(); ?>
