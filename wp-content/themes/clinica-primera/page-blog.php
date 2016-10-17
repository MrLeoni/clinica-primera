<?php
/**
 * 
 * Template Name: Blog
 * 
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

/*------------------------------------------------------------------------------
Building Custom Query
------------------------------------------------------------------------------*/

/**
 * Creating a method to get a category and use it
 * as a argument to query posts.
 * 
 * The user will chose the category, write the NAME of that category on a ACF Field,
 * and then we will use it as a parameter to query posts.
 * 
 * He can chose one category of any categories (in normal "Post" postype), 
 * present in WordPress database.
 * 
 * OR
 * 
 * He can leave it in blank. This way ALL posts will be displayed
 */

// Get category name from ACF Field
$chosen_cat = get_field("blog-cat");

// IF $chosen_cat is has a category, it will get that category ID.
// ELSE will return null.
if($chosen_cat !== null)	{
	
	// Get the ID of the chosen category
	$blog_cat = get_cat_ID("$chosen_cat");
	
	
} else {
	
	// If chosen category is empty, return null.
	$blog_cat = null;
	
}

// Now will get the result of the IF statment and use as a "cat" parameter.
$blog_args = array(
	"cat"	=> "$blog_cat",
	"posts_per_page" => 999,
);
// Querying posts from $blog_args
$blog_query = new WP_Query( $blog_args );

/*------------------------------------------------------------------------------
------------------------------------------------------------------------------*/

// Get ACF Fields for posts Links
$link_name = get_field("post-link-name");
$link_title = get_field("post-link-title");
$link_url = get_field("post-link-url");

get_header(); ?>

	<section class="parallax banner" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
	  <!-- Empty -->
	</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="blog">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 pre-posts">
							<?php // Page content Loop
							while ( have_posts() ) : the_post();
								the_content();
							endwhile; // End of the loop.
							?>
						</div>
					</div>
					
					<div class="row">
						<?php // Custom query Loop
							while($blog_query->have_posts()): $blog_query->the_post(); ?>
								<div class="col-xs-6 col-sm-6 col-lg-3">
									<div class="post-wrapper">
										<div class="post-content">
											<?php
												the_title('<p><b>', '</b></p>');
												the_content();
											?>
										</div>
										<a class="post-link fill normal-btn" href="<?php echo $link_url; ?>" title="<?php echo $link_title; ?>"><?php echo $link_name; ?></a>
									</div>
								</div>
							<?php
							// End Custom Loop
							endwhile;
							// Reset Post Data
							wp_reset_postdata();
						?>
					</div>
					
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();