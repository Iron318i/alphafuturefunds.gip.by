<?php
/**
 * The template for displaying all single posts
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="blog-wrp">
    <div class="container py-3" id="content" tabindex="-1">
	<div class="row">
	    <div class="main col-md-8 col-lg-9">
		<?php
		while (have_posts()) {
		    the_post();
		    get_template_part('loop-templates/content', 'single');
		}
		if (comments_open() || get_comments_number()) {
		    comments_template();
		}
		?>
	    </div>
	    <?php get_template_part('template-parts/aside') ?>
	</div>
    </div>
</div>

<?php
get_footer();
