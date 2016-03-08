<!-- regras de CSS -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">

<!-- GLOBAL -->          
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/css/plugins.css" rel="stylesheet">

<?php if(is_front_page() || is_home() || is_taxonomy('editorias')) : ?>
	<!-- HOME -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">

<?php endif; ?>

<?php if(is_archive() || is_taxonomy('editoria')) : ?>
	<!-- ARCHIVE || TAXONOMY -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
<?php endif; ?>

<!-- THEME -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/global/css/components.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/layout/css/style.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/layout/css/themes/blue.css" rel="stylesheet" >
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/frontend/layout/css/custom.css" rel="stylesheet">