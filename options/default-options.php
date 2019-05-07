<?php
/*
|| --------------------------------------------------------------------------------------------
|| Default Panel Option Fields
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Default Options
|| @since		Dilaz Panel 1.1
|| @author		Rodgath, https://github.com/Rodgath
|| @copyright	Copyright (C) 2017, Rodgath LTD
|| @link		https://github.com/Rodgath/Dilaz-Panel-Plugin
|| @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
|| NOTE 1: This file is for experimetation and demo purposes. Do not use this file to add your options, 
||         othersise all your options and settings will be overwritten when updating this panel.
|| 
|| NOTE 2: Use "options.php" file to add your plugin/theme options.
|| 
*/

defined('ABSPATH') || exit;


# MAIN TAB - General Settings
# =============================================================================================
$options[] = array(
	'id'   => 'general-options',
	'name' => __('General Options', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'mdi-settings'
);
	
	# SUB TAB - Simple Options Set
	# *****************************************************************************************
	// $options[] = array(
		// 'id'   => 'general',
		// 'name' => __('General', 'dilaz-panel'),
		// 'type' => 'subheading',
	// );
		
		# FIELDS - Alpha Tab 1
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'info',
			'name' => __('Info Box Title', 'dilaz-panel'),
			'desc' => __('Sample info description goes here.', 'dilaz-panel'),
			'type' => 'info',
		);
		$options[] = array(
			'id'   => 'range',
			'name' => __('Range:', 'dilaz-panel'),
			'desc' => __('Set range between two minimum and maximum values.', 'dilaz-panel'),
			'type' => 'range',
			'args' => array(
				'min'    => array( 8, 	__('Min', 'dilaz-panel') ), 
				'max'    => array( 100,	__('Max', 'dilaz-panel') ), 
				'step'   => '2', 
				'prefix' => '',
				'suffix' => '%'
			),
			'std' => array('min_std' => 20, 'max_std' => 45),
		);
		$options[] = array(
			'id'    => 'slider',
			'name'  => __('Slider:', 'dilaz-panel'),
			'desc'  => __('Select value from range slider.', 'dilaz-panel'),
			'type'  => 'slider',
			'args'  => array('min' => 8, 'max' => 100, 'step' => 2, 'suffix' => '%'),
			'std'   => '40',
			'class' => ''
		);
		$options[] = array(
			'id'   => 'info',
			'name' => __('Info Box Title', 'dilaz-panel'),
			'desc' => __('Sample info description goes here.', 'dilaz-panel'),
			'type' => 'info',
		);
		$options[] = array(
			'id'   => 'switchenable',
			'name' => __('Switch Enable/Disable:', 'dilaz-panel'),
			'desc' => __('Enable/disable switch option.', 'dilaz-panel'),
			'type' => 'switch',
			'options' => array(
				'enable'  => __('Enable', 'dilaz-panel'), 
				'disable' => __('Disable', 'dilaz-panel'),
			),
			'std'  => 'disable',
			'class' => ''
		);
		$options[] = array(
			'id'   => 'switch',
			'name' => __('Switch:', 'dilaz-panel'),
			'desc' => __('On/Off switch option.', 'dilaz-panel'),
			'type' => 'switch',
			'options' => array(
				1 => __('On', 'dilaz-panel'), 
				0 => __('Off', 'dilaz-panel'),
			),
			'std'  => 0,
			'class' => ''
		);
		$options[] = array(
			'id'   => 'buttonset',
			'name' => __('Button Set:', 'dilaz-panel'),
			'desc' => __('Set multiple options using buttonset.', 'dilaz-panel'),
			'type' => 'buttonset',
			'options' => array(
				'yes'   => __('Yes', 'dilaz-panel'), 
				'no'    => __('No', 'dilaz-panel'),
				'maybe' => __('Maybe', 'dilaz-panel')
			),
			'std'  => 'no',
			'class' => ''
		);
		$options[] = array(
			'id'   => 'background',
			'name' => __('Background:', 'dilaz-panel'),
			'desc' => __('Background style.', 'dilaz-panel'),
			'type' => 'background',
			'options' => array( 
				'image'      => false, 
				'repeat'     => false,
				'size'       => false,
				'position'   => false,
				'attachment' => false,
				'origin'     => false,
				'color'      => false, 
			),
			'std'   => array( 
				'image'      => '', 
				'repeat'     => '',
				'size'       => '',
				'position'   => '',
				'attachment' => '',
				'origin'     => '',
				'color'      => '', 
			),
			'class' => ''
		);
		$options[] = array(
			'id'    => 'textarea',
			'name'  => __('Textarea:', 'dilaz-panel'),
			'desc'  => __('Enter text content. HTML tags are enabled.', 'dilaz-panel'),
			'type'  => 'textarea',
			'args'  => array('rows' => 5),
			'std'   => 'Sample textarea content goes here.',
			'class' => ''
		);
		$options[] = array(
			'id'    => 'editor',
			'name'  => __('WP Editor:', 'dilaz-panel'),
			'desc'  => __('Enter text content.', 'dilaz-panel'),
			'type'  => 'editor',
			'args'  => array(
				'editor' => array(
					'wpautop'       => false,
					'media_buttons' => false,
					// 'textarea_rows' => 11,
					'editor_height' => 320,
					// 'tabindex'      => 1,
					'editor_css'    => '',
					'teeny'         => true,
					// 'tinymce'       => array(),
					'quicktags'     => false
				)
			),
			'std'   => 'Sample textarea content goes here.',
			'class' => ''
		);
		$options[] = array(
			'id'    => 'text',
			'name'  => __('Text:', 'dilaz-panel'),
			'desc'  => __('Text field example.', 'dilaz-panel'),
			'type'  => 'text',
			'std'   => '',
			'class' => ''
		);
		$options[] = array(
			'id'	  => 'multi_text_inline',
			'name'	  => __('Multiple Text (Inline 3 Columns):', 'dilaz-panel'),
			'desc'	  => __('Set any number of multiple text field options.', 'dilaz-panel'),
			'type'	  => 'multitext',
			'options' => array(
				'text1' => array('name' => __('Text 1', 'dilaz-panel'), 'default' => __('Sample One', 'dilaz-panel')),
				'text2' => array('name' => __('Text 2', 'dilaz-panel'), 'default' => __('Sample Two', 'dilaz-panel')),
				'text3' => array('name' => __('Text 3', 'dilaz-panel'), 'default' => __('Sample Three', 'dilaz-panel')),
				'text4' => array('name' => __('Text 4', 'dilaz-panel'), 'default' => __('Sample Four', 'dilaz-panel')),
				'text5' => array('name' => __('Text 5', 'dilaz-panel'), 'default' => __('Sample Five', 'dilaz-panel')),
				'text6' => array('name' => __('Text 6', 'dilaz-panel'), 'default' => __('Sample Six', 'dilaz-panel')),
			),
			'args' => array('inline' => true, 'cols' => 3),
		);
		$options[] = array(
			'id'	  => 'multi_text',
			'name'	  => __('Multiple Text (Single Columns):', 'dilaz-panel'),
			'desc'	  => __('Set any number of multiple text field options.', 'dilaz-panel'),
			'type'	  => 'multitext',
			'options' => array(
				'text1' => array('name' => __('Text 1', 'dilaz-panel'), 'default' => 'Sample One'),
				'text2' => array('name' => __('Text 2', 'dilaz-panel'), 'default' => 'Sample Two'),
				'text3' => array('name' => __('Text 3', 'dilaz-panel'), 'default' => 'Sample Three')
			),
			'args' => array(),
		);

