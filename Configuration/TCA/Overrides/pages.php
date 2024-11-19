<?php
defined('TYPO3') || die();

/**
 * Prevents defining global variables
 */
(function () {   
    /**
     * Temporary variables
     */    
    $pageTsFolder = 'Configuration/TypoScript/TSconfig/Page/';
    
    $pageTsStorages = [
        'AdmPanel.typoscript' => 'Admin Panel',
        '002.TCEFORM.typoscript' => 'Modify interface',
        '010.page.layout.home.typoscript' => 'Layout for Home Page',
        '020.page.layout.default.typoscript' => 'Layout for all pages',
        '220.common.content.newtext.typoscript' => 'New plain text content element',
        '230.common.content.simpleteaser.typoscript' => 'New Simple Teaser content element',
        '240.common.content.videoteaser.typoscript' => 'New Video Teaser content element',
        '250.common.content.textteaser.typoscript' => 'New Text with Teaser content element',
        '500.RTE.default.typoscript' => 'Default RTE Configuration',
        '502.RTE.styles.typoscript' => 'Allowed styles for RTE links'
    ];

    /** 
     * Register pageTs Config files for including at page level (page=>resources tab)
     */

    foreach ($pageTsStorages as $configFile => $name) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            'bhsiteconf',
            $pageTsFolder . $configFile,
            $name
        );
    }

    /** 
     * Custom doktypes
     */    
    // SAME as registered in ext_tables.php
    $customPageDoktype = 116;
    //Same as registered in /Configuration/Icons.php
    $customIconClass = 'tx-bhsiteconf-overview-page';

    // Add the new doktype to the page type selector
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'pages',
        'doktype',
        [
            'label' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:page.doktype.overview_page_type',
            'value' => $customPageDoktype,
            'icon'  => $customIconClass,
            'group' => 'default',
        ],
    );
    // Add the icon to the icon class configuration
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes'][$customPageDoktype] = $customIconClass;

})();