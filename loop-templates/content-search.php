<?php
/**
 * Search results partial template
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<article <?php post_class('mb-1'); ?> id="post-<?php the_ID(); ?>">
    <?php
    the_title(
	    sprintf('<h6 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h6>'
    );
    ?>
    <?php if ('post' === get_post_type()) : ?>
        <div class="entry-meta mb-1">
	    <?php alphafuturefunds_posted_on(); ?>
        </div>
    <?php endif; ?>
    <?php
    if (get_the_excerpt() != "...") {
	?>
        <div class="entry-summary">
	    <?php the_excerpt(); ?>
        </div>
    <?php } ?>
</article>
