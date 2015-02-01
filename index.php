<?php get_header(); ?>

	<div class="col-lg-7">
		<main role="main">
			<!-- section -->
			<section>
				<strong class="loop-title"><?php _e( 'Latest Posts', 'html5blank' ); ?></strong>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?> 
</div>