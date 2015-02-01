<?php get_header(); ?>
<div class="col-lg-7 col-sm-7 col-md-7">
	<main role="main">
		<!-- section -->
		<section>

			<strong class="loop-title"><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></strong>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>