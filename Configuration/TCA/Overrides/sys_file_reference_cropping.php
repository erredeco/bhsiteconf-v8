<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']=[
    'type' => 'imageManipulation',
	'cropVariants' => [

	    'default' => [
	        'title' => 'default',
	        'selectedRatio' => 'NaN',
	        'allowedAspectRatios' => [
	            '5:4' => [
	                'title' => 'cinquequarti',
	                'value' => 5 / 4
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
	            '7:3' => [
	                'title' => 'setteatre',
	                'value' => 7 / 3
	            ],
	            '3:1' => [
	                'title' => 'treauno',
	                'value' => 3.0
	            ],	 

	            '2:1' => [
	                'title' => 'dueauno',
	                'value' => 2.0
	            ],	            
	            'NaN' => [
	                'title' => 'libero',
	                'value' => 0.0
	            ]            
	        ]
	    ]
    ]
];
