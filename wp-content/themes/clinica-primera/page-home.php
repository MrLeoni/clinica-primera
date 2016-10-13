<?php
/**
 * 
 * Template Name: Home
 * 
 */
 
// Get ACF Fields
$tratamentos_title = get_field("tratamentos-title");

$corporais_text = get_field("corporal-text");
$corporais_img = get_field("corporal-img");
$corporais_link_title = get_field("corporal-link-title");
$corporais_link_url = get_field("corporal-link-url");
 
$faciais_text = get_field("facial-text");
$faciais_img = get_field("facial-img");
$faciais_link_title = get_field("facial-link-title");
$faciais_link_url = get_field("facial-link-url");

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="home">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<?php
							while ( have_posts() ) : the_post();
								the_content();
							endwhile; // End of the loop.
							?>
						</div>
						<div class="col-md-offset-1 col-md-4">
							<aside class="tratamentos">
								<h2 class="cirkel-normal"><?php echo $tratamentos_title; ?></h2>
								<div class="tratamento-box">
									<?php echo $corporais_text; ?>
									<a href="<?php echo $corporais_link_url; ?>" title="<?php echo $corporais_link_title; ?>"><img src="<?php echo $corporais_img["url"]; ?>" alt="<?php echo $corporais_img["alt"]; ?>"></a>
								</div>
								<div class="tratamento-box">
									<?php echo $faciais_text; ?>
									<a href="<?php echo $faciais_link_url; ?>" title="<?php echo $faciais_link_title; ?>"><img src="<?php echo $faciais_img["url"]; ?>" alt="<?php echo $faciais_img["alt"]; ?>"></a>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();