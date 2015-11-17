<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title('-', true, 'left'); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=1">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<header id="header" class="masthead">
			<div id="nav" class="container">
				<div class="row">
					<?php $mods = get_field('menu', 22); ?>
					<?php if( $mods ) : ?>
						<div class="col-xs-12 text-center">
							<?php foreach( $mods as $mod): ?>
								<span class="anchor"><a href="#<?php echo $mod->post_name; ?>"><?php echo $mod->post_title; ?></a></span>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</nav>
		</header>