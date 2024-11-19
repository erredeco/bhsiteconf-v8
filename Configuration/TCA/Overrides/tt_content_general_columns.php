<?php
defined('TYPO3') || die();

/**
 * Prevents defining global variables
 */
(function () {
	
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


	$GLOBALS['TCA']['tt_content']['columns']['readmore_label'] = [
	    'exclude' => true,
	    'label' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:field.readmore_label',
	    'config' => [
	        'type' => 'input',
	        'eval' => 'trim',
	        'size' => 50,
	        'max' => 255
	    ]
	];


	$GLOBALS['TCA']['tt_content']['columns']['readmore_link'] = [
	    'exclude' => true,
	    'label' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:field.readmore_link',
	    'config' => [
	        'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    ],
                ],
            ],
            'softref' => 'typolink'                
	    ]
	];

})();

