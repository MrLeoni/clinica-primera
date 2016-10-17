<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clínica_Primera
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="index">
				<div class="container">
					<div class="row">
						<?php
						if ( have_posts() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
							<?php /* Start the Loop */
							while ( have_posts() ) : the_post(); ?>
								<div class="col-xs-6 col-sm-6 col-lg-3">
									<div class="post-wrapper">
										<div class="post-content">
											<?php
												the_title('<p><b>', '</b></p>');
												the_content();
											?>
										</div>
									</div>
								</div>
							<?php endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; ?>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
