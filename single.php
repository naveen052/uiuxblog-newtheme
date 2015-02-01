<?php get_header(); ?>
	<div class="col-md-7 col-sm-7 cl-lg-7">
		<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="single-post-title">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<small>
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</small>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p class="categories"><?php _e( 'Posted in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

            <div class="author-section clearfix">
           		 <figure class="author-image">
	                <a href="" class="img"><?php echo get_avatar( 'naveensingh.org@gmail.com', 90 ); ?> </a>
	            </figure>
	           <div class="col-md-12 col-lg-12 col-sm-12">
	           		<p><strong> About the author : <?php the_author(); ?> </strong></p>
		            <p>
		            	<?php the_author_description(); ?> 
		            </p>
		        </div>    
            </div>
			<?php comments_template(); ?>
		</article>
		<!-- /article -->
	<div style="margin-top:20px; padding:10px;">
		<?php get_footer(); ?>
	</div>
	<?php include_once( 'footer_scripts.php' );?>
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<?php get_footer(); ?>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

	</div>