<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Clínica_Primera
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner post-banner" data-speed="10">
			  <!-- Empty -->
			</section>
			<section id="single-post">
				<div class="container">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile; // End of the loop.
					?>
					<div class="row">
						<div class="col-xs-offset-3 col-xs-6 single-post-link">
							<a class="fill normal-btn" href="<?php echo esc_html(home_url("/agendamento")); ?>" title="Quero Agendar!">Agendar Avaliação</a>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
