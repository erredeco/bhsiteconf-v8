<?php

defined('TYPO3') or die('Access denied.');

/**
 * Prevents defining global variables
 */
call_user_func(function () {
	/** 
	 * Configuration for CKEditor 
	 */
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['myfull'] = 'EXT:bhsiteconf/Configuration/RTE/myfull.yaml';
});