<?php
/**
 * The default template for displaying content
 */
?>
<div class="row">
	<?php if(has_post_thumbnail()) : ?>
		<div class="col-md-4 col-sm-4">
			<?php
				$post_thumb_id = get_post_thumbnail_id( $post->ID );
				$post_thumb_src = wp_get_attachment_image_src( $post_thumb_id, '800x600' );
				echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'"><img src="'.$post_thumb_src[0].'" class="img-responsive" /></a>';
			?>
		</div>
		<div class="col-md-8 col-sm-8">
	<?php else: ?>
		<div class="col-md-12 col-sm-12">
	<?php endif;
		
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		
		require get_template_directory() . '/inc/metainfo.php';
		
		the_excerpt( sprintf(
			__( 'Leia mais %s', 'twentyfifteen' ),
			the_title( '', '<i class="icon-angle-right"></i> ', false )
		) );		
			
	?>
	</div>
</div>
<hr class="blog-post-sep" />