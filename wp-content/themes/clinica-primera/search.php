<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Clínica_Primera
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="search">
				<div class="container">
					<div class="row">
						
						<?php
						if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Resultados para: %s', 'clinica-primera' ), '<span class="cirkle-normal">' . get_search_query() . '</span>' ); ?></h1>
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
	</section><!-- #primary -->

<?php
get_footer();
