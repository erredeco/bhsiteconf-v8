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
	            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
	            'value' => 16 / 9
	        ],
	        'NaN' => [
	            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
	            'value' => 0.0
	        ],
	    ],
	    'selectedRatio' => 'NaN',
	    'cropArea' => [
	        'x' => 0.0,
	        'y' => 0.0,
	        'width' => 1.0,
	        'height' => 1.0,
	    ],

		'coverAreas' => [
	        'cover' => [
		        'x' => 0.05,
		        'y' => 0.85,
		        'width' => 0.9,
		        'height' => 0.1
	        ]
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
	 * media field in pages
	 */
	$GLOBALS['TCA']['pages']['columns']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'] = $defaultCropSettings ;
	$GLOBALS['TCA']['pages']['columns']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['medium'] = $mediumCropSettings ;
	$GLOBALS['TCA']['pages']['columns']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['small'] = $smallCropSettings ;


/* //'old' config

$GLOBALS['TCA']['pages']['columns']['media']['config']['overrideChildTca']['columns']['crop']['config']=[
	'cropVariants' => [

	    'default' => [
	        'title' => 'default',
	        'selectedRatio' => 'NaN',
	        'allowedAspectRatios' => [
	            '16:9' => [
	                'title' => 'sedicinoni',
	                'value' => 16 / 9
	            ],

	            'NaN' => [
	                'title' => 'libero',
	                'value' => 0
	            ]            
	        ]
	    ],

	    'medium' => [
	        'title' => 'mobile',
	        'selectedRatio' => 'NaN',
	        'allowedAspectRatios' => [
	            '4:3' => [
	                'title' => 'quattroterzi',
	                'value' => 4 / 3
	            ],
	            'NaN' => [
	                'title' => 'libero',
	                'value' => 0
	            ]            
	        ]
	    ]
    ]
];
*/

})();
