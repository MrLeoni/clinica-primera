<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clínica_Primera
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="archive">
				<div class="container">
					<div class="row">
						
						<?php
						if ( have_posts() ) : ?>
							<header class="page-header">
								<?php	the_archive_title( '<h1 class="cirkel-normal page-title">', '</h1>' ); ?>
							</header><!-- .page-header -->
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
