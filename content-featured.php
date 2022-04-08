<?php $format = get_post_format(); ?>

<div class="featured-post">
	
	<div class="featured-thumbnail" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('personalias-square'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-large.png<?php endif; ?>');">
		<div class="featured-thumbnail-inner">
			<div class="featured-thumbnail-meta">
				<?php the_time( get_option('date_format') ); ?>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) == 'on' ) ): ?>
					&middot; <a class="featured-thumbnail-comments" href="<?php comments_link(); ?>"><i class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?></a>
				<?php endif; ?>	
			</div>
			<h2 class="featured-thumbnail-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2><!--/.post-title-->
			<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
				<div class="featured-thumbnail-excerpt">
					<?php the_excerpt(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
</div>