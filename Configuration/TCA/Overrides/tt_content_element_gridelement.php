<?php
defined('TYPO3_MODE') || die();


/**
 * Prevents defining global variables
 */
call_user_func(function()
{
    /**
     * Limit the number of images in "media" for gridelements contents
     */
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['columnsOverrides']['media']['config']['maxitems']=1;
    
});





