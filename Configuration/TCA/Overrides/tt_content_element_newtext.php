<?php
defined('TYPO3_MODE') || die();

/** 
 * Here I define a new content element "newtext" that is a copy of "text"!
 */

/**
 * Prevents defining global variables
 */
call_user_func(function () {

    /**
     * Add Content Element
     */
	if (!is_array($GLOBALS['TCA']['tt_content']['types']['newtext'])) {
	    $GLOBALS['TCA']['tt_content']['types']['newtext'] = [];
	}

	/**
	 * Add content element to selector list
	 */

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
	[
	    'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.newtext.title',
	    'newtext',
	    'additionalcontent-newtext'
	],
	'text',
	'after'
	);  
  
	/**
	 * Assign Icon
	 */

	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['newtext'] = 'additionalcontent-newtext'; 

    /**
     * Define fields
     */
    //OLD: I copied the whole element, but now I've added the flexform, so I had to add it to the TCA; if you remove the flexform, just use this to copy the config of the standard "text" CType
    //$GLOBALS['TCA']['tt_content']['types']['newtext'] = $GLOBALS['TCA']['tt_content']['types']['text'];  

    $GLOBALS['TCA']['tt_content']['types']['newtext'] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['types']['newtext'],
        [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,pi_flexform,
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
                    'config' => [
                        'enableRichtext' => true,
                        'richtextConfiguration' => 'default'
                    ]
                ]
            ]
        ]
    );

    /**
     * Add flexForms for content element configuration
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:bhsiteconf/Configuration/FlexForms/newtext.xml',
        'newtext'
    );
});