<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
$style = '';
if ($atts['mw'] > 0) {
    $style = 'style="max-width: ' . $atts['mw'] / 17 . 'rem"';
}
$custome_class = ( isset($atts['class']) && $atts['class'] ) ? ' ' . $atts['class'] . '' : '';
$custome_class .= ($atts['centered']) ? ' mx-auto' : '';
switch ($atts['margin_bottom']) {
    case 0:
	break;
    case 1:
	$custome_class .= ' mb-1';
	break;
    case 2:
	$custome_class .= ' mb-1 mb-md-2';
	break;
    case 3:
	$custome_class .= ' mb-2 mb-md-3';
	break;
    case 4:
	$custome_class .= ' mb-2 mb-md-4';
	break;
    case 5:
	$custome_class .= ' mb-3 mb-md-5';
	break;
}
?>
<div class="text-block<?php echo $custome_class ?>" <?= $style ?>>
    <?php
    echo do_shortcode($atts['text']);
    ?>
</div>