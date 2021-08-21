<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blocks' => array(
	'type' => 'addable-popup',
	'label' => __('Block', '{domain}'),
	'template' => '{{- heading }}',
	'popup-title' => null,
	'size' => 'large', // small, medium, large
	'limit' => 0, // limit the number of popup`s that can be added
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
	'popup-options' => array(
	    'svg' => array(
		'type' => 'textarea',
		'label' => __('SVG Icon', 'fw'),
	    ),
	    'heading' => array(
		'type' => 'text',
		'label' => __('Heading', 'fw'),
	    ),
	    'content' => array(
		'type' => 'wp-editor',
		'label' => __('Content', 'fw'),
	    ),
	),
    ),
);
