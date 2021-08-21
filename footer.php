<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<footer class="site-footer">
    <div class="container">
	<div class="row">
	    <div class="col-sm-auto">
		<?php
		if (is_active_sidebar('footer-1')) {
		    dynamic_sidebar('footer-1');
		}
		?>
	    </div>
	    <div class="col-sm-auto">
		<?php
		if (is_active_sidebar('footer-2')) {
		    dynamic_sidebar('footer-2');
		}
		?>
	    </div>
	    <div class="col-sm-auto">
		<?php
		if (is_active_sidebar('footer-3')) {
		    dynamic_sidebar('footer-3');
		}
		?>
	    </div>
	</div>
    </div>
    <div class="container copyright">© <?php echo date('Y'); ?> ALPHA FUTURE PARTNERS (ADVISOR TO ALPHA FUTURE FUNDS)</div>
</footer>
<?php get_template_part('template-parts/svg-sprite') ?>
<?php wp_footer(); ?>
</body>
</html>