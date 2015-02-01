<?php get_header(); ?>
<div class="col-lg-7  col-md-7 col-sm-7">
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<strong class="loop-title"><?php _e( 'Page not found', 'html5blank' ); ?></strong>
				<strong class="loop-title">
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</strong>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>
	
<?php get_footer(); ?>

</div>
<?php include_once( 'footer_scripts.php' );?>