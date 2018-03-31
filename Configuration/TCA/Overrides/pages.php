<?php
defined('TYPO3_MODE') || die();

//prevent defining global variables 
call_user_func(function () {
    /***************
     * Temporary variables
     */
    
    /* Register pageTs Config files for including at page level */
    $pageTsFolder = 'Configuration/TypoScript/TSconfig/Page/';
    
    $pageTsStorages = [
        'AdmPanel.typoscript' 		=> 'Admin Panel',
        '002.TCEFORM.typoscript' 	=> 'Modify interface',
        '010.page.layout.home.typoscript' => 'Layout for Home Page',
        '020.page.layout.default.typoscript' => 'Layout for all pages',
        '220.common.content.newtext.typoscript' => 'New plain text content element',
        '230.common.content.simpleteaser.typoscript' => 'New Simple Teaser content element',
        '240.common.content.videoteaser.typoscript' => 'New Video Teaser content element',
        '250.common.content.textteaser.typoscript' => 'New Text with Teaser content element',
        '310.gridelements.twocolumnscontainer.typoscript' => 'Grid Element, Two columns container',
      	'320.gridelements.threecolumnscontainer.typoscript' => 'Grid Element, Three columns container',
      	'330.gridelements.fourcolumnscontainer.typoscript' => 'Grid Element, Four columns container',
      	'350.gridelements.accordion.typoscript' => 'Grid Element, Accordion',
      	'360.gridelements.tab.typoscript' => 'Grid Element, Tabs',
        '500.RTE.default.typoscript' => 'Default RTE Configuration',
        '502.RTE.styles.typoscript' => 'Allowed styles for RTE links'
    ];
    
    /***************
     * Register PageTS
     */

    foreach ($pageTsStorages as $configFile => $name) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            'bhsiteconf',
            $pageTsFolder . $configFile,
            $name
        );
    }

});