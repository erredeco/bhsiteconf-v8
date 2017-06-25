<?php
defined('TYPO3_MODE') or die();

//Here I define a new content element "newtext" that is a copy of "text"!

//prevent defining global variables 
call_user_func(function () {

	/***************
	 * Add Content Element
	 */

	if (!is_array($GLOBALS['TCA']['tt_content']['types']['newtext'])) {
	    $GLOBALS['TCA']['tt_content']['types']['newtext'] = [];
	}

	/***************
	 * Add content element to selector list
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
