<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>
<body>

<div id="header">
  <div id="header2">
    <h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
    <span class="description"><?php bloginfo('description'); ?></span>
  </div>
</div>

<!-- !BEGIN #container -->
<div id="container">

<!-- !BEGIN #content -->
<div id="content">

<!-- !BEGIN #user -->
<div id="user">
  <a href="http://twitter.com/pork_chop"><img src="<?php bloginfo('template_url'); ?>/img/profile_normal.png" width="48" height="48" alt="" class="avatar" /></a>
  <div id="user-info">
    <strong id="user-fn">Amy</strong> <span id="username">@<a href="http://twitter.com/pork_chop">pork_CHOP</a></span><br />
    <span id="user-loc">Minneapolis</span> | <a href="http://pork-chop.org" id="user-url">pork-chop.org</a>
  </div>
</div>
<!-- END #user -->
