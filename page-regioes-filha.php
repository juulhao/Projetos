	<?php /*Template Name: Regiões - Filha */
get_header();

$pageID = get_the_ID();

$slider_a_imgs = array();
$slider_a_items = array();

$slider_regioes = get_post_meta( $pageID, 'slider_regioes', true );
$destaques_regioes = get_post_meta( $pageID, 'destaques_regioes', true );

for( $sa_img = 1 ; $sa_img <= 8 ; $sa_img++ ) :
	$slideIMG = get_post_meta( $pageID, 'slidea-'.$sa_img.'-img', true );
	if($slideIMG != "") :
		array_push( $slider_a_imgs , $slideIMG );
		array_push( $slider_a_items , $sa_img );
	endif;
endfor;

?>

<div class="main">
	<div class="container">
         
        <!-- ULTIMAS -->
		<div class="row home-dest recent-work margin-bottom-40">
			<div class="col-md-12 col-sm-12" style="margin-bottom:20px;">
			<!-- IMPORTANDO MENU REGIOES 8B -->
			<?php get_template_part('include/menu-regioes-8b'); ?>		
       		</div>
        	
			<div class="col-md-6">
				<h2 class="margin-bottom-20">Destaques</h2>
				
					<?php masterslider(2); ?>
				
			</div>
			<div class="col-md-6 recent-news mix-block margin-bottom-10">
				<form role="search" method="get" id="searchform"
				    class="searchform margin-bottom-20" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				    <div>
				        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
				        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
				        <input type="submit" id="searchsubmit"
				            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
				    </div>
				</form>
				<h2 class="margin-bottom-20">Últimas Notícias</h2>
				<div class="recent-news margin-bottom-20">
				<?php
						
					$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 3);
					
					$myposts = get_posts( $args );		
					foreach ( $myposts as $post ) : setup_postdata( $post ); 
				
				?>
				<div class="row margin-bottom-10">
					<?php
						$post_thumb_id = get_post_thumbnail_id( $post->ID );
						$post_thumb_src = wp_get_attachment_image_src( $post_thumb_id, '200x200' );
					?>
					<div class="col-md-2"> <a href="<?php get_the_permalink( $post->ID ); ?>"><img class="img-responsive img-square" alt="" src="<?php echo $post_thumb_src[0]; ?>" /></a></div>
					<div class="col-md-10 recent-news-inner">
						<h3><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a></h3>
						<ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> <?php $post_data = date_create($post->post_date); echo date_format($post_data, 'd/m/Y'); ?></li>
                        <?php if($com_number && $com_number > 0) : ?><li><i class="fa fa-comments"></i> <?php echo $com_number; ?></li><?php endif; ?>
                    </ul>
						
					</div>
				</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
        
		<hr></hr>
        
		
		<!-- ÚLTIMAS -->
		<div class="blog-posts row margin-bottom-60">
			<!-- <h2 class="margin-bottom-20">Veja mais</h2> -->
			<?php
				query_posts( 'p=1750' );
				while (have_posts()) : the_post();
					$com_number = get_comments_number( $post->ID );
					$post_thumb_id = get_post_thumbnail_id( $post->ID );
					$post_thumb_src = wp_get_attachment_image_src( $post_thumb_id, '100x100' );
            ?>
                
			<?php endwhile; wp_reset_postdata(); ?>
			<?php
				$args = array( 'posts_per_page' => 8, 'category_name' => 'veja-mais' );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post );
					$com_number = get_comments_number( $post->ID );
					$post_thumb_id = get_post_thumbnail_id( $post->ID );
					$post_thumb_src = wp_get_attachment_image_src( $post_thumb_id, '100x100' );
			?>

                <div class="col-md-3">
                	<!-- linha comentada -->
                    <a href="<?php echo get_permalink( $ultima->ID ); ?>" title="<?php echo $post->post_title; ?>"><img class="teste-image" src="<?php echo $post_thumb_src[0]; ?>"></a>
                    <h2><a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a></h2>
                    <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> <?php $post_data = date_create($post->post_date); echo date_format($post_data, 'd/m/Y'); ?></li>
                        <?php if($com_number && $com_number > 0) : ?><li><i class="fa fa-comments"></i> <?php echo $com_number; ?></li><?php endif; ?>
                    </ul>
                    <?php the_excerpt(); ?>
                </div>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
       
		
	</div>
</div>
<?php get_footer(); ?>