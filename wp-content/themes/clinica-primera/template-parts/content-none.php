<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clínica_Primera
 */

?>

<div class="col-md-12">
	<div class="row">
		<section class="no-results not-found">
			<header class="page-header">
				<h1 class="page-title cirkel-light"><?php esc_html_e( 'Nada encontrado por aqui', 'clinica-primera' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p>Desculpe, mas parece que não encontramos nada por aqui, que tal dar uma olhada em nossos tratamentos?</p>
				<p>Ou talvez você queira voltar para nossa <a href="<?php echo esc_html(home_url("/")); ?>" title="Vamos lá!">Home</a></p>
			</div><!-- .page-content -->
		</section><!-- .no-results -->
	</div>
</div>
