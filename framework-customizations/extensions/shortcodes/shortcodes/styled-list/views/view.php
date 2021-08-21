<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<ul class="features">
    <?php
    $arr = $atts['list'];
    foreach ($arr as $key => $value) {
	?>
        <li><?php echo $value; ?></li>
	<?php
    }
    ?>
</ul>