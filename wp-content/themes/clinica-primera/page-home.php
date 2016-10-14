<?php
/**
 * 
 * Template Name: Home
 * 
 */
 
// Get ACF Fields

// Aside Title
$tratamentos_title = get_field("tratamentos-title");

// Corporal informations
$corporais_text = get_field("corporal-text");
$corporais_img = get_field("corporal-img");
$corporais_link_title = get_field("corporal-link-title");
$corporais_link_url = get_field("corporal-link-url");

// Facial informations
$faciais_text = get_field("facial-text");
$faciais_img = get_field("facial-img");
$faciais_link_title = get_field("facial-link-title");
$faciais_link_url = get_field("facial-link-url");

// Parallax Text
$parallax_text = get_field("parallax-text");
$parallax_img = get_field("parallax-img");

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
							<aside class="aside-content">
								<h2 class="cirkel-normal"><?php echo $tratamentos_title; ?></h2>
								<div class="aside-box">
									<?php echo $corporais_text; ?>
									<a href="<?php echo $corporais_link_url; ?>" title="<?php echo $corporais_link_title; ?>"><img src="<?php echo $corporais_img["url"]; ?>" alt="<?php echo $corporais_img["alt"]; ?>"></a>
								</div>
								<div class="aside-box">
									<?php echo $faciais_text; ?>
									<a href="<?php echo $faciais_link_url; ?>" title="<?php echo $faciais_link_title; ?>"><img src="<?php echo $faciais_img["url"]; ?>" alt="<?php echo $faciais_img["alt"]; ?>"></a>
								</div>
							</aside>
						</div>
					</div>
				</div>
				<div id="home-parallax" class="parallax" data-speed="10" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(<?php echo $parallax_img["url"]; ?>) no-repeat center 0;">
					<h2 class="cirkel-light parallax-title"><?php echo $parallax_text; ?></h2>
				</div>
				<div class="instagram-feed-wrapper">
					<div class="container">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();