# MAIN TAB - Media Options
# =============================================================================================
$options[] = array(
	'id'   => 'media-options',
	'name' => __('Media Options', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'mdi-monitor'
);
	
	# SUB TAB - Image
	# *****************************************************************************************
	$options[] = array(
		'id'   => 'image',
		'name' => __('Image', 'dilaz-panel'),
		'type' => 'subheading',
	);
		
		# FIELDS - Image options
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'image_multiple',
			'name' => __('Image File (Multiple):', 'dilaz-panel'),
			'desc' => __('Select/Upload multiple image files from media library.', 'dilaz-panel'),
			'type' => 'upload',
			'std'  => '',
			'args' => array(
				'file_type' => 'image', 
				'multiple'  => true
			),
		);
		$options[] = array( 
			'id'   => 'image',
			'name' => __('Image File:', 'dilaz-panel'),
			'desc' => __('Select/Upload single image file from media library.', 'dilaz-panel'),
			'type' => 'upload',
			'std'  => '',
			'args' => array(
				'file_type' => 'image',
			),
		);
	
	# SUB TAB - Audio
	# *****************************************************************************************
	$options[] = array(
		'id'   => 'audio',
		'name' => __('Audio', 'dilaz-panel'),
		'type' => 'subheading',
	);
		
		# FIELDS - Audio options
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'audio_multiple',
			'name' => __('Audio File (Multiple):', 'dilaz-panel'),
			'desc' => __('Select/Upload multiple audio files from media library.', 'dilaz-panel'),
			'type' => 'upload',
			'std'  => '',
			'args' => array(
				'file_type' => 'audio',  
				'multiple'  => true
			),
		);
		$options[] = array(
			'id'   => 'audio',
			'name' => __('Audio File:', 'dilaz-panel'),
			'desc' => __('Select/Upload single audio file from media library.', 'dilaz-panel'),
			'type' => 'upload',
			'std'  => '',
			'args' => array(
				'file_type' => 'audio',
			),
		);
	
	# SUB TAB - Video
	# *****************************************************************************************
	$options[] = array(
		'id'   => 'video',
		'name' => __('Video', 'dilaz-panel'),
		'type' => 'subheading',
	);
		
		# FIELDS - Video options
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'video_multiple',
			'name' => __('Video File (Multiple):', 'dilaz-panel'),
			'desc' => __('Select/Upload multiple video files from media library.', 'dilaz-panel'),
			'type' => 'upload',
			'std'  => '',
			'args' => array(
				'file_type' => 'video',
				'multiple'  => true
			),
		);
		$options[] = array(
			'id'   => 'video',
			'name' => __('Video File:', 'dilaz-panel'),
			'desc' => __('Select/Upload single video file from media library.', 'dilaz-panel'),
			'type' => 'upload',
			'std'  => '',
			'args' => array(
				'file_type' => 'video',
			),
		);

