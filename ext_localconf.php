<?php

if (! defined('TYPO3_MODE')) {
    die('Access denied.');
}

/* Add default TSConfig Typoscript */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
  '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $_EXTKEY . '/Configuration/TypoScript/TSconfig/Shared/Pages" extensions="ts">'
  );

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
  <INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $_EXTKEY . '/Configuration/TypoScript/TSconfig/Shared/Users" extensions="ts">'
  );

