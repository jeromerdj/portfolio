<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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


			<!-- header -->
			<header class="header clear grid-container fluid" role="banner">
				<div class="row">
					<div class="col-lg-6">
						<a href="<?php echo get_the_permalink(7); ?>" class="jr"><strong>JR</strong></a>
						<!-- menu -->
						<nav class="button-menu">
							<span class="link-menu">
								 <div class="haut">
									  ME
								 </div>
								 <br>
								 <div class="bas">
									 NU
								 </div>
							</span>
						</nav>
						<section class="menu">
							<nav class="close-menu">
								<div></div>
								<div></div>
							</nav>
							<nav class="d-flex align-items-center h-100">
								<?php

									wp_nav_menu( array(
									'menu_class'     => 'nav-menu, mx-auto',
									'theme_location' => 'primary',
									) );
								 ?>
							</nav>
							<p class="signature">© 2018 - Design et développement par Jérôme Radojcic.</p>
						</section>
						<!-- /menu-->
					</div>
				</div>
			</header>
			<!-- /header -->