# MAIN TAB - Color Options
# =============================================================================================
$options[] = array(
	'id'   => 'color-options',
	'name' => __('Color Options', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'mdi-format-color-fill'
);
	
	# SUB TAB - Color
	# *****************************************************************************************
	// $options[] = array(
		// 'id'   => 'color',
		// 'name' => __('Color', 'dilaz-panel'),
		// 'type' => 'subheading',
	// );
		
		# FIELDS - Color options
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'link',
			'name' => __('Link Example:', 'dilaz-panel'),
			'desc' => __('Link multiple color properties.', 'dilaz-panel'),
			'type' => 'multicolor',
			'options' => array(
				'regular' => array('color' => '#111111', 'name' => __('Regular', 'dilaz-panel')),
				'hover'   => array('color' => '#333333', 'name' => __('Hover', 'dilaz-panel')),
				'visited' => array('color' => '#555555', 'name' => __('Visited', 'dilaz-panel')),
				'active'  => array('color' => '#999999', 'name' => __('Active', 'dilaz-panel')),
			),
		);
		$options[] = array(
			'id'   => 'multicolor',
			'name' => __('Multicolor:', 'dilaz-panel'),
			'desc' => __('General multiple color properties.', 'dilaz-panel'),
			'type' => 'multicolor',
			'options' => array(
				'color1' => array('color' => '#111111', 'name' => __('Color 1', 'dilaz-panel')),
				'color2' => array('color' => '#333333', 'name' => __('Color 2', 'dilaz-panel')),
				'color3' => array('color' => '#555555', 'name' => __('Color 3', 'dilaz-panel')),
				'color4' => array('color' => '#777777', 'name' => __('Color 4', 'dilaz-panel')),
				'color5' => array('color' => '#999999', 'name' => __('Color 5', 'dilaz-panel')),
			),
		);
		$options[] = array(
			'id'   => 'color',
			'name' => __('Color:', 'dilaz-panel'),
			'desc' => __('Single color option.', 'dilaz-panel'),
			'type' => 'color', 
			'std'  => '#ff2211',
			'class' => ''
		);

