<?php
defined('TYPO3_MODE') or die();

//Here I define a new content element "simpleteaser"!

//prevent defining global variables 
call_user_func(function () {

	/***************
	 * Define some variables:
	 */

	$languageFilePrefix = 'LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:';
	$customLanguageFilePrefix = 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:';
	$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
	$tcaLanguageFilePrefix = 'LLL:EXT:lang/locallang_tca.xlf:';
	$formLanguageFilePrefix = 'LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:';



	/***************
	 * Add Content Element
	 */

	if (!is_array($GLOBALS['TCA']['tt_content']['types']['simpleteaser'])) {
	    $GLOBALS['TCA']['tt_content']['types']['simpleteaser'] = [];
	}

	/***************
	 * Add content element to seletor list
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
	            --div--;' . $formLanguageFilePrefix . 'general,
	                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
	                --palette--;' . $frontendLanguageFilePrefix . 'palette.headers;headers,
	                teaser,
	                bodytext,

                --div--;' . $frontendLanguageFilePrefix . 'tabs.images,
                    image,
                    --palette--;' . $frontendLanguageFilePrefix . 'palette.imagelinks;imagelinks,                    
	            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
	                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
	                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
	            --div--;' . $formLanguageFilePrefix . 'language,
	                --palette--;;language,
	            --div--;' . $formLanguageFilePrefix . 'access,
	                --palette--;;hidden,
	                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
	            --div--;' . $formLanguageFilePrefix . 'categories,
	                categories,
	            --div--;' . $formLanguageFilePrefix . 'notes,
	                rowDescription,
	            --div--;' . $formLanguageFilePrefix . 'extended,
	        ',
	        'columnsOverrides' => [

	            'bodytext' => [
	                'label' => $frontendLanguageFilePrefix . ':bodytext_formlabel',
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
