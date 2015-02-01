<?php get_header(); ?>
<div class="col-lg-7  col-md-7 col-sm-7">
	<main role="main">
		<!-- section -->
		<section>

			<strong class="loop-title"><?php _e( 'Archives', 'html5blank' ); ?></strong>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>