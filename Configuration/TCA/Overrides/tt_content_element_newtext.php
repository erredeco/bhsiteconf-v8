<?php
defined('TYPO3_MODE') or die();

//Here I define a new content element "newtext" that is a copy of "text"!

//prevent defining global variables 
call_user_func(function () {

	/***************
	 * Define some variables:
	 */

	$languageFilePrefix = 'LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:';
	$customLanguageFilePrefix = 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:';
	$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
	$tcaLanguageFilePrefix = 'LLL:EXT:lang/locallang_tca.xlf:';



	/***************
	 * Add Content Element
	 */

	if (!is_array($GLOBALS['TCA']['tt_content']['types']['newtext'])) {
	    $GLOBALS['TCA']['tt_content']['types']['newtext'] = [];
	}

	/***************
	 * Add content element to seletor list
	 */

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
	  [
	    'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.newtext.title',
	    'newtext',
	    'content-text'
	  ],
	'text',
	'after'
	);  
  
	/***************
	 * Assign Icon
	 */

	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['newtext'] = 'content-text'; 

	/***************
	 * Configure element type: copy the whole textmedia!  
	 */  

  	$GLOBALS['TCA']['tt_content']['types']['newtext'] = $GLOBALS['TCA']['tt_content']['types']['text'];  

});
