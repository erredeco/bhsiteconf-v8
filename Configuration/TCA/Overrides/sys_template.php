<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{

    /**
     * Default Static TypoScript for bhsiteconf
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'bhsiteconf',
        'Configuration/TypoScript',
        'My Provider extension for pages and content'
    );
});