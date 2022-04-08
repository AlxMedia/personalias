<?php get_header(); ?>

<div class="content">
	
	<div class="split">
		<div class="split-left">
			<div class="stickyfill">
				<div class="split-image" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('personalias-squarex'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-large.png<?php endif; ?>');"></div>
			</div>
		</div>
		<div class="split-right">
	
			<?php while ( have_posts() ): the_post(); ?>
			
			<article <?php post_class(); ?>>	
				
				<div class="post-wrapper group">
					<header class="entry-header group">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					
					<div class="entry-content">
						<div class="entry themeform">
							<?php the_content(); ?>
							<div class="clear"></div>
						</div><!--/.entry-->
					</div>
					<div class="entry-footer group">
						<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
					</div>
				</div>

			</article><!--/.post-->	
			
			<?php endwhile; ?>
	
		</div>
	</div>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>