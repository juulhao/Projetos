<div id="primary" class="container">
	<ul class="breadcrumb">
		<li><a href="<?php bloginfo('url'); ?>">Instituto Vida para Todos</a></li>
		<li><a href="<?php bloginfo('url'); ?>?editorias=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
		<li class="active">Home</li>
	</ul>
	
	<main id="main" class="row margin-bottom-40" role="main">
		<div class="col-md-12 col-sm-12">
			<div class="content-page">
				<div class="margin-bottom-40 margin-top-20 row">
					<div class="col-md-12 col-sm-12">
						<div class="fullwidthabnner fullwidthbanner-container">
							<ul id="revolutionul">
								<?php
									$args = array( 'posts_per_page' => 8, 'category_name' => 'bookafe-home' );
									$bookafe_slider = get_posts( $args );
									foreach ( $bookafe_slider as $post ) : setup_postdata( $post ); 
										$bookafe_slider_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '1670x420' );
										$bookafe_slider_thumb_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '200x200' );
										
										$thisPost = '<li data-transition="fade" data-slotamount="8" data-masterspeed="350" data-delay="4700" data-thumb="'.$bookafe_slider_thumb_src[0].'">';
										$thisPost .= '<img src="'.$bookafe_slider_src[0].'" /><a class="button-link" href="'.get_the_permalink().'">'.get_the_title().'</a>';
										$thisPost .= '</li>'; 
										echo $thisPost;
									endforeach;
									wp_reset_postdata();
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="row quote-v1 margin-bottom-30">
					<div class="col-md-9"> <span>Acesse a área restrita do BooKafé</span> </div>
					<div class="col-md-3 text-right"> <a class="btn-transparent" href="http://www.institutovidaparatodos.org.br/bookafe/login/" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Acessar</a> </div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h2>Categorias</h2>
						<div class="btn-group btn-group btn-group-justified categorias">
							<a href="<?php bloginfo('url'); ?>/categoria/bookafe/nucleo" class="btn btn-bk-nuc">Núcleo</a>
							<a href="<?php bloginfo('url'); ?>/categoria/bookafe/cafeteria" class="btn btn-bk-caf">Cafeteria</a>
							<a href="<?php bloginfo('url'); ?>/categoria/bookafe/comunidade" class="btn btn-bk-com">Comunidade</a>
							<a href="<?php bloginfo('url'); ?>/categoria/bookafe/caseiro" class="btn btn-bk-cas">Caseiro</a>
							<a href="<?php bloginfo('url'); ?>/categoria/bookafe/espaco-bookafe" class="btn btn-bk-esp">Espaço BooKafé</a>
						</div>
                	</div>
				</div>
				<hr class="blog-post-sep" />
				<div class="row">
					<div class="col-md-6 col-sm-1">
						<h2>Descubra o <strong><?php echo $term->name; ?></strong></h2>
					</div>
					<div class="col-md-6 col-sm-1">
						<form role="search" method="get" class="search-form padding-top-10" action="<?php bloginfo('url'); ?>">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<input type="search" class="form-control" placeholder="Pesquisar" value="" name="s" title="Pesquisar por:">
										<input type="hidden" value="<?php echo $term->slug; ?>" name="editoria" />
										<span class="input-group-btn">
										<input type="submit" class="btn blue" value="Pesquisar" />
										</span> </div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<hr class="blog-post-sep" />
				<?php
					// Start the loop.
					global $query_string;
					query_posts( $query_string . '&post_type=post&category_name=home-ultimas-bookafe' );
					while ( have_posts() ) : the_post();
			
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
			
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
			
						
			
					// End the loop.
					endwhile;
					wp_reset_query();
				?>
			</div>
		</div>
	</main>
	<!-- .site-main --> 
</div>
<!-- .content-area -->