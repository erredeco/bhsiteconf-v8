<?php
defined('TYPO3_MODE') or die();

//prevent defining global variables 
call_user_func(function () {
    /***************
     * Temporary variables
     */
    $extensionKey = 'bhsiteconf';
    
    
    /* Register pageTs Config files for including at page level */
    $pageTsFolder = 'Configuration/TypoScript/TSconfig/Page/';
    
    $pageTsStorages = [
        'AdmPanel.ts' 		=> 'Admin Panel',
        '002.TCEFORM.ts' 	=> 'Modify interface',
        '220.common.content.newtext.ts' => 'New plain text content element',
        '230.common.content.simpleteaser.ts' => 'New Simple Teaser content element',
        '240.common.content.videoteaser.ts' => 'New Video Teaser content element',
        '310.gridelements.twocolumnscontainer.ts' => 'Grid Element, Two columns container',
      	'320.gridelements.threecolumnscontainer.ts' => 'Grid Element, Three columns container',
      	'330.gridelements.fourcolumnscontainer.ts' => 'Grid Element, Four columns container',
      	'350.gridelements.accordion.ts' => 'Grid Element, Accordion',
      	'360.gridelements.tab.ts' => 'Grid Element, Tabs',
    
        '500.RTE.default.ts' => 'Default RTE Configuration',
        '502.RTE.styles.ts' => 'Allowed styles for RTE links'
    ];
    
    /***************
     * Register PageTS
     */

    foreach ($pageTsStorages as $configFile => $name) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            $extensionKey,
            $pageTsFolder . $configFile,
            $name
        );
    }

});