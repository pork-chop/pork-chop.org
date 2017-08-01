<?php /**/ ?><?php if (is_single()) : ?>

<div class="navigation">
	<p class="prev"><?php previous_post_link('&laquo; %link') ?></p>
	<p class="next"><?php next_post_link('%link &raquo;') ?> </p>
</div>

<?php else : ?>

<div class="navigation">
	<p class="prev"><?php next_posts_link('&laquo; Previous Entries') ?></p>
	<p class="next"><?php previous_posts_link('Next Entries &raquo;') ?></p>
</div>

<?php endif; ?>