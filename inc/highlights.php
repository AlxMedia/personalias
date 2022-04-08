<?php
// Query highlight entries
$highlight = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('highlight-posts-count','1') ),
		'cat'						=> absint( get_theme_mod('highlight-category','') )
	)
);
?>

<?php if ( is_home() && ( get_theme_mod('highlight-posts-count','1') !='0') || is_single() || is_archive() || is_search() || is_404() || is_page()  ): ?>

<div class="slick-posts">

	<?php while ( $highlight->have_posts() ): $highlight->the_post(); ?>
		<div>	
			<?php get_template_part('content-featured'); ?>
		</div>
	<?php endwhile; ?>
	
</div>

<div class="slick-posts-nav"></div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>