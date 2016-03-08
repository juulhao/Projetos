<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php
		require get_template_directory() . '/rules/css.php';
		wp_head();
	?>
</head>
<?php

if( is_single() || is_page() ) :
	$is_editoria = wp_get_object_terms( $post->ID,  'editorias' );
	$term = $is_editoria[0];
else :
	$term =	$wp_query->queried_object;
endif;

$editoria_color = '';
if($term->slug != ""):
	if($term->parent != "") :
		$term = get_category( $term->parent ) ;
	endif;
	$editoria_color = ' edi-'.$term->slug;
endif;

?>
<body <?php body_class('corporate'.$editoria_color); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60087674-1', 'auto');
  ga('send', 'pageview');
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=222520191136295";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="header">
	<div class="container">
		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
		<a href="<?php bloginfo('url'); ?>/projetos-sociais/colabore/" class="doe menu-item menu-item-type-custom menu-item-object-custom"><i class="fa fa-heart"></i> Doe Agora</a>
		<a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a> 	
		<?php wp_nav_menu( array( 
			'menu' => 'main',
			'container_class' => 'header-navigation pull-right font-transform-inherit',
			'walker' => new CSS_Menu_Walker()
		) ); ?>
	</div>
</div>
<?php //get_sidebar(); ?>
<div id="content" class="main">
<div class="bg-slider" >
	<div class="titulo-page container">
		<div class="col-md-12">
			<div class="botao-doar" style="float:right">
				<a href="http://www.institutovidaparatodos.org.br/portal/projetos-sociais/colabore/" class="doe menu-item menu-item-type-custom menu-item-object-custom"><i class="fa fa-heart"></i> Doe Agora</a>
			</div>

			<div style="float:left">
					<a class="site-logo" href="http://www.institutovidaparatodos.org.br/portal/" rel="home" style="float:left">
				<img src="http://www.regiao8b.institutovidaparatodos.org.br/wp-content/themes/IVPT/imgs/logo_ivpt.png" alt="Instituto Vida para Todos">
			</a>
			</div>
			
			<div style="float:left">

						<a href="http://www.regiao8b.institutovidaparatodos.org.br" style="text-decoration:none;"><h1>Região <b>8b</b><span><br>Interior de São Paulo e Triângulo Mineiro</span></h1></a>

			</div>
			
	</div>
		
	</div>

</div>