<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

$is_editoria = wp_get_object_terms( $post->ID,  'editorias' );
$term = $is_editoria[0];

?>

	<div id="primary" class="container">
		       <!-- ULTIMAS -->
		<div class="row home-dest recent-work ">
			<div class="col-md-12 col-sm-12" style="margin-bottom:20px;">
			<!-- IMPORTANDO MENU REGIOES 8B -->
			<?php get_template_part('include/menu-regioes-8b'); ?>		
       		</div>
        	
		
		</div>



		<ul class="breadcrumb">
			<li><a href="<?php bloginfo('url'); ?>">Regiao 8B</a></li>
			<li><a href="<?php bloginfo('url'); ?>?editorias=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
		</ul>
		<main id="main" class="row margin-bottom-40" role="main">
			<div class="col-md-12 col-sm-12">
				<div class="content-page">
					<div class="row">
						<div class="col-md-9 col-sm-9 blog-item">

						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
				
							// Include the page content template.
							get_template_part( 'content', 'page' );
				
						// End the loop.
						endwhile;
						?>
						</div>
						<div class="col-md-3 col-sm-3 blog-sidebar">
							<?php
								(is_page('ceape-nas-ferias')) ? $sidebarTPL = 'ceape-nas-ferias' : $sidebarTPL = '';
								get_sidebar($sidebarTPL);
							?>
						</div>
					</div>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
