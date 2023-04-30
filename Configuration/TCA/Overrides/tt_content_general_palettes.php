<?php

/*
 * This file is part of the package erredeco/bhsiteconf.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') || die();

/***************
 * Add Further Palettes for Generic usage
 */
$GLOBALS['TCA']['tt_content']['palettes']['readmore'] = [
    'showitem' => '
        readmore_label;LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:field.readmore_label,
        --linebreak--,
        readmore_link;LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:field.readmore_link
    '
];