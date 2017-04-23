<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<h1>Ciao


				</h1>

				<main class="site-main" id="main" role="main">

					<? $query = new WP_Query( array( 'post_type' => 'work' ) );?>

					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<?php //get_template_part( 'loop-templates/content', 'page' ); ?>
						<div class="work">
							<h2><?php  the_title(); ?></h2>

							<div class="content">
									<?php  the_content(); ?>
							</div>

						</div>
						<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
