<?php
defined('TYPO3_MODE') or die();

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
	            '4:3' => [
	                'title' => 'quattroterzi',
	                'value' => 4 / 3
	            ],
	            'NaN' => [
	                'title' => 'libero',
	                'value' => 0
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
	                'value' => 0
	            ]            
	        ]
	    ]
    ]
];
