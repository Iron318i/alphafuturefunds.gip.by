<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'general' => array(
	'title' => __('General', 'unyson'),
	'type' => 'tab',
	'options' => array(
	    'phone' => array(
		'label' => __('Phone', 'aesthetix'),
		'type' => 'text',
		'value' => '012 34 56 789'
	    ),
	)
    ),
);
