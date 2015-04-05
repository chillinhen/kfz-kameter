<?php

/**
 * description: standard first header (H1)
 * Header will not be output if no or an empty text is given.
 *
 * @package Module
 * @subpackage ContentFooterText
 * @version SVN Revision $Rev:$
 *
 * @author contact@chilliscope.de
 * 
 */

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

if (cRegistry::isBackendEditMode()) {

    $text = "CMS_HTML[2]";

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('label', mi18n("LABEL_OPENING"));
$tpl->assign('text', $text);
$tpl->display('get.tpl');
}

?>