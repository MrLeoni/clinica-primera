<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Clínica_Primera
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title cirkel-light"><?php esc_html_e( '404', 'clinica-primera' ); ?></h1>
				</header><!-- .page-header -->
				<div class="container">
					<div class="row">
						<div class="page-content">
							<p><?php esc_html_e( 'Parece que você acabou se perdendo, a página que você está tentando acessar não existe.', 'clinica-primera' ); ?></p>
							<p>Deseja voltar para a <a href="<?php echo esc_html(home_url("/")); ?>" title="Vamos lá!">Home</a>? Ou você pode navegar para a página que desejar utilizando o menu no topo do site</p>
						</div><!-- .page-content -->
					</div>
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
