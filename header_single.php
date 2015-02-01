<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		
		<div class="col-lg-5">
			<!-- header -->
			<header class="header" role="banner">
				
				<div class="header-content">
					<!-- logo -->
					<div class="logo-2">
						<a href="<?php echo home_url(); ?>">
						   <img src="https://s3.amazonaws.com/uiuxblog/uploads/2014/11/uiuxblog.png" alt="Logo">
						</a>
					</div>
					<!-- /logo -->
					
					<!-- nav -->
					<div class="navigation">
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
					</div>
					<!-- /nav -->
					<div class="side-sidebar">
						<?php get_sidebar(); ?>
						<?php get_footer(); ?>

					</div>
				</div>

			</header>
			<!-- /header -->
		</div>
