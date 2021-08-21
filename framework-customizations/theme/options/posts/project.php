<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'info' => array(
	'type' => 'box',
	'options' => array(
	    'link' => array(
		'type' => 'text',
		'value' => '#',
		'label' => __('Link', 'alphafuturefunds'),
	    ),
	    'label' => array(
		'type' => 'text',
		'label' => __('Label', 'alphafuturefunds'),
	    ),
	),
	'title' => __('Info', 'alphafuturefunds'),
	'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),
);
