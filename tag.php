<?php get_header(); ?>
<div class="col-md-7 col-sm-7 cl-lg-7">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>
<?php get_footer(); ?>
<?php include_once( 'footer_scripts.php' );?>