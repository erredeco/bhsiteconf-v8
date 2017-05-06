<?php
defined('TYPO3_MODE') or die();

/***************
 * Temporary variables
 */

$extensionKey = 'bhsiteconf';

/* Add default TSConfig Typoscript per be usergroups */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
  <INCLUDE_TYPOSCRIPT: source="DIR:EXT:'.$extensionKey.'/Configuration/TypoScript/TSconfig/Shared/Users" extensions="ts">'
  );