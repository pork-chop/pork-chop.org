<?php /**/ ?><!doctype html>
<html lang="en">

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Copyright" content="Copyright (C) 2004-2011 Amy E. Berg" />

	<title><?php if (is_home()) { bloginfo('description'); } else { wp_title('',true); } ?> &#8212; <?php bloginfo('name'); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom.css" type="text/css" media="screen" />
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie7.css" />
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

<script type="text/javascript" src="http://widgets.klout.com/public/scripts/widget_hover.js"></script>
</head>
<body class="custom">

<div id="header">
	<div id="logo">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<?php if (is_home()) { ?>
		<h1><?php bloginfo('description'); ?></h1>
		<?php } else { ?>	
		<p id="tagline"><?php bloginfo('description'); ?></p>
		<?php } ?>
	</div>
</div>
	
<div id="container">
	<div id="nav">
		<ul>
			<?php include (TEMPLATEPATH . '/nav_menu.php'); ?>
		</ul>
	</div>