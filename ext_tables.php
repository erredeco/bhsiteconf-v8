<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\DataHandling\PageDoktypeRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Prevents defining global variables
 */

(function()
{
    /**
     * Temporary variables
     */

     defined('TYPO3') or die();
     
     // Define a new doktype
     $customPageDoktype = 116;
     // Add page type to system
     $dokTypeRegistry = GeneralUtility::makeInstance(PageDoktypeRegistry::class);
     $dokTypeRegistry->add(
         $customPageDoktype,
         [
             'type' => 'web',
             'allowedTables' => '*',
         ],
     );

})();