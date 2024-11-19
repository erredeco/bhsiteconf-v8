<?php
defined('TYPO3') || die();

/**
 * Prevents defining global variables
 */
(function () {
	
    /**
     * Temporary variables
     */

    /**
     * Add Content Element
     */
	\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	    (
	        new \B13\Container\Tca\ContainerConfiguration(
	            'b13-container-accordionelement', // CType
	            'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:b13container.accordion_element.title', // label
	            'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:b13container.accordion_element.description', // description
	            [
	                [
	                    ['name' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:layout.column.first', 'colPos' => 100]
	                ]
	            ] // grid configuration
	        )
	    )
	    // override default configurations
	    ->setIcon('container')
	    ->setSaveAndCloseInNewContentElementWizard(false)
	);


    /**
     * Define fields
     */
    $GLOBALS['TCA']['tt_content']['types']['b13-container-accordionelement'] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['types']['b13-container-accordionelement'],
        [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                    pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            '
        ]
    );

    /**
     * Add flexForms for content element configuration
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:bhsiteconf/Configuration/FlexForms/container_ffaccordion_element.xml',
        'b13-container-accordionelement'
    );    

})();
