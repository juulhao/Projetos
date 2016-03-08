<?php if ( get_post_type( get_the_ID() ) == "post" ) : ?>
<ul class="blog-info">
	<li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
	<?php if ( !in_category('frases') && ( comments_open() || get_comments_number() ) ) : ?>
	<li><i class="fa fa-comments"></i>
		<?php comments_number(); ?>
	</li>
	<?php endif; ?>
	<?php if ( get_the_tags() != "" ): ?>
	<li><i class="fa fa-tags"></i>
		<?php the_tags( '', ', ', '<br />' ); ?>
	</li>
	<?php endif; ?>
</ul>
<?php endif; ?>