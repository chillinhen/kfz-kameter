<?php
/*
Version: 2.0
Modulname: <Modulname>
Author(s): <Autorname>
Copyright: <Firmenname>
Created: 12-12-2000
Modified: 12-12-2000, <Autorname>, <Firmenname> 
*/
// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

// get text from content type HTML with index 1
$text = "CMS_HTML[10]";

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_FOOTER_TEXT");
} else {
    $label = NULL;
}

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('label', $label);
$tpl->assign('text', $text);
$tpl->display('get.tpl');

?>