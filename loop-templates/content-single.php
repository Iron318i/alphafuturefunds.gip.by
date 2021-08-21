<?php
/**
 * Single post partial template
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="post-img mb-2">
	<?php echo get_the_post_thumbnail($post->ID, 'article'); ?>
    </div>
    <header class="entry-header mb-2">
	<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	<div class="entry-meta">
	    <?php alphafuturefunds_posted_on(); ?>
	</div>
    </header>
    <div class="entry-content mt-2">
	<?php
	echo wpautop($post->post_content);
	?>
	<?php
	wp_link_pages(
		array(
		    'before' => '<div class="page-links">' . __('Pages:', 'alphafuturefunds'),
		    'after' => '</div>',
		)
	);
	?>
    </div>
</article>
