<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'faq' => array(
	'type' => 'addable-popup',
	'label' => __('Faq', '{domain}'),
	'template' => '{{- question }}',
	'popup-title' => null,
	'size' => 'large', // small, medium, large
	'limit' => 0, // limit the number of popup`s that can be added
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
	'popup-options' => array(
	    'question' => array(
		'type' => 'text',
		'label' => __('Question', 'fw'),
	    ),
	    'answer' => array(
		'type' => 'wp-editor',
		'label' => __('Answer', 'fw'),
	    ),
	),
    ),
);
