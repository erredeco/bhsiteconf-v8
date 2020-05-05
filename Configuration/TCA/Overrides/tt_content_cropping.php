<?php
defined('TYPO3_MODE') || die();


/**
 * Prevents defining global variables
 */
(function () {
	
    /**
     * Temporary variables
     */
	$defaultCropSettings = [
	    'title' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:option.default',
	    'allowedAspectRatios' => [
	        '16:9' => [
	            'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
	            'value' => 16 / 9
	        ],
	        '4:3' => [
	            'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
	            'value' => 4 / 3
	        ],
	        '1:1' => [
	            'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
	            'value' => 1.0
	        ],
	        'NaN' => [
	            'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
	            'value' => 0.0
	        ],
	    ],
	    'selectedRatio' => 'NaN',
	    'cropArea' => [
	        'x' => 0.0,
	        'y' => 0.0,
	        'width' => 1.0,
	        'height' => 1.0,
	    ]
	];

    /**
     * Let's define the other settings by copying the first one and just change the title :)
     */	
	$mediumCropSettings = $defaultCropSettings;
	$mediumCropSettings['title'] = 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:option.medium';
	$smallCropSettings = $defaultCropSettings;
	$smallCropSettings['title'] = 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:option.small';



	/** 
	 * Textmedia Content element 
	 */
	$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['default'] = $defaultCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['medium'] = $mediumCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['small'] = $smallCropSettings ;

	/** 
	 * Image content element
	 */
	$GLOBALS['TCA']['tt_content']['types']['image']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['default'] = $defaultCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['image']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['medium'] = $mediumCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['image']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['small'] = $smallCropSettings ;

	/** 
	 * Textpic content element 
	 */
	$GLOBALS['TCA']['tt_content']['types']['textpic']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['default'] = $defaultCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['textpic']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['medium'] = $mediumCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['textpic']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['small'] = $smallCropSettings ;

	/** 
	 * Simpleteaser content element
	 */
	$GLOBALS['TCA']['tt_content']['types']['simpleteaser']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['default'] = $defaultCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['simpleteaser']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['medium'] = $mediumCropSettings ;
	$GLOBALS['TCA']['tt_content']['types']['simpleteaser']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] ['cropVariants']['small'] = $smallCropSettings ;



// 'old' config
/*
//1. valid ONLY for CTYPE textmedia
//$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] =[


//2. valid for ALL the CTYPES that use the image field
$GLOBALS['TCA']['tt_content']['columns']['image']['config']['overrideChildTca']['columns']['crop']['config']=[

	'cropVariants' => [

	    'default' => [
	        'title' => 'default',
	        'selectedRatio' => 'NaN',
	        'allowedAspectRatios' => [
	            '16:9' => [
	                'title' => 'Test 1',
	                'value' => 16 / 9
	            ],
	            '1:1' => [
	                'title' => 'Uno a uno',
	                'value' => 1.0
	            ],
	            'NaN' => [
	                'title' => 'libero',
	                'value' => 0.0
	            ]            
	        ]
	    ],

	    'mobile' => [
	        'title' => 'mobile',
	        'selectedRatio' => 'NaN',
	        'allowedAspectRatios' => [
	            '4:3' => [
	                'title' => 'quattroterzi',
	                'value' => 4 / 3
	            ],
	            'NaN' => [
	                'title' => 'libero',
	                'value' => 0.0
	            ]            
	        ]
	    ]
    ]
];
*/

});