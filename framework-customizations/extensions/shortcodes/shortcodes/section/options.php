<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
	'label' => __('Section Title', 'alphafuturefunds'),
	'type' => 'text',
    ),
    'is_fullwidth' => array(
	'label' => __('Full Width', 'alphafuturefunds'),
	'type' => 'switch',
    ),
    'type' => array(
	'label' => __('Wrapper Type', 'alphafuturefunds'),
	'type' => 'switch',
	'left-choice' => array(
	    'value' => 'section',
	    'label' => __('Section', '{domain}'),
	),
	'right-choice' => array(
	    'value' => 'div',
	    'label' => __('Div', '{domain}'),
	),
    ),
    'width' => array(
	'type' => 'select',
	'label' => __('Max Width', 'alphafuturefunds'),
	'choices' => array(
	    '' => '---',
	    'w-990' => '990px',
	)
    ),
    'justify_content' => array(
	'type' => 'select',
	'label' => __('Justify content', 'fw'),
	'choices' => array(
	    '' => '',
	    'justify-content-center' => 'Center',
	    'justify-content-end' => 'End',
	    'justify-content-around' => 'Around',
	    'justify-content-between' => 'Between',
	)
    ),
    'reverse' => array(
	'type' => 'select',
	'label' => __('Row reverse', 'alphafuturefunds'),
	'choices' => array(
	    '' => '---',
	    'flex-lg-row-reverse' => 'Up Large',
	    'flex-md-row-reverse' => 'Up Md',
	)
    ),
    'bgc' => array(
	'type' => 'select',
	'label' => __('Background Color', 'alphafuturefunds'),
	'choices' => array(
	    '' => 'None',
	    'bg-primary' => 'Orange',
	)
    ),
    'gutters' => array(
	'label' => __('Horizontal gutters', 'alphafuturefunds'),
	'type' => 'slider',
	'value' => 2,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'padding_top' => array(
	'label' => __('Top Padding size', 'alphafuturefunds'),
	'type' => 'slider',
	'value' => 3,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'padding_bottom' => array(
	'label' => __('Padding Bottom', 'alphafuturefunds'),
	'type' => 'slider',
	'value' => 3,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'background_image' => array(
	'label' => __('Background Image', 'alphafuturefunds'),
	'desc' => __('Please select the background image', 'alphafuturefunds'),
	'type' => 'background-image',
	'choices' => array(//	in future may will set predefined images
	)
    ),
    'custome_class' => array(
	'label' => __('Custome section class', 'alphafuturefunds'),
	'desc' => __('Insert Custome section class', 'alphafuturefunds'),
	'type' => 'text',
    ),
);