# MAIN TAB - General Settings
# =============================================================================================
$options[] = array(
	'id'   => 'repeatable-options',
	'name' => __('Repeatable Options', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'mdi-view-list'
);
	
	# TAB - Repeatable Options Set
	# *****************************************************************************************
	// $options[] = array(
		// 'id'   => '',
		// 'name' => __('', 'dilaz-panel'),
		// 'type'  => 'subheading'
	// );
		
		# FIELDS - Alpha Tab 1
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'repeatable_one',
			'name' => __('Repeatable (Single Field per Row):', 'dilaz-panel'),
			'desc' => __('Single row items repeatable field. ', 'dilaz-panel'),
			'type' => 'repeatable',
			'args' => array(
				'sortable' => true,
				'removable' => true,
				'add_more' => true,
				'add_text' => __('Add More', 'dilaz-panel'),
			),
			'options' => array(
				array(
					array('label' => '', 'value' => 'Row 1 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 2 - Value 2'), 
				)
			),
		);
		$options[] = array(
			'id'   => 'repeatable_two',
			'name' => __('Repeatable (Multiple Fields per Row):', 'dilaz-panel'),
			'desc' => __('Multiple row items repeatable field. You can add any number item fields per row.', 'dilaz-panel'),
			'type' => 'repeatable',
			'args' => array(
				'sortable' => true,
				'removable' => true,
				'add_more' => true,
				'add_text' => __('Add More Custom', 'dilaz-panel'),
			),
			'options' => array(
				array(
					array('label' => 'Label One', 'value' => 'Row 1 - Value 1', 'size' => 15), 
					array('label' => 'Label Two', 'value' => 'Row 1 - Value 2', 'size' => 15), 
					array('label' => 'Label Three', 'value' => 'Row 1 - Value 3', 'size' => 15), 
					array('label' => 'Label Four', 'value' => 'Row 1 - Value 4', 'size' => 15), 
				),
				array(
					array('label' => 'Label One', 'value' => 'Row 2 - Value 1', 'size' => 15), 
					array('label' => 'Label Two', 'value' => 'Row 2 - Value 2', 'size' => 15), 
					array('label' => 'Label Three', 'value' => 'Row 2 - Value 3', 'size' => 15), 
					array('label' => 'Label Four', 'value' => 'Row 2 - Value 4', 'size' => 15), 
				)
			),
		);
		$options[] = array(
			'id'   => 'repeatable_three',
			'name' => __('Repeatable (Add More Field Disabled):', 'dilaz-panel'),
			'desc' => __('Add more button is disabled.', 'dilaz-panel'),
			'type' => 'repeatable',
			'args' => array(
				'sortable' => true,
				'removable' => true,
				'add_more' => false,
			),
			'options' => array(
				array(
					array('label' => '', 'value' => 'Row 1 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 2 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 3 - Value 1'), 
				)
			),
		);
		$options[] = array(
			'id'   => 'repeatable_four',
			'name' => __('Repeatable (Sorting Disabled):', 'dilaz-panel'),
			'desc' => __('Field sorting is disabled.', 'dilaz-panel'),
			'type' => 'repeatable',
			'args' => array(
				'sortable' => false,
				'removable' => true,
				'add_more' => true,
			),
			'options' => array(
				array(
					array('label' => '', 'value' => 'Row 1 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 2 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 3 - Value 1'), 
				)
			),
		);
		$options[] = array(
			'id'   => 'repeatable_five',
			'name' => __('Repeatable (Sorting Disabled for First 2 Fields):', 'dilaz-panel'),
			'desc' => __('Field sorting is disabled for the first 2 items.', 'dilaz-panel'),
			'type' => 'repeatable',
			'args' => array(
				'sortable' => true,
				'not_sortable' => 2,
				'add_more' => true,
			),
			'options' => array(
				array(
					array('label' => '', 'value' => 'Row 1 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 2 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 3 - Value 1'), 
				)
			),
		);
		$options[] = array(
			'id'   => 'repeatable_six',
			'name' => __('Repeatable (Removal Disabled):', 'dilaz-panel'),
			'desc' => __('Field removal is disabled.', 'dilaz-panel'),
			'type' => 'repeatable',
			'args' => array(
				'removable' => false,
				'add_more' => true,
			),
			'options' => array(
				array(
					array('label' => '', 'value' => 'Row 1 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 2 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 3 - Value 1'), 
				)
			),
		);
		$options[] = array(
			'id'   => 'repeatable_seven',
			'name' => __('Repeatable (Removal Disabled for the 1st and 2nd Fields):', 'dilaz-panel'),
			'desc' => __('Field removal is disabled for the 1st and 2nd items.', 'dilaz-panel'),
			'type' => 'repeatable',
			'args' => array(
				'not_removable' => 2,
				'add_more' => true,
			),
			'options' => array(
				array(
					array('label' => '', 'value' => 'Row 1 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 2 - Value 1'), 
				),
				array(
					array('label' => '', 'value' => 'Row 3 - Value 1'), 
				)
			),
		);

