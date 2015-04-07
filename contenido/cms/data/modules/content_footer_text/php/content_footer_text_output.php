<?php

/**
 * description: social media links
 *
 * @package Module
 * @subpackage ContentFooterText
 * @version SVN Revision $Rev:$
 *
 * @author marcus.gnass@4fb.de
 * @edited-by contact@chilliscope.de

 */

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

$text = "CMS_HTML[12]";

    // use smarty template to output header text
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('text', $text);
    $tpl->display('get.tpl');


?>