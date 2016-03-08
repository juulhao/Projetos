<?php
 
get_header(); ?>
 
        	<div id="primary" class="container">
		<ul class="breadcrumb">
			<li><a href="<?php bloginfo('url'); ?>">Instituto Vida para Todos</a></li>
			<li class="active"><?php the_archive_title(); ?></li>
		</ul>
		<main id="main" class="row margin-bottom-40" role="main">
			<div class="col-md-12 col-sm-12">
				<div class="content-page">
				
					<div class="row">
						<?php get_template_part('include/menu-regioes-8b'); ?>
						<div class="margin-bottom-50"></div>
						<div class="col-md-7 col-sm-9 blog-posts">
						
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
						<div class="col-md-4 col-sm-12">
							<div class="fb-page" data-href="https://www.facebook.com/ezrama.eav/?fref=ts" data-height="285" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" data-width="370"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/institutovidaparatodos"><a href="https://www.facebook.com/institutovidaparatodos">Instituto Vida para Todos</a></blockquote></div></div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
 
<?php get_footer(); ?>