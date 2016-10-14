<?php
/**
 * 
 * Template Name: Contato
 * 
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

// Creating $faq_args to query "FAQ" taxonomy term inside "Complementos" post type.
$faq_args = array(
	"post_type" => "complementos",
	"posts_per_page" => 999,
	"tax_query" => array(array(
		"taxonomy" => "categoria",
		"field" => "slug",
		"terms" => "faq",
	)),
);

// Querying FAQ posts in $faq_query with $faq_args
$faq_query = new WP_Query( $faq_args );

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
			  <!-- Empty -->
			</section>
			<section id="contact">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12">
							<?php
								while ( have_posts() ) : the_post();
									the_content();
								endwhile; // End of the loop.
							?>
						</div>
					</div>
					<?php if($faq_query->have_posts()): ?>
						<div class="row faq">
							<div class="col-md-12">
								<h2 class="cirkel-normal">Perguntas Frequentes</h2>
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<?php
									/**
									 * Creating a variable for use as ID on .panel-heading element
									 * And apply this variable in every 'must have' single attribute
									 * We will iterate this variable in the ending of the Loop
									 */
									$number = 1;
									// Starting the "FAQ" Loop
									while($faq_query->have_posts()): $faq_query->the_post(); ?>
										<div class="panel panel-default">
											 <div class="panel-heading" role="tab" id="heading-<?php echo $number; ?>">
												<h4 class="panel-title">
													<a class="fill" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $number; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $number; ?>"><?php the_title(); ?></a>
												</h4>
											</div>
											<div id="collapse-<?php echo $number; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $number; ?>">
												<div class="panel-body">
													<?php the_content(); ?>
												</div>
											</div>
										</div>
									<?php
									// Iterating variable
									$number++;
									// End of "FAQ" Loop
									endwhile;
									// Reseting post data, a good practice in custom loops
									wp_reset_postdata();
								?>
								</div>
							</div>
						</div>
					<?php
					else:
						// Empty
					endif; ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();