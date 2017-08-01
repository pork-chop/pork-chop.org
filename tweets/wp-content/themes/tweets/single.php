<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweet -->
<div id="tweet">

<?php while (have_posts()) : the_post(); ?>

  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content(); ?>
    </div>
    <p class="meta"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('g:ia j M Y') ?></a> <?php edit_post_link('edit', '', ''); ?></p>
  </div>

<?php endwhile; ?>
</div>
<!-- END #tweet -->

<div class="pagination">
  <div class="older"><?php previous_post_link('%link', '&laquo; Previous tweet') ?></div>
  <div class="newer"><?php next_post_link('%link', 'Next tweet &raquo;') ?></div>
</div>


<?php else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
