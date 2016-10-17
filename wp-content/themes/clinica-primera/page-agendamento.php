<?php
/**
 * 
 * Template Name: Agendamento
 * 
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

// Get ACF Field
$about_content = get_field("agendamento-aside-content");

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
			  <!-- Empty -->
			</section>
			<section id="agendamento">
				<div class="container">
					
					<div class="row">
						<div class="col-md-6">
							<?php
								while ( have_posts() ) : the_post();
									the_content();
								endwhile; // End of the loop.
							?>
						</div>
						<div class="col-md-offset-1 col-md-5">
							<aside class="aside-content">
								<div class="aside-box">
									<?php echo $about_content; ?>
								</div>
							</aside>
						</div>
					</div>
					<div class="row">
					  <div class="col-sm-12">
					    <h2 class="map-title cirkel-normal">Localização</h2>
					  </div>
					</div>
				</div>
				<div class="map-box">
				  <iframe height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=R.%20Eng.%20Carlos%20Stevenson%2C%20362%20-%20Nova%20Campinas%2C%20Campinas%20-%20SP%2C%2013092-132%2C%20Brasil&key=AIzaSyDnNiwx9f4HWnsWfPvNIBk3JEt29w6MvKk" allowfullscreen></iframe>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();