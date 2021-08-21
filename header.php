<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> <?php alphafuturefunds_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<header class="site-header">
	    <nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
		    <a href="<?php echo site_url(); ?>" class="logo-link" rel="home"><img src="<?php echo get_template_directory_uri() ?>/img/main-logo.svg" alt="<?php bloginfo('name'); ?>"></a>
		    <ul class="nav social hide-down-md">
			<li>
			    <button type="button" class="btn-search" data-bs-toggle="modal" data-bs-target="#searchModal"> <svg class="icon"><use xlink:href="#search"></use></svg></button>
			</li>
			<?php if (fw_get_db_settings_option('fb')) { ?><li><a href="<?php echo fw_get_db_settings_option('in') ?>" target="_blank"><svg class="icon"><use xlink:href="#facebook"></use></svg></a></li><?php } ?>
			<?php if (fw_get_db_settings_option('tw')) { ?><li><a href="<?php echo fw_get_db_settings_option('tw') ?>" target="_blank"><svg class="icon"><use xlink:href="#twitter"></use></svg></a></li><?php } ?>
			<?php if (fw_get_db_settings_option('insta')) { ?><li><a href="<?php echo fw_get_db_settings_option('insta') ?>" target="_blank"><svg class="icon"><use xlink:href="#instagram"></use></svg></a></li><?php } ?>
			<?php if (fw_get_db_settings_option('in')) { ?><li><a href="<?php echo fw_get_db_settings_option('in') ?>" target="_blank"><svg class="icon"><use xlink:href="#linkedin"></use></svg></a></li><?php } ?>
		    </ul>
		    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
			<span class="toggle-icon"><i></i><i></i><i></i><i></i></span>
			<span class="btn-text"><?php _e('Menu', 'alphafuturefunds'); ?></span>
		    </button>
		    <div id="navbarNavDropdown" class="collapse navbar-collapse">
			<?php
			wp_nav_menu(
				array(
				    'theme_location' => 'primary',
				    'container' => 'false',
				    'menu_class' => 'navbar-nav main',
				    'fallback_cb' => '',
				    'menu_id' => 'main-menu',
				    'walker' => new alphafuturefunds_WP_Bootstrap_Navwalker(),
				)
			);
			?>
			<ul class="nav social hide-up-md">
			    <li>
				<button type="button" class="btn-search" data-bs-toggle="modal" data-bs-target="#searchModal"> <svg class="icon"><use xlink:href="#search"></use></svg></button>
			    </li>
			    <?php if (fw_get_db_settings_option('fb')) { ?><li><a href="<?php echo fw_get_db_settings_option('in') ?>" target="_blank"><svg class="icon"><use xlink:href="#facebook"></use></svg></a></li><?php } ?>
			    <?php if (fw_get_db_settings_option('tw')) { ?><li><a href="<?php echo fw_get_db_settings_option('tw') ?>" target="_blank"><svg class="icon"><use xlink:href="#twitter"></use></svg></a></li><?php } ?>
			    <?php if (fw_get_db_settings_option('insta')) { ?><li><a href="<?php echo fw_get_db_settings_option('insta') ?>" target="_blank"><svg class="icon"><use xlink:href="#instagram"></use></svg></a></li><?php } ?>
			    <?php if (fw_get_db_settings_option('in')) { ?><li><a href="<?php echo fw_get_db_settings_option('in') ?>" target="_blank"><svg class="icon"><use xlink:href="#linkedin"></use></svg></a></li><?php } ?>
			</ul>
		    </div>
		</div>
	    </nav>
	</header>