<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>


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
