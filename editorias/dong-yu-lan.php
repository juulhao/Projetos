<div id="primary" class="container">
	<ul class="breadcrumb">
		<li><a href="<?php bloginfo('url'); ?>">Instituto Vida para Todos</a></li>
		<li><a href="<?php bloginfo('url'); ?>?editorias=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
		<li class="active">Home</li>
	</ul>
	<main id="main" class="row margin-bottom-40" role="main">
		<div class="col-md-12 col-sm-12">
			<div class="content-page">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="service-box-v1">
							<h2><a href="<?php echo get_permalink(729); ?>" title="Biografia - Dong Yu Lan">Biografia</a></h2>
							<p>No ano de 1920, na cidade de Nimbô, província de Chekiang, nascia Dong Yu Lan, aquele que mais tarde seria um importante propagador do evangelho do reino de Deus na América do Sul. Ele se tornou um homem de negócios desde muito jovem. Isso lhe deu muitas experiências humanas, espírito de empreendedorismo, ampla visão de...</p>
							<p class="button"><a href="<?php echo get_permalink(729); ?>" title="Biografia - Dong Yu Lan" class="more">Leia a biografia completa</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 testimonials-v1">
						<h2 class="no-top-space"><a href="<?php echo get_category_link(25); ?>">Histórias e Depoimentos</a></h2>
						<div id="myCarousel1" class="carousel slide"> 
							<!-- Carousel items -->
							<div class="carousel-inner">
								<div class="active item">
									<?php
										$args = array( 'posts_per_page' => 1, 'category' => 25 );
										$myposts = get_posts( $args );
										foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
											<blockquote>
												<p><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
											</blockquote>
											<div class="carousel-info"> <?php the_title(); ?> </div>
										<?php endforeach; 
										wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
						<div class="clearfix"><a href="<?php echo get_category_link(25); ?>" class="btn default green-stripe btn-block">Leia mais</a></div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="fb-page" data-href="https://www.facebook.com/pages/Dong-Yu-Lan/1409843139311487" data-height="285" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" data-width="370"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/institutovidaparatodos"><a href="https://www.facebook.com/institutovidaparatodos">Instituto Vida para Todos</a></blockquote></div></div>
					</div>
				</div>
				<hr class="blog-post-sep" />
				<div class="row">
					<div class="col-md-12 col-sm-12 frases">
						<h2><a href="<?php echo get_category_link(9); ?>">Frases</a></h2>
						<?php
							$args = array( 'posts_per_page' => 1, 'category' => 9, 'orderby' => 'rand' );
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<blockquote>
									<p><a href="<?php the_permalink(); ?>"><?php echo get_the_content(); ?></a></p>
								</blockquote>
							<?php endforeach; 
							wp_reset_postdata();
						?>
						<div class="clearfix"><a href="<?php echo get_category_link(9); ?>" class="btn default green-stripe btn-block">Leia mais</a></div>
					</div>
					
				</div>
				<hr class="blog-post-sep" />
				<div class="row">
					<div class="col-md-6 col-sm-1">
						<h2>Últimas do <strong><?php echo $term->name; ?></strong></h2>
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
						array( 'post_type' => 'post', 'category_name' => 'frases', 'posts_per_page' => 2 )
					);
					query_posts( $args );
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					
					// pega os demais posts
					query_posts( $query_string . '&post_type=post&cat=-9&posts_per_page=3&category_name=home-ultimas-dong-yu-lan' );
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