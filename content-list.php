<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="type-list-inner <?php if ( has_post_thumbnail() ): ?>has-thumbnail<?php endif; ?>">
	
	<?php if ( has_post_thumbnail() ): ?>
		<div class="type-list-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('personalias-small'); ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
			</a>
		</div>
	<?php endif; ?>
	
	
		<h2 class="type-list-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="type-list-meta">
			<?php the_time( get_option('date_format') ); ?>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) == 'on' ) ): ?>
				&middot; <a class="type-list-comments" href="<?php comments_link(); ?>"><i class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?></a>
			<?php endif; ?>	
		</div>
		<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
			<div class="type-list-excerpt">
				<?php the_excerpt(); ?>
			</div>
			<div class="clear"></div>
		<?php endif; ?>
	</div>
	
</article>