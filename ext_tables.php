<?php
defined('TYPO3_MODE') or die();

$contentElementIconFilePrefix = 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/ContentElements/';

/* Add default Static Typoscript */
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'My Provider extension for pages and content');

/* Add icons identifiers*/
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconRegistry->registerIcon(
	'genericicon',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . 'typo3logo.svg']
);
  
?>