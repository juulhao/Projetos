<div id="primary" class="container">
	<ul class="breadcrumb">
		<li><a href="<?php bloginfo('url'); ?>">Instituto Vida para Todos</a></li>
		<li><a href="<?php bloginfo('url'); ?>?editorias=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
		<li class="active">Home</li>
	</ul>
	<main id="main" class="row margin-bottom-40" role="main">
		<div class="col-md-12 col-sm-12 recent-work">
			<div class="content-page">
				<div class="row">
					<div class="col-md-6">
						<div class="owl-carousel owl-carousel1">
						<?php
							$args = array( 'posts_per_page' => 8, 'category_name' => 'colportagem-home' );
							$ceape_slider = get_posts( $args );
							foreach ( $ceape_slider as $post ) : setup_postdata( $post ); 
								$ceape_slider_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '800x600' );
								$ceape_slider_thumb_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '200x200' );
							
								$thisPost = '<div class="recent-work-item"> <em> <img src="'.$ceape_slider_src[0].'" alt="'.get_the_title().'" class="img-responsive">';
								$thisPost .= '<a href="'.get_the_permalink().'"><i class="fa fa-link"></i></a>';
								$thisPost .= '<a href="'.$ceape_slider_src[0].'" class="fancybox-button" title="'.get_the_title().'"><i class="fa fa-search"></i></a> </em> <a class="recent-work-description" href="'.get_the_permalink().'"> <strong>'.get_the_title().'</strong></a> </div>'; 
								echo $thisPost;
							endforeach;
							wp_reset_postdata();
						?>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 testimonials-v1">
						<h2 class="no-top-space">Histórias e Depoimentos</h2>
						<?php
							$args = array( 'posts_per_page' => 3, 'category' => 293, 'orderby' => 'rand' );
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="item margin-bottom-20">
								<blockquote>
									<p><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
								</blockquote>
								<div class="carousel-info"> <?php the_title(); ?> </div>
							</div>
							<?php endforeach; 
							wp_reset_postdata();
						?>
					</div>
				</div>
				<hr class="blog-post-sep" />
				<div class="row">
					<div class="col-md-6 col-sm-1">
						<h2>Últimas de <strong><?php echo $term->name; ?></strong></h2>
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
					// pega as frases
					global $wp_query;
					$args = array_merge( $wp_query->query_vars,
						array( 'post_type' => 'post', 'category_name' => 'destaques', 'posts_per_page' => 2 )
					);
					query_posts( $args );
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					
					// pega os demais posts
					query_posts( $query_string . '&post_type=post&cat=-24&posts_per_page=5&category_name=home-ultimas-colportagem' );
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					wp_reset_query();
				?>
				
			</div>
		</div>
	</main>
	<!-- .site-main --> 
</div>
<!-- .content-area -->