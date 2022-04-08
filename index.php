<?php get_header(); ?>

<div class="content">
	
	<div class="split">
		<div class="split-left">
			<div class="stickyfill">
				<?php get_template_part('inc/featured'); ?>
			</div>
		</div>
		<div class="split-right">
			
			<?php if ( get_theme_mod('heading-enable','off') == 'on' ) : ?>
				<?php get_template_part('inc/page-title'); ?>
			<?php endif; ?>
			
			<div class="split-right-inner">
			
				<?php get_template_part('inc/front-widgets-top'); ?>
		
				<?php if ( get_theme_mod('blog-layout','blog-grid') == 'blog-grid' ) : ?>
					
					<div class="article-grid">
						<?php while ( have_posts() ): the_post(); ?>
							<?php get_template_part('content-grid'); ?>
						<?php endwhile; ?>
					</div>
					
				<?php elseif ( get_theme_mod('blog-layout','blog-grid') == 'blog-list' ) : ?>
					
					<div class="article-list">
						<?php while ( have_posts() ): the_post(); ?>
							<?php get_template_part('content-list'); ?>
						<?php endwhile; ?>
					</div>
					
				<?php else: ?>
					
					<div class="article-standard">
						<?php while ( have_posts() ): the_post(); ?>
							<?php get_template_part('content'); ?>
						<?php endwhile; ?>
					</div>
					
				<?php endif; ?>

				<?php get_template_part('inc/front-widgets-bottom'); ?>
				<?php get_template_part('inc/pagination'); ?>
			
			</div>
			
		</div>
	</div>

</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>