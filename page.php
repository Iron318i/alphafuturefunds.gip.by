<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
global $post;

$banner_enable = fw_get_db_post_option($post->ID, 'banner_enable');

$page_tite = get_the_title();
if (fw_get_db_post_option($post->ID, 'banner_heading') != '') {
    $page_tite = fw_get_db_post_option($post->ID, 'banner_heading');
}
if (has_post_thumbnail()):
    $img_id = $post->ID;
else:
    $img_id = 154;
endif;
?>
<?php if ($banner_enable): ?>
    <div class="page-header">
        <picture>
    	<source media="(min-width:768px)" srcset="<?php echo get_the_post_thumbnail_url($img_id, 'page-header-large') ?>">
    	<img src="<?php echo get_the_post_thumbnail_url($img_id, 'page-header-md') ?>" alt="<?php the_title() ?>">
        </picture>
        <div class="container">
    	<h1 class="h1"><?php echo $page_tite; ?></h1>
        </div>
    </div>
<?php endif; ?>
<div id="content" tabindex="-1">
    <?php
    while (have_posts()) {
	the_post();

	if (fw_ext_page_builder_is_builder_post(get_the_ID())) {
	    the_content();
	} else {
	    get_template_part('loop-templates/content', 'page');
	}
    }
    ?>
</div><!-- #content -->
<?php
get_footer();