# MAIN TAB - Typography Options
# =============================================================================================
$options[] = array(
	'id'   => 'typography-options',
	'name' => __('Typography Options', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'mdi-format-font'
);
	
	# SUB TAB - Typography
	# *****************************************************************************************
	// $options[] = array(
		// 'id'   => 'typography',
		// 'name' => __('Typography', 'dilaz-panel'),
		// 'type' => 'subheading',
	// );
		
		# FIELDS - Typography options
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'font',
			'name' => __('Font:', 'dilaz-panel'),
			'desc' => __('Typography style with many option properties.', 'dilaz-panel'),
			'type' => 'font',
			'options' => array( 
				'family' => true,
				'subset' => true,
				'weight' => true,
				'size'   => true, 
				'height' => true, 
				'style'  => true, 
				'case'   => true, 
				'color'  => true, 
			),
			'std' => array(
				'family' => 'Trebuchet', 
				'subset' => false, 
				'weight' => false,
				'size'   => '18', 
				'height' => false,
				'style'  => false,
				'case'   => false,
				'color'  => false,
			),
			'class' => ''
		);
		$options[] = array(
			'id'   => 'font_2',
			'name' => __('Font:', 'dilaz-panel'),
			'desc' => __('Typography style with few option properties.', 'dilaz-panel'),
			'type' => 'font',
			'options' => array( 
				'family' => true, 
				'subset' => false, 
				'weight' => true, 
				'size'   => true, 
				'height' => true, 
				'style'  => true, 
				'case'   => true, 
				'color'  => true, 
			),
			'std' => array(
				'family' => 'Trebuchet', 
				'subset' => false,
				'weight' => false,
				'size'   => false,
				'height' => false,
				'style'  => 'italic',
				'case'   => false,
				'color'  => false,
			),
			'class' => ''
		);

