<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="col-sm-6 col-lg-4">
    <article class="card mb-2">
	<div class="card-body">
	    <?php
	    the_title(
		    sprintf('<h3 class="entry-title h6"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'
	    );
	    ?>
	    <div class="excerpt">
		<?php the_excerpt(); ?>
	    </div>
	</div>
	<div class="card-img">
	    <a href="<?php the_permalink() ?>">
		<?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
	    </a>
	</div>
	<div class="card-footer">
	    <a href="<?php the_permalink() ?>" class="btn-more">READ MORE <svg class="icon"><use xlink:href="#right-arrow"></use></svg></a>
	</div>
    </article><!-- #post-## -->
</div>