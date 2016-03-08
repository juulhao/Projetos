<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
</div>

<!-- BEGIN PRE-FOOTER -->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 padding-top-10"> &copy; 2014 - Instituto Vida Para Todos </div>
			<div class="col-md-6 col-sm-6">
				<ul class="social-footer list-unstyled list-inline pull-right">
					<li><a href="//www.facebook.com/institutovidaparatodos" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="//plus.google.com/u/0/+InstitutoVidaParaTodos/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="//instagram.com/instituto_vida_para_todos/" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="//twitter.com/ivparatodos" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="//www.youtube.com/channel/UCJixr8IeBYIihEwI36_OUvw" target="_blank"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
	wp_footer();
	require get_template_directory() . '/rules/js.php';
?>
</body></html>