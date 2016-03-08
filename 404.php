<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="container">
	<div class="row margin-bottom-40">
		<div class="col-md-12 col-sm-12">
			<div class="content-page page-404">
				<div class="number"> Ops! </div>
				<div class="details">
					<h3>Página não encontrada</h3>
					<p> Não encontramos a página que você procura!<br />
						<a href="<?php bloginfo('url'); ?>" class="link">Volte à página inicial</a> e tente novamente. </p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
