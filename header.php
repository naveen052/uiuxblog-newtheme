<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<?php wp_head(); ?>
	</head>
	<body>
		
		<div class="col-lg-5  col-md-5 col-sm-5">
			<!-- header -->
			<header class="header" role="banner">
				
				<div class="header-content">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
						   <img src="https://s3.amazonaws.com/uiuxblog/uploads/2014/11/uiuxblog.png" alt="Logo">
						</a>
					</div>
					<!-- /logo -->
					<div class="desc">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ex sit optio recusandae. Quos eius tempora labore vitae doloribus vel nemo. Obcaecati rerum, odio amet accusamus voluptates suscipit error ab.
						</p>
					</div>
					<!-- nav -->
					
					<!-- /nav -->
					<div class="side-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</header>
			<!-- /header -->
		</div>
<div class="btn-group">
						<nav class="nav" role="navigation">
  							<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="fa fa-bars"></span></a>
							<?php html5blank_nav(); ?>
						</nav>
					</div>