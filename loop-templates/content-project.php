<?php
/**
 * Single post partial template
 *
 * @package Beach-Sweat
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;


$projectterms = get_the_terms(get_the_ID(), 'projectcat');
?>
<div class="col-md-4 col-6<?php
if ($projectterms && !is_wp_error($projectterms)) {
    foreach ($projectterms as $term) {
	echo ' tax-' . $term->term_id;
    }
}
?>">
    <a href="<?php echo fw_get_db_post_option(get_the_ID(), 'link') ?>" class="project">
	<div class="photo">
	    <?php echo get_the_post_thumbnail($post->ID, 'project'); ?>
	</div>
	<header class="entry-header">
	    <?php the_title('<h2 class="h5 name">', '</h2>'); ?>
	    <p class="role"><?php echo fw_get_db_post_option(get_the_ID(), 'role') ?></p>
	</header>
    </a>
</div>