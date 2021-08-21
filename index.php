<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="blog-wrp">
    <div class="container py-3" id="content" tabindex="-1">
	<div class="h1 text-center"><?php
	    if (is_404()) {
		echo '404';
	    } elseif (is_search()) {
		echo 'Search';
	    } else {
		echo 'Blog';
	    }
	    ?></div>
	<div class="row">
	    <?php
	    if (have_posts()) {
		// Start the Loop.
		?>
		<?php
		while (have_posts()) {
		    the_post();

		    /*
		     * Include the Post-Format-specific template for the content.
		     * If you want to override this in a child theme, then include a file
		     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		     */
		    get_template_part('loop-templates/content', get_post_format());
		}
		?>
		<?php
	    } else {
		get_template_part('loop-templates/content', 'none');
	    }
	    ?>
	</div>
	<?php alphafuturefunds_pagination(); ?>
    </div>
    <?php
    get_footer();
