<?php if (!defined('FW')) die('Forbidden'); ?>
<?php $color_class = !empty($atts['color']) ? "btn-{$atts['color']}" : ''; ?>
<?php $size_class = !empty($atts['size']) ? " {$atts['size']}" : ''; ?>

<div class="btn-wrp">
    <a href="<?php echo do_shortcode($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="btn <?php echo esc_attr($color_class); ?><?php echo $size_class; ?>">
	<span><?php echo $atts['label']; ?></span>
	<?php
	if ($atts['arrow']) {
	    the_svg('arrow');
	}
	?>
    </a>
</div>