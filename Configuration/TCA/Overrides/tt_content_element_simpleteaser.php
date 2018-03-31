<?php
defined('TYPO3_MODE') || die();

//Here I define a new content element "simpleteaser"!

//prevent defining global variables 
call_user_func(function () {

	/***************
	 * Add Content Element
	 */

	if (!is_array($GLOBALS['TCA']['tt_content']['types']['simpleteaser'])) {
	    $GLOBALS['TCA']['tt_content']['types']['simpleteaser'] = [];
	}

	/***************
	 * Add content element to selector list
	 */

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
	  [
	    'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.simpleteaser.title',
	    'simpleteaser',
	    'content-textpic'
	  ],
	'simpletext',
	'after'
	);  
  
	/***************
	 * Assign Icon
	 */

	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['simpleteaser'] = 'content-textpic'; 



	/***************
	 * Define fields
	 */



	$GLOBALS['TCA']['tt_content']['types']['simpleteaser'] = array_replace_recursive(
	    $GLOBALS['TCA']['tt_content']['types']['simpleteaser'],
	    [
	        'showitem' => '
	            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
	                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
	                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
	                bodytext,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,                    
	            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
	                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
	                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
	            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
	                --palette--;;language,
	            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
	                --palette--;;hidden,
	                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
	            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
	                categories,
	            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
	                rowDescription,
	            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
	        ',
	        'columnsOverrides' => [

	            'bodytext' => [
	                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
	                'config' => [
	                    'enableRichtext' => true,
	                    'richtextConfiguration' => 'default'
	                ]
	            ],
	            'image' => [
    				    'config' => [
    				      'maxitems' => 1
    				    ]
	            ]
	        ]
	    ]
	);

});
