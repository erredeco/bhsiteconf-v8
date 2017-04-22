<?php
defined('TYPO3_MODE') or die();


$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] =[

//$GLOBALS['TCA']['tt_content']['columns']['image']['config']['overrideChildTca']['columns']['crop']['config']=[

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