# MAIN TAB - Choice Options
# =============================================================================================
$options[] = array(
	'id'   => 'choice-options',
	'name' => __('Choice Options', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'mdi-tune'
);
	
	# SUB TAB - Choice
	# *****************************************************************************************
	// $options[] = array(
		// 'id'   => 'choice',
		// 'name' => __('Choice', 'dilaz-panel'),
		// 'type' => 'subheading',
	// );
	
		# FIELDS - Choice options
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'radioimage',
			'name' => __('Radio Image:', 'dilaz-panel'),
			'desc' => __('Images used as radio option fields.', 'dilaz-panel'),
			'type' => 'radioimage',
			'options' => array(
				'teal.css'  => $parameters['dir_url'] .'assets/images/colors/teal.png',
				'cyan.css'  => $parameters['dir_url'] .'assets/images/colors/cyan.png',
				'amber.css' => $parameters['dir_url'] .'assets/images/colors/amber.png',
			),
			'std'   => 'amber.css',
			'class' => ''
		);
		$options[] = array(
			'id'   => 'radio',
			'name' => __('Radio:', 'dilaz-panel'),
			'desc' => __('Tiled radio options selection.', 'dilaz-panel'),
			'type' => 'radio',
			'options' => array(
				'one'   => __('One', 'dilaz-panel'), 
				'two'   => __('Two', 'dilaz-panel'),
				'three' => __('Three', 'dilaz-panel')
			),
			'std'   => 'two',
			'class' => '',
		);
		$options[] = array(
			'id'   => 'radio_inline',
			'name' => __('Radio Inline:', 'dilaz-panel'),
			'desc' => __('Inline radio options selection.', 'dilaz-panel'),
			'type' => 'radio',
			'options' => array(
				'one'   => __('One', 'dilaz-panel'),
				'two'   => __('Two', 'dilaz-panel'),
				'three' => __('Three', 'dilaz-panel'),
			),
			'std'   => 'two',
			'class' => '',
			'args'  => array('inline' => true),
		);
		$options[] = array(
			'id'   => 'multicheck',
			'name' => __('Multicheck:', 'dilaz-panel'),
			'desc' => __('Tiled multiple checkbox options selection.', 'dilaz-panel'),
			'type' => 'multicheck',
			'options' => array(
				'mon' => __('Monday', 'dilaz-panel'),
				'tue' => __('Tuesday', 'dilaz-panel'),
				'wed' => __('Wednesday', 'dilaz-panel'),
				'thu' => __('Thursday', 'dilaz-panel'),
				'fri' => __('Friday', 'dilaz-panel'),
				'sat' => __('Saturday', 'dilaz-panel'),
				'sun' => __('Sunday', 'dilaz-panel')
			),
			'std'   => array('thu', 'sat', 'sun'),
			'class' => '',
		);
		$options[] = array(
			'id'   => 'multicheck_inline',
			'name' => __('Multicheck Inline:', 'dilaz-panel'),
			'desc' => __('Inline multiple checkbox options selection.', 'dilaz-panel'),
			'type' => 'multicheck',
			'options' => array(
				'mon' => __('Monday', 'dilaz-panel'),
				'tue' => __('Tuesday', 'dilaz-panel'),
				'wed' => __('Wednesday', 'dilaz-panel'),
				'thu' => __('Thursday', 'dilaz-panel'),
				'fri' => __('Friday', 'dilaz-panel'),
				'sat' => __('Saturday', 'dilaz-panel'),
				'sun' => __('Sunday', 'dilaz-panel')
			),
			'std'   => array('tue', 'fri'),
			'class' => '',
			'args'  => array('inline' => true, 'cols' => 4),
		);
		$options[] = array(
			'id'    => 'checkbox',
			'name'  => __('Checkbox:', 'dilaz-panel'),
			'desc'  => __('Select the preferred layout type.', 'dilaz-panel'),
			'type'  => 'checkbox',
			'std'   => true,
			'class' => ''
		);
		$options[] = array(
			'id'   => 'term_select',
			'name' => __('Term Select:', 'dilaz-panel'),
			'desc' => '',
			'type' => 'queryselect',
			'std'  => '',
			'args' => array(
				'select2'      => 'select2multiple',
				'query_type'   => 'term',
				'placeholder'  => __('Select category', 'dilaz-panel'),
				'select2width' => '50%',
				'min_input'    => 1,
				'max_input'    => 100,
				'max_options'  => 10,
				'query_args'   => array(
					'taxonomy'   => 'category',
					'hide_empty' => false,
					'orderby'    => 'term_id',
					'order'      => 'ASC',
				),
			),
		);
		$options[] = array(
			'id'   => 'user_select',
			'name' => __('User Select:', 'dilaz-panel'),
			'desc' => '',
			'type' => 'queryselect',
			'std'  => '',
			'args' => array(
				'select2'      => 'select2multiple',
				'query_type'   => 'user',
				'placeholder'  => __('Select user', 'dilaz-panel'),
				'select2width' => '50%',
				'min_input'    => 1,
				'max_input'    => 100,
				'max_options'  => 10,
				'query_args'   => array(
					'orderby' => 'ID',
					'order'   => 'ASC',
				),
			),
		);
		$options[] = array(
			'id'   => 'post_select',
			'name' => __('Post Select:', 'dilaz-panel'),
			'desc' => '',
			'type' => 'queryselect',
			'std'  => '',
			'args' => array(
				'select2'      => 'select2multiple',
				'query_type'   => 'post',
				'placeholder'  => __('Type to select a post', 'dilaz-panel'),
				'select2width' => '50%',
				'min_input'    => 1,
				'max_input'    => 100,
				'max_options'  => 10,
				'query_args'   => array(
					'posts_per_page' => -1,
					'post_status'    => array('publish'),
					'post_type'      => array('post'),
					'order'          => 'ASC',
					'orderby'        => 'ID',
				),
			),
		);
		$options[] = array(
			'id'   => 'page_select',
			'name' => __('Page Select:', 'dilaz-panel'),
			'desc' => '',
			'type' => 'queryselect',
			'std'  => '',
			'args' => array(
				'select2'      => 'select2multiple',
				'query_type'   => 'page',
				'placeholder'  => __('Type to select a page', 'dilaz-panel'),
				'select2width' => '50%',
				'min_input'    => 1,
				'max_input'    => 100,
				'max_options'  => 10,
				'query_args'   => array(
					'posts_per_page' => -1,
					'post_status'    => array('publish'),
					'post_type'      => array('page'),
					'order'          => 'ASC',
					'orderby'        => 'ID',
				),
			),
		);
		$options[] = array(
			'id'   => 'select_multiple_two',
			'name' => __('"Select2" Multi-Select Field:', 'dilaz-panel'),
			'desc' => __('Select the preferred header type', 'dilaz-panel'),
			'type' => 'multiselect',
			'options' => array( 
				'one'   => __('One', 'dilaz-panel'), 
				'two'   => __('Two', 'dilaz-panel'),
				'three' => __('Three', 'dilaz-panel'),
				'four'  => __('Four', 'dilaz-panel')
			),
			'args'  => array( 'select2' => 'select2multiple' ),
			'std'   => 'normal',
			'class' => ''
		);
		$options[] = array(
			'id'   => 'select_multiple_one',
			'name' => __('Default Milti-Select Field:', 'dilaz-panel'),
			'desc' => __('Select the preferred header type', 'dilaz-panel'),
			'type' => 'multiselect',
			'options' => array( 
				'one'   => __('One', 'dilaz-panel'), 
				'two'   => __('Two', 'dilaz-panel'),
				'three' => __('Three', 'dilaz-panel'),
				'four'  => __('Four', 'dilaz-panel')
			),
			'std'   => 'normal',
			'class' => ''
		);
		$options[] = array(
			'id'   => 'select_two',
			'name' => __('"Select2" Select Field:', 'dilaz-panel'),
			'desc' => __('Select the preferred header type', 'dilaz-panel'),
			'type' => 'select',
			'options' => array( 
				'one'   => __('One', 'dilaz-panel'), 
				'two'   => __('Two', 'dilaz-panel'),
				'three' => __('Three', 'dilaz-panel'),
				'four'  => __('Four', 'dilaz-panel')
			),
			'args'  => array( 'select2' => 'select2single' ),
			'std'   => 'normal',
			'class' => ''
		);
		$options[] = array(
			'id'   => 'select_one',
			'name' => __('Default Select Field:', 'dilaz-panel'),
			'desc' => __('Select the preferred header type', 'dilaz-panel'),
			'type' => 'select',
			'options' => array( 
				'one'   => __('One', 'dilaz-panel'), 
				'two'   => __('Two', 'dilaz-panel'),
				'three' => __('Three', 'dilaz-panel'),
				'four'  => __('Four', 'dilaz-panel')
			),
			'std'   => 'normal',
			'class' => ''
		);
		
