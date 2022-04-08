<?php get_header(); ?>

<div class="content">
	
	<div class="split">
		<div class="split-left">
			<div class="stickyfill">
				<?php get_template_part('inc/highlights'); ?>
			</div>
		</div>
		<div class="split-right">
			<?php get_template_part('inc/page-title'); ?>
		</div>
	</div>

</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>