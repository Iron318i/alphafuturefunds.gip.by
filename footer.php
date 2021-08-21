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
    <div class="top-footer">
	<div class="container">
	    <div class="row">
		<div class="col-md-6">
		    <a href="<?php echo site_url(); ?>" class="logo-footer" rel="home"><img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.svg" alt="<?php bloginfo('name'); ?>"></a>
		    <p class="copyright mt-md-3">Copyright ©<?php echo date('Y') ?><br> All rights reserved BeachSweat.com</p>
		</div>
		<div class="col-md-6">
		    <h4 class="footer-title">Navigation Links</h4>
		    <?php
		    wp_nav_menu(
			    array(
				'theme_location' => 'nav_link',
				'container' => false,
				'container_class' => false,
				'menu_class' => 'nav',
				'menu_id' => 'nav-links',
			    )
		    );
		    ?>
		</div>
		<div class="col-md-6">
		    <h4 class="footer-title">Need help?</h4>
		    <?php echo do_shortcode('[contact-form-7 id="49" title="Subscribe now"]') ?>
		</div>
	    </div>
	</div>
    </div>
    <div class="bottom-footer">
	<div class="container">
	    <div class="row">
		<div class="col-auto">
		    <?php
		    wp_nav_menu(
			    array(
				'theme_location' => 'footer',
				'container' => false,
				'container_class' => false,
				'menu_class' => 'nav',
				'menu_id' => 'footer-menu',
			    )
		    );
		    ?>
		</div>
		<div class="col-auto">
		    <ul class="nav social">
			<?php if (fw_get_db_settings_option('fb')) { ?><li><a href="<?php echo fw_get_db_settings_option('fb') ?>" target="_blank"><svg class="icon"><use xlink:href="#facebook"></use></svg></a></li><?php } ?>
			<?php if (fw_get_db_settings_option('tw')) { ?><li><a href="<?php echo fw_get_db_settings_option('tw') ?>" target="_blank"><svg class="icon"><use xlink:href="#twitter"></use></svg></a></li><?php } ?>
			<?php if (fw_get_db_settings_option('insta')) { ?><li><a href="<?php echo fw_get_db_settings_option('insta') ?>" target="_blank"><svg class="icon"><use xlink:href="#instagram"></use></svg></a></li><?php } ?>
			<?php if (fw_get_db_settings_option('in')) { ?><li><a href="<?php echo fw_get_db_settings_option('in') ?>" target="_blank"><svg class="icon"><use xlink:href="#linkedin"></use></svg></a></li><?php } ?>
		    </ul>
		</div>
	    </div>
	</div>
    </div>
</footer>
<div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-lg">
	<div class="modal-content">
	    <div class="modal-header">
		<h5 class="modal-title"><?php _e('Search', 'alphafuturefunds') ?></h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	    </div>
	    <div class="modal-body">
		<?php echo get_search_form(); ?>
	    </div>
	</div>
    </div>
</div>
<?php get_template_part('template-parts/svg-sprite') ?>
<?php wp_footer(); ?>
</body>
</html>