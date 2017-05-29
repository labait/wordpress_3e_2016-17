<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>


<?php if(false): ?>

<!-- Footer -->
	<footer class="text-center">
			<div class="footer-above">
					<div class="container">
							<div class="row">
									<div class="footer-col col-md-4">
											<h3>Location</h3>
											<p>3481 Melrose Place
													<br>Beverly Hills, CA 90210</p>
									</div>
									<div class="footer-col col-md-4">
											<h3>Around the Web</h3>
											<ul class="list-inline">
													<li class="list-inline-item">
															<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-facebook"></i></a>
													</li>
													<li class="list-inline-item">
															<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-google-plus"></i></a>
													</li>
													<li class="list-inline-item">
															<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-twitter"></i></a>
													</li>
													<li class="list-inline-item">
															<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-linkedin"></i></a>
													</li>
													<li class="list-inline-item">
															<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-dribbble"></i></a>
													</li>
											</ul>
									</div>
									<div class="footer-col col-md-4">
											<h3>About Freelancer</h3>
											<p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
									</div>
							</div>
					</div>
			</div>
			<div class="footer-below">
					<div class="container">
							<div class="row">
									<div class="col-lg-12">
											Copyright &copy; Your Website <?php print date("Y"); ?>
									</div>
							</div>
					</div>
			</div>
	</footer>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top hidden-lg-up">
			<a class="btn btn-primary page-scroll" href="#page-top">
					<i class="fa fa-chevron-up"></i>
			</a>
	</div>

	<?php wp_footer(); ?>
</body>

</html>




<?php endif; ?>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

		<?php
			$args = array('post_type' => 'work',);
			$query = new WP_Query( $args );
		?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php get_template_part( 'loop-templates/modal', 'work' ); ?>
		<?php endwhile; // end of the loop. ?>

		<!--
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>


    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/agency.min.js"></script>
		.-->

		<?php wp_footer(); ?>

</body>

</html>
