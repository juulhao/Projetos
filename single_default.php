<?php
/*

Single Post Template: Posts 8B

Description: This part is optional, but helpful for describing the Post Template
 */

get_header();

$is_editoria = wp_get_object_terms( $post->ID,  'editorias' );
$term = $is_editoria[0];

?>

	<div id="primary" class="container">
		<ul class="breadcrumb">
			<li><a href="<?php bloginfo('url'); ?>">Instituto Vida para Todos</a></li>
			<li><a href="<?php bloginfo('url'); ?>?editorias=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
		</ul>

		<!-- IMPORTANDO MENU REGIOES 8B -->
		<?php get_template_part('include/menu-regioes-8b'); ?>		
       	<div class="margin-bottom-40"></div>
		<main id="main" class="row margin-bottom-40" role="main">
			<div class="col-md-12 col-sm-12">
				<div class="content-page">
					<div class="row">
						<div class="col-md-9 col-sm-9 blog-item">
						
						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
				
							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( !in_category('frases') && ( comments_open() || get_comments_number() ) ) :

								comments_template();
							endif;
				
							
				
						// End the loop.
						endwhile;
						?>

						</div>
						<div class="col-md-3 col-sm-3 blog-sidebar">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
