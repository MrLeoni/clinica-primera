<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clínica_Primera
 */

?>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php get_sidebar("footer"); ?>
				</div>
				<div class="col-md-4">
					<div class="footer-links">
						<a class="footer-link-social" href="https://www.facebook.com/ClinicaPrimera" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a class="footer-link-social" href="https://www.instagram.com/clinicaprimera" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a class="footer-link-delucca" href="http://agenciadelucca.com.br/" title="Agência Delucca" target="_blank">AD</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
</div><!-- #page -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/jquery-1.12.4.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
