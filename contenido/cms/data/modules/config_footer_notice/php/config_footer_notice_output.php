<?php

/**
 * description: copyright notice configurator
 *
 * @package Module
 * @subpackage ConfigFooterNotice
 * @version SVN Revision $Rev:$
 *
 * @author marcus.gnass@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

if (cRegistry::isBackendEditMode()) {

    $text = "CMS_HTML[2]";

    // use smarty template to output header text
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('label', mi18n("LABEL_FOOTNOTE"));
    $tpl->assign('text', $text);
    $tpl->display('get.tpl');
}

?>