# TAB - Conditionals
# =============================================================================================
$options[] = array(
	'id'   => 'conditionals',
	'name' => __('Conditionals', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'mdi-toggle-switch'
);
	
	# SUB TAB - Conditionals
	# *****************************************************************************************
	// $options[] = array(
		// 'id'   => 'conditionals',
		// 'name' => __('Conditionals', 'dilaz-panel'),
		// 'type' => 'subheading',
	// );
		
		# FIELDS - Conditional options
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'	  => 'continent',
			'name'	  => __('Continent:', 'dilaz-panel'),
			'desc'	  => '',
			'type'	  => 'select',
			'options' => array(
				''   => __('Select Continent', 'dilaz-panel'),
				'eu' => __('Europe', 'dilaz-panel'),
				'na' => __('North America', 'dilaz-panel'),
			),
			'std'  => 'default',
			'args' => array('inline' => true),
		);
		$options[] = array(
			'id'      => 'eu_country',
			'name'    => __('Europe Country:', 'dilaz-panel'),
			'desc'    => '',
			'type'    => 'radio',
			'options' => array(
				'de' => __('Germany', 'dilaz-panel'),
				'gb' => __('United Kingdom', 'dilaz-panel'),
			),
			'std'      => 'default',
			'args'     => array('inline' => true),
			'req_args' => array(
				'continent' => 'eu'
			),
			'req_action' => 'show',
		);
		$options[] = array(
			'id'      => 'na_country',
			'name'    => __('North America Country:', 'dilaz-panel'),
			'desc'    => '',
			'type'    => 'radio',
			'options' => array(
				'us' => __('United States', 'dilaz-panel'),
				'ca' => __('Canada', 'dilaz-panel'),
			),
			'std'      => 'default',
			'args'     => array('inline' => true),
			'req_args' => array(
				'continent' => 'na'
			),
			'req_cond'   => 'AND',
			'req_action' => 'show',
		);
		$options[] = array(
			'id'      => 'de_division',
			'name'    => __('Germany Division:', 'dilaz-panel'),
			'desc'    => '',
			'type'    => 'multicheck',
			'options' => array(
				'hh' => __('Hamburg', 'dilaz-panel'),
				'be' => __('Berlin', 'dilaz-panel'),
				'sh' => __('Schleswig-Holstein', 'dilaz-panel'),
			),
			'std'      => 'default',
			'args'     => array('inline' => true),
			'req_args' => array(
				'continent'  => 'eu',
				'eu_country' => 'de'
			),
			'req_cond'   => 'AND',
			'req_action' => 'show',
		);
		$options[] = array(
			'id'      => 'gb_division',
			'name'    => __('United Kingdom Division:', 'dilaz-panel'),
			'desc'    => '',
			'type'    => 'multicheck',
			'options' => array(
				'abd' => __('Aberdeen City', 'dilaz-panel'),
				'bir' => __('Birmingham', 'dilaz-panel'),
				'lce' => __('Leicester', 'dilaz-panel'),
				'man' => __('Manchester', 'dilaz-panel'),
			),
			'std'      => 'default',
			'args'     => array('inline' => true),
			'req_args' => array(
				'continent'  => 'eu',
				'eu_country' => 'gb'
			),
			'req_cond'   => 'AND',
			'req_action' => 'show',
		);
		$options[] = array(
			'id'      => 'us_division',
			'name'    => __('US State:', 'dilaz-panel'),
			'desc'    => '',
			'type'    => 'multicheck',
			'options' => array(
				'wa' => __('Washington', 'dilaz-panel'),
				'oh' => __('Ohio', 'dilaz-panel'),
				'mt' => __('Montana', 'dilaz-panel'),
				'ga' => __('Georgia', 'dilaz-panel'),
			),
			'std'      => 'default',
			'args'     => array('inline' => true),
			'req_args' => array(
				'continent'  => 'na',
				'na_country' => 'us'
			),
			'req_cond'   => 'AND',
			'req_action' => 'show',
		);
		$options[] = array(
			'id'      => 'us_division',
			'name'    => __('Canada Division:', 'dilaz-panel'),
			'desc'    => '',
			'type'    => 'multicheck',
			'options' => array(
				'on' => __('Ontario', 'dilaz-panel'),
				'sk' => __('Saskatchewan', 'dilaz-panel'),
				'qc' => __('Quebec', 'dilaz-panel'),
			),
			'std'      => 'default',
			'args'     => array('inline' => true),
			'req_args' => array(
				'continent'  => 'na',
				'na_country' => 'ca'
			),
			'req_cond'   => 'AND',
			'req_action' => 'show',
		);
		
	
return wp_parse_args($options, $options);