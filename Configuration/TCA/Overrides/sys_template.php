<?php
defined('TYPO3_MODE') or die();

/* Add default Static Typoscript */
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('bhsiteconf', 'Configuration/TypoScript', 'My Provider extension for pages and content');

/* Add icons identifiers*/
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$contentElementIconFilePrefix = 'EXT:bhsiteconf/Resources/Public/Icons/ContentElements/';

$iconRegistry->registerIcon(
	'genericicon',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . 'typo3logo.svg']
); 