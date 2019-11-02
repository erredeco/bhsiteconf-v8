<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bhsiteconf".
 *
 * 15-06-2019 16:15
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => 'My Provider extension for pages and content',
	'description' => 'Templates for my site, content and pages',
	'category' => 'misc',
	'shy' => 0,
	'version' => '0.0.5',
	'dependencies' => 'cms,extbase,fluid,vhs',
	'conflicts' => '',
	'priority' => 'bottom',
	'loadOrder' => '',
	'module' => '',
	'state' => 'experimental',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Riccardo De Contardi',
	'author_email' => 'erredeco@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => [
		'depends' => [
			'typo3' => '9.5.0-9.5.99',
			'vhs' => '5.1.0-5.9.9',
			'gridelements' => '9.0.0-9.9.9'      
		],
		'conflicts' => [
		],
		'suggests' => [
		],
	],
    'autoload' => [
        'psr-4' => [
            'Erredeco\\Bhsiteconf\\' => 'Classes'
        ],
    ],

];
