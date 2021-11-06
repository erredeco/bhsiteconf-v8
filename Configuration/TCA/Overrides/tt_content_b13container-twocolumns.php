<?php
defined('TYPO3_MODE') || die();

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
	            'b13-container-twocolumns', // CType
	            'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:b13container.twocolumns.title', // label
	            'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:b13container.twocolumns.description', // description
	            [
	                [
	                    ['name' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:layout.column.first', 'colPos' => 100],
	                    ['name' => 'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:layout.column.second', 'colPos' => 101]
	                ]
	            ] // grid configuration
	        )
	    )
	    // override default configurations
	    ->setIcon('twocolumns')
	    ->setSaveAndCloseInNewContentElementWizard(false)
	);


    /**
     * Define fields
     */
    $GLOBALS['TCA']['tt_content']['types']['b13-container-twocolumns'] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['types']['b13-container-twocolumns'],
        [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
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

})();
