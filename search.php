<?php get_header(); ?>
<div class="col-lg-7 col-sm-7 col-md-7">
	<main role="main">
		<!-- section -->
		<section>

			<strong class="loop-title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></strong>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

</div>