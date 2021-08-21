<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="what-we-do">
    <div class="row">
	<?php foreach ($atts['blocks'] as $key => $value) { ?>
    	<div class="col-md-6 block">
    	    <div class="icon-wrp"><?php echo $value['svg'] ?></div>
    	    <h3 class="h3"><?php echo $value['heading']; ?></h3>
		<?php echo $value['content']; ?>
    	</div>
	<?php } ?>
    </div>
</div>