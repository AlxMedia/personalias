<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header group">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="entry-byline">
			<?php esc_html_e('by','personalias'); ?> <?php the_author_posts_link(); ?>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) == 'on' ) ): ?>
				&middot; <a class="entry-comments" href="<?php comments_link(); ?>"><i class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?></a>
			<?php endif; ?>	
		</div>
	</header>
	
	<div class="entry-media">
		<?php if ( get_theme_mod('post-formats-enable','off') == 'on' || get_post_format() ) : ?>
			<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
		<?php else: ?>

		<?php endif; ?>
	</div>
	<div class="entry-content">
		<div class="entry themeform">	
			<?php 
				if ( is_search() ) { the_excerpt(); } 
				else the_content(esc_html__('Read More','personalias'));
			?>
			<div class="clear"></div>				
		</div><!--/.entry-->
	</div>
	
</article>