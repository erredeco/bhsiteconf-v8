<?php
/***************
 * Temporary variables
 */
$extensionKey = 'bhsiteconf';

//Register pageTs Config files for including at page level
$pageTsFolder = 'Configuration/TypoScript/TSconfig/Page/';

$pageTsStorages = [
    'AdmPanel.ts' 		=> 'Admin Panel',
    'TCEMAIN.ts' 		=> 'Set Page user and group permissions',
    '002.TCEFORM.ts' 	=> 'Modify interface'
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