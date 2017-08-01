<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweets -->
<div id="tweets">
<h2>Recent tweets</h2>

<?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content(); ?>
    </div>
    <p class="meta"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('g:ia M jS Y') ?></a> <?php edit_post_link('edit', '', ''); ?></p>
  </div>

<?php endwhile; ?>
</div>
<!-- END #tweets -->

<div class="pagination">
  <div class="older"><?php next_posts_link('&laquo; Older tweets') ?></div>
  <div class="newer"><?php previous_posts_link('Newer tweets &raquo;') ?></div>
</div>

<?php else : ?>

<h2>No posts found</h2>
<?php get_search_form(); ?>

<?php endif; ?>

<?php get_footer(); ?>
