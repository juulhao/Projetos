<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>

	<?php 
	if( is_single() || is_page() ) :
		$is_editoria = wp_get_object_terms( $post->ID,  'editorias' );
		$term = $is_editoria[0];
		
	else :
		$term =	$wp_query->queried_object;
	endif;
	
	if($term->slug != ""):
		if($term->parent != "") :
			$term = get_category( $term->parent ) ;
		else :
			$term = get_category_by_slug( $term->slug ) ;
		endif;
		$editoria_ID = $term->term_id;
		$editoria_name = $term->slug;
	else :
	
	$editoria_name = '';
		
	endif;
	
	get_sidebar($editoria_name);
	
	?>
	
	