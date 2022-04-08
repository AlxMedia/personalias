<?php get_header(); ?>

<div class="content">
	
	<div class="split">
		<div class="split-left">
			<div class="stickyfill">
				<div class="split-image" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('personalias-squarex'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-large.png<?php endif; ?>');">
					<div class="split-single">
						
						<?php do_action( 'alx_ext_sharrre' ); ?>
						
						<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
							<div class="author-bio">
								<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
								<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
								<p class="bio-desc"><?php the_author_meta('description'); ?></p>
								<div class="clear"></div>
							</div>
						<?php endif; ?>
						
						<?php if ( get_theme_mod( 'post-nav', 'content' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="split-right">
			
			<?php get_template_part('inc/page-title'); ?>
			
			<?php while ( have_posts() ): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header group">
						<h1 class="entry-title"><?php the_title(); ?></h1>
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
							<?php the_content(); ?>
							<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','personalias'),'after'=>'</div>')); ?>
							<div class="clear"></div>				
						</div><!--/.entry-->
					</div>
					<div class="entry-footer group">
						
						<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','personalias').'</span> ','','</p>'); ?>
						
						<div class="clear"></div>
						<?php do_action( 'alx_ext_sharrre_footer' ); ?>
						
						<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
						
						<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
						
					</div>
					
				</article>
			
			<?php endwhile; ?>
	
		</div>
	</div>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>