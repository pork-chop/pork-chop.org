<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweets -->
<div id="tweets">
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a monthly archive */ if (is_month()) { ?>
<h2><?php the_time('F Y'); ?></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2><?php the_time('Y'); ?></h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2>Blog Archives</h2>
<?php } ?>


<?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content() ?>
    </div>
    <p class="meta"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('g:ia j M Y') ?></a> <?php edit_post_link('edit', '', ''); ?></p>
  </div>

<?php endwhile; ?>
</div>
<!-- END #tweets -->

<div class="pagination">
  <div class="older"><?php next_posts_link('&laquo; Older tweets') ?></div>
  <div class="newer"><?php previous_posts_link('Newer tweets &raquo;') ?></div>
</div>

<?php else :

    if (is_date()) { // If this is a date archive
      echo "<h2>No posts found for this date</h2>";
    } else {
      echo "<h2>No posts found</h2>";
    }
    get_search_form();

  endif;
?>

<?php get_footer(); ?>
