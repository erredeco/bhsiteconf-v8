<?php

defined('TYPO3') or die('Access denied.');

/**
 * Prevents defining global variables
 */
call_user_func(function () {

	/** 
	 * Add default TSConfig Typoscript per pages 
	 */
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'<INCLUDE_TYPOSCRIPT: source="DIR:EXT:bhsiteconf/Configuration/TypoScript/TSconfig/Shared/Pages" extensions="typoscript">'
	);

	/** 
	 * Add default TSConfig Typoscript per be usergroups 
	 */
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
		<INCLUDE_TYPOSCRIPT: source="DIR:EXT:bhsiteconf/Configuration/TypoScript/TSconfig/Shared/Users" extensions="typoscript">'
	);

	/** 
	 * Configuration for CKEditor 
	 */
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['myfull'] = 'EXT:bhsiteconf/Configuration/RTE/myfull.yaml';

});