<?php
/**
 * Template part for displaying home page slider.
 * @package Clínica_Primera
 */
 
// Creating $slider_args to query "Home Banner" taxonomy term inside "Complementos" post type.
$slider_args = array(
	"post_type" => "complementos",
	"posts_per_page" => 999,
	"orderby" => "modified",
	"tax_query" => array(array(
		"taxonomy" => "categoria",
		"field" => "slug",
		"terms" => "home-banner",
	)),
);

// Querying slider posts in $slider_query with $slider_args
$slider_query = new WP_Query( $slider_args );

?>

<?php if($slider_query->have_posts()): ?>
<div class="slider-custom-wrapper">
  <ul class="home-slider">
    <?php // Creating Loop for show Slider posts
      while($slider_query->have_posts()): $slider_query->the_post(); ?>
        <li>
          <?php the_post_thumbnail("full"); ?>
          <div class="slider-content-box">
            <div class="container">
              <?php the_content(); ?>
            </div>
          </div>
        </li>
      <?php
      // End of Loop
      endwhile;
      // Reset post data, must have at the end of custom loops.
      wp_reset_postdata();
    ?>
  </ul>
  <div class="custom-pager-box">
    <div class="container">
      <div class="custom-pager">
        <?php // Creating Loop for show Slider posts
          $pager_index = 0;
          while($slider_query->have_posts()): $slider_query->the_post(); ?>
            <a class="pager-item" data-slide-index="<?php echo $pager_index; ?>" href=""><span></span></a>
          <?php
          $pager_index++;
          // End of Loop
          endwhile;
          // Reset post data, must have at the end of custom loops.
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>
<?php
else:
  echo '<div class="ghost"><!-- Boo! --></div>';
endif;
?>

