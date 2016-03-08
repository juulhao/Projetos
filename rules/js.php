<!-- regras de JS -->
<?php #PLUGINS PARA TODAS AS PÁGINAS ?>
<!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
<?php if(is_front_page() || is_home() || is_taxonomy('editorias')) : ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
<?php endif; ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/zabuto-calendar/zabuto_calendar.min.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/zabuto-calendar/zabuto_calendar.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/zabuto-calendar/widget-event-calendar.js"
data-url="<?php bloginfo( 'siteurl' ); ?>/widget-calendar-event-ajax.php"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		Layout.init();
		Layout.initOWL();
		RevosliderInit.initRevoSlider();
		Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
		Layout.initNavScrolling();
		Layout.initTwitter();
	});
</script>