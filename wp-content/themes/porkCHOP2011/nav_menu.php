<?php /**/ ?><li><a href="/">home</a></li>
<li><a <?php if (is_home()) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>">blog</a></li>
<li><a <?php if (is_page('archives')) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>/archives/">archives</a></li>
<li><a href="http://amy-berg.com">portfolio*</a></li>
<li><a href="http://pork-chop.posterous.com/">posterous*</a></li>
<li><a <?php if (is_page('travels')) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>/travels/">travels</a></li>
<li><a <?php if (is_page('about')) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>/about/">about</a></li>