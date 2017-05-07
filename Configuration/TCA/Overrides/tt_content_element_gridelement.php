<?php
defined('TYPO3_MODE') or die();



//prevent defining global variables 
call_user_func(function () {
$GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['columnsOverrides']['media']['config']['maxitems']=1;
});


