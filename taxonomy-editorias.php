<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

$term =	$wp_query->queried_object;

switch($term->slug):
	case 'bookafe'; $editoria_tpl = 'bookafe'; break;
	case 'ceape'; $editoria_tpl = 'ceape'; break;
	case 'colportagem'; $editoria_tpl = 'colportagem'; break;
	case 'corpo-de-cristo'; $editoria_tpl = 'corpo-de-cristo'; break;
	case 'dong-yu-lan'; $editoria_tpl = 'dong-yu-lan'; break;
	case 'projetos-sociais'; $editoria_tpl = 'projetos-sociais'; break;
	default: $editoria_tpl = 'geral';
endswitch;

require get_template_directory() . '/editorias/'.$editoria_tpl.'.php';

get_footer();

?>
