<?php
defined('TYPO3') || die();


/**
 * Prevents defining global variables
 */
(function () {
	
    /**
     * Limit the number of images in "media" for gridelements contents
     */
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['columnsOverrides']['media']['config']['maxitems']=1;


    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['columnsOverrides']['bodytext']=[
                    'displayCond' =>'FIELD:tx_gridelements_backend_layout:=:GridElementHighlight',
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
                    'config' => [
                        'enableRichtext' => true,
                        'softref' => 'typolink_tag,images,email[subst],url',
                        'richtextConfiguration' => 'default'
                    ]
                ];
	$GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'] = '
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
		--palette--;;headers,
		bodytext,
		tx_gridelements_backend_layout,
		pi_flexform,
		tx_gridelements_children,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
		media,
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
		--palette--;;hidden,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
		--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,
		categories,
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription
	';  
})();




