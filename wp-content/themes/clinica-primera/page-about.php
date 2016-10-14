<?php
/**
 * 
 * Template Name: Quem Somos
 * 
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);
 
// Get ACF Fields
$about_content = get_field("about-content");
$about_img = get_field("about-img");

get_header(); ?>
<section class="parallax banner" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
  <!-- Empty -->
</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="about">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<?php	while ( have_posts() ) : the_post();
								the_content();
							endwhile; // End of the loop. ?>
						</div>
						<div class="col-md-offset-1 col-md-5">
							<aside class="aside-content">
								<img src="<?php echo $about_img["url"]; ?>" alt="<?php echo $about_img["alt"]; ?>">
								<div class="aside-box">
									<?php echo $about_content; ?>
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