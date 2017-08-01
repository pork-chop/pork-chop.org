<div id="sidebar">

<?php get_search_form(); ?>

  <div id="nav"><div class="inner">
    <h2>Archives</h2>
    <ul>
      <li<?php if (is_home()) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/">Home (recent tweets) <span class="count">ALL</span></a></li>
    <?php $archives = wp_get_archives('type=monthly&show_post_count=1&echo=0');
          $archives = str_replace('</a>&nbsp;(', ' <span class="count">', $archives);
          $archives = str_replace(')', '</span></a>', $archives);
          echo $archives; ?>
    </ul>
  </div></div>

</div>

