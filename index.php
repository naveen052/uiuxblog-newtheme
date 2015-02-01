<?php get_header(); ?>

	<div class="col-lg-7  col-md-7 col-sm-7">
		<main role="main">
			<!-- section -->
			<section>
				<strong class="loop-title"><?php _e( 'Latest Posts', 'html5blank' ); ?></strong>

				<?php get_template_part('loop'); ?>
				<div style="padding:10px;">
					<?php get_template_part('pagination'); ?>
				</div>
				<div style="margin-top:20px; padding:10px;">
					<?php get_footer(); ?>
				</div>
			</section>
			<!-- /section -->
		</main>

		<?php get_footer(); ?>

</div>
<?php include_once( 'footer_scripts.php' );?>