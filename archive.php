<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="container">
			       <!-- ULTIMAS -->
		<div class="row home-dest recent-work ">
			<div class="col-md-12 col-sm-12" style="margin-bottom:20px;">
			<!-- IMPORTANDO MENU REGIOES 8B -->
			<?php get_template_part('include/menu-regioes-8b'); ?>		
       		</div>
		</div>

		<ul class="breadcrumb">
			<li><a href="<?php bloginfo('url'); ?>">Região 8B</a></li>
			<li><a href="<?php bloginfo('url'); ?>?editorias=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
		</ul>
		
		<main id="main" class="row margin-bottom-40" role="main">

			<div class="col-md-12 col-sm-12">
				<div class="content-page">
					<div class="row">
						<div class="col-md-9 col-sm-9 blog-posts">
							
						<?php if ( have_posts() ) : ?>
							<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();
				
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
				
							// End the loop.
							endwhile;
				
							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
								'next_text'          => __( 'Next page', 'twentyfifteen' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
							) );
				
						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'content', 'none' );
				
						endif;
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
