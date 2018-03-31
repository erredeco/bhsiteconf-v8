<?php
defined('TYPO3_MODE') || die();

/**
 * Prevents defining global variables
 */
call_user_func(function()
{
	/**
	 * Adjust columns for generic usage; I am adding to TCA the field "teaser" which is used by now by tt_content.textteaser
	 */
	$GLOBALS['TCA']['tt_content']['columns']['teaser'] = [
	    'label' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:field.teaser',
	    'exclude' => true,
	    'config' => [
	        'type' => 'text',
	        'softref' => 'rtehtmlarea_images,typolink_tag',
	        'cols' => '40',
	        'rows' => '3'
	    ]
	];
});

