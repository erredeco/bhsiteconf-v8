<?php
defined('TYPO3') || die();

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
	/*  No more necessary here since TYPO3 11
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
	*/

	/** 
	 * Configuration for CKEditor 
	 */
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['myfull'] = 'EXT:bhsiteconf/Configuration/RTE/myfull.yaml';

});