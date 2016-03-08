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
					<div class="col-md-7 col-sm-12 testimonials-v1">
						<h2>YouTube</h2>
						<?php echo do_shortcode('[embedyt]http://www.youtube.com/watch?list=PLdp1iB02l4pzsHHp3XC_fU13sbKt6gF1q&height=315[/embedyt]'); ?>
					</div>
					<div class="col-md-4 col-sm-12">
						<h2>Facebook</h2>
						<div class="fb-page" data-href="https://www.facebook.com/institutovidaparatodos" data-height="310" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" data-width="450"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/institutovidaparatodos"><a href="https://www.facebook.com/institutovidaparatodos">Instituto Vida para Todos</a></blockquote></div></div>
					</div>
				</div>
				<hr class="blog-post-sep" />
				<div class="row">
					<div class="col-md-6 col-sm-1">
						<h2>Últimas notícias do <strong><?php echo $term->name; ?></strong></h2>
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
						array( 'post_type' => 'post', 'category_name' => 'tutorial', 'posts_per_page' => 1 )
					);
					query_posts( $args );
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					
					// pega os demais posts
					query_posts( $query_string . '&post_type=post&cat=-393&posts_per_page=4' );
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