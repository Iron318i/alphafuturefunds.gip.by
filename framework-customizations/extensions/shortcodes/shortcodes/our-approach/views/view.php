<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="our-approach">
    <div class="row">
	<div class="col-lg-5">
	    <div class="approach-item">
		<h3 class="h3"><?php echo $atts['svg_1'] . $atts['heading_1']; ?></h3>
		<?php echo $atts['content_1']; ?>
	    </div>
	    <div class="approach-item">
		<h3 class="h3"><?php echo $atts['svg_2'] . $atts['heading_2']; ?></h3>
		<?php echo $atts['content_2']; ?>
	    </div>
	</div>
	<div class="col-lg-7">
	    <div class="approach-item">
		<h3 class="h3"><?php echo $atts['svg_3'] . $atts['heading_3']; ?></h3>
		<?php echo $atts['content_3']; ?>
	    </div>
	</div>
    </div>
</div>