<?php
 
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
							<form role="search" method="get" id="searchform"
				    class="searchform margin-bottom-20" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				    			<div>
							        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
							        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
							        <input type="submit" id="searchsubmit"
							            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
				    			</div>
							</form>
							<div class="col-md-12 categorias">
								<h2 class="margin-bottom-20">Categorias</h2>
									<ul>
										<li class="menu-item"><a href="http://www.regiao8b.institutovidaparatodos.org.br/category/noticias/">Notícias</a>
											<li class="menu-item"><a href="http://www.regiao8b.institutovidaparatodos.org.br/category/audios-videos/">Áudios e Vídeos</a>
												<li class="menu-item"><a href="http://www.regiao8b.institutovidaparatodos.org.br/category/inscricaoaberta/">Próximos Eventos</a></li>
												<li class="menu-item sub-menu"><a href="http://www.regiao8b.institutovidaparatodos.org.br/category/audios-videos/jovemadolescente">Jovens e Adolescentes</a></li>
												 <li class="menu-item"><a href="http://www.regiao8b.institutovidaparatodos.org.br/google-calendar/">Calendário</a></li>
												       <li class="menu-item"><a href="http://www.regiao8b.institutovidaparatodos.org.br/links/">Links</a></li>
												        <li class="menu-item"><a href="http://www.regiao8b.institutovidaparatodos.org.br/converse-conosco/">Fale Conosco</a></li>

									</ul>
							</div>
							<div class="col-md-12 categorias">
								<h2 class="margin-bottom-20">Últimas Noticias</h2>
									<div class="recent-news margin-bottom-20">
				<?php
						
					$args = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => 3,'orderby' => 'date', 'order' => 'DESC',);
					
					$myposts = get_posts( $args );		
					foreach ( $myposts as $post ) : setup_postdata( $post ); 
				
				?>
				<div class="col-md-12 margin-bottom-10">
					<?php
						$post_thumb_id = get_post_thumbnail_id( $post->ID );
						$post_thumb_src = wp_get_attachment_image_src( $post_thumb_id, '200x200' );
					?>
					
						<h4><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a></h4>
						<ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> <?php $post_data = date_create($post->post_date); echo date_format($post_data, 'd/m/Y'); ?></li>
                        <?php if($com_number && $com_number > 0) : ?><li><i class="fa fa-comments"></i> <?php echo $com_number; ?></li><?php endif; ?>
						
                    
						
				
				</div>
					<?php endforeach; ?>
				</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
 
<?php get_footer(); ?>