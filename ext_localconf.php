<?php

if (! defined('TYPO3_MODE')) {
    die('Access denied.');
}






/* Add icons identifiers*/
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$contentElementIconFilePrefix = 'EXT:bhsiteconf/Resources/Public/Icons/ContentElements/';

$iconRegistry->registerIcon(
	'genericicon',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . 'typo3logo.svg']
); 


$iconRegistry->registerIcon(
	'tab',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . '001-tabs.svg']
); 

$iconRegistry->registerIcon(
	'accordion',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . '002-accordion-menu.svg']
); 

$iconRegistry->registerIcon(
	'threecolumns',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . '003-three-columns-layout.svg']
); 

$iconRegistry->registerIcon(
	'twocolumns',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . '004-two-columns-layout.svg']
); 

$iconRegistry->registerIcon(
	'container',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . '005-full-display-layout-interface-square-symbol.svg']
); 

$iconRegistry->registerIcon(
	'fourcolumns',
	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  ['source' => $contentElementIconFilePrefix . '006-four-columns-layout-interface-symbol.svg']
); 


/* Configuration for CKEditor */

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['myfull'] = 'EXT:bhsiteconf/Configuration/RTE/myfull.yaml';

