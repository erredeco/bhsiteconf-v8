<?php
defined('TYPO3') || die();

/**
 * Prevents defining global variables
 */

(function () {
    
    /**
     * Add Content Element
     */
    if (!is_array($GLOBALS['TCA']['tt_content']['types']['textteaser'] ?? false)) {
        $GLOBALS['TCA']['tt_content']['types']['textteaser'] = [];
    }

    /**
     * Add content element to selector list
     */
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['textteaser'] = 'content-text-teaser';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.textteaser.title',
            'textteaser',
            'additionalcontent-textteaser'
        ],
        'texticon',
        'after'
    );

    /**
     * Assign Icon
     */
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['textteaser'] = 'additionalcontent-textteaser'; 

    /**
     * Define fields
     */
    $GLOBALS['TCA']['tt_content']['types']['textteaser'] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['types']['textteaser'],
        [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                    teaser,
                    bodytext,
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
            ',
            'columnsOverrides' => [
                'bodytext' => [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
                    'config' => [
                        'enableRichtext' => true,
                        'softref' => 'typolink_tag,images,email[subst],url',
                        'richtextConfiguration' => 'default'
                    ]
                ]
            ]
        ]
    );

})();
