<?php
defined('TYPO3_MODE') || die();

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
	 * Add icons identifiers
	 */
  	if (TYPO3_MODE === 'BE') {    
		$iconFilePrefix = 'EXT:bhsiteconf/Resources/Public/Icons/';  
		$iconIdentifiers = [   
			'accordion' => '350.b13container.accordion.svg',
			'additionalcontent-newtext' => '220.common.content.newtext.svg',
			'additionalcontent-simpleteaser' => '230.common.content.simpleteaser.svg',
			'additionalcontent-textteaser' => '250.common.content.textteaser.svg',
			'additionalcontent-videoteaser' => '240.common.content.videoteaser.svg',
			'container' =>  'interface-square-symbol.svg',
			'fourcolumns' => '330.b13container.fourcolumnscontainer.svg',	
			'genericicon' => 'typo3logo.svg',
			'highlight' => '370.gridelements.highlight.svg',   
			'tab' => '360.gridelements.tab.svg',
			'threecolumns' => '320.b13container.threecolumns.svg',			
			'twocolumns' => '310.b13container.twocolumns.svg'
  		];  
  
    	foreach ($iconIdentifiers as $iconIdentifier => $iconFile) {
  			\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class)->registerIcon(
  				$iconIdentifier,
  				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
  				['source' => $iconFilePrefix .$iconFile]
  			);
      	}
  	}

/* Old method (not much different, only call each time the function):

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconFilePrefix = 'EXT:bhsiteconf/Resources/Public/Icons/ContentElements/';

	$iconRegistry->registerIcon(
		'genericicon',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	  ['source' => $iconFilePrefix . 'typo3logo.svg']
	); 


	$iconRegistry->registerIcon(
		'tab',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	  ['source' => $iconFilePrefix . '001-tabs.svg']
	); 

	$iconRegistry->registerIcon(
		'accordion',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	  ['source' => $iconFilePrefix . '002-accordion-menu.svg']
	); 

	$iconRegistry->registerIcon(
		'threecolumns',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	  ['source' => $iconFilePrefix . '003-three-columns-layout.svg']
	); 

	$iconRegistry->registerIcon(
		'twocolumns',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	  ['source' => $iconFilePrefix . '004-two-columns-layout.svg']
	); 

	$iconRegistry->registerIcon(
		'container',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	  ['source' => $iconFilePrefix . '005-full-display-layout-interface-square-symbol.svg']
	); 

	$iconRegistry->registerIcon(
		'fourcolumns',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	  ['source' => $iconFilePrefix . '006-four-columns-layout-interface-symbol.svg']
	); 

*/
	/** 
	 * Configuration for CKEditor 
	 */
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['myfull'] = 'EXT:bhsiteconf/Configuration/RTE/myfull.yaml';

});