<?php
defined('CON_FRAMEWORK') or die('Illegal call');

?>
<!DOCTYPE html>

<!-- start page layout -->

<html lang="de">

    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />

        <title><?php
$cCurrentModule = 10;
$cCurrentContainer = 10;
?><?php
/**
 * This module handles the content of the title element.
 *
 * @package Module
 * @subpackage HeadTitle
 * @version SVN Revision $Rev:$
 *
 * @author dominik.ziegler@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

$breadcrumb = array();

// get category path
$helper = cCategoryHelper::getInstance();
foreach ($helper->getCategoryPath(cRegistry::getCategoryId(), 1) as $categoryLang) {
    $breadcrumb[] = $categoryLang->get('name');
}

// load current article information
$article = new cApiArticleLanguage();
$article->loadByArticleAndLanguageId(cRegistry::getArticleId(), cRegistry::getLanguageId());
$headline = strip_tags($article->getContent('CMS_HTMLHEAD', 1));

// append headline of article if existing
if ($headline != '') {
    $breadcrumb[] = $headline;
}

if ($headline === '') {
    $breadcrumb[] = mi18n("STARTPAGE");
}

array_shift($breadcrumb);

if (count($breadcrumb) > 0) {
    echo implode(' - ', $breadcrumb);
}

?>
</title><link rel="stylesheet" type="text/css" href="//localhost:8888/kfz-kameter/contenido/cms/cache/chi-standard.css" id="m7" />

        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,400italic,700italic,300,700,500italic,300italic,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/media.css" />
        <link rel="stylesheet" type="text/css" href="css/contenido_backend.css" />
        <link rel="stylesheet" type="text/css" href="css/myStyle.css" />

        <!--[if IE 8]>
            <link type="text/css" rel="stylesheet" href="css/ie_8.css" media="all" />
        <![endif]-->

    <meta name="generator" content="CMS CONTENIDO 4.9" />
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta name="author" content="Systemadministrator" />
<meta name="description" content="Basisystem" />
<meta name="keywords" content="contenido, soap, pdf, übersetzungsschlüssel, frontendmitteilungen, massenübersetzung, unterschiedliche, fehlermeldungen, benutzergruppen, einfach, ausgabemedien, versionierung, verwaltungsmöglichkeiten, installation, multimandantenfähigkeit" />
</head>

    <body>

        <div id="page" class="container">

            <div id="header" class="row">
                <div class="col-md-4 vcenter logo-container">
                    <h1><?php
$cCurrentModule = 33;
$cCurrentContainer = 205;
?><?php

/**
 * description: site logo
 *
 * @package Module
 * @subpackage LayoutLogo
 * @version SVN Revision $Rev:$
 *
 * @author timo.trautmann@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

$clientConfig = cRegistry::getClientConfig(cRegistry::getClientId());

// use template to display navigation
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('href', $clientConfig['path']['htmlpath']);
$tpl->display('get_chi.tpl');

?>
</h1>
                </div>
                <div class="col-md-4 vcenter nav-container">
                    <?php
$cCurrentModule = 8;
$cCurrentContainer = 212;
?><?php

/**
 * description: main navigation
 *
 * @package Module
 * @subpackage NavigationMain
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

// get client settings
$rootIdcat = getEffectiveSetting('navigation_main', 'idcat', 1);
$depth = getEffectiveSetting('navigation_main', 'depth', 3);

// get category tree
$categoryHelper = cCategoryHelper::getInstance();
$categoryHelper->setAuth(cRegistry::getAuth());
$tree = $categoryHelper->getSubCategories($rootIdcat, $depth);

// get path (breadcrumb) of current category
$filter = create_function('cApiCategoryLanguage $item', 'return $item->get(\'idcat\');');
$path = array_map($filter, $categoryHelper->getCategoryPath(cRegistry::getCategoryId(), 1));

// use template to display navigation
$smarty = cSmartyFrontend::getInstance();
$smarty->assign('ulId', 'navigation');
$smarty->assign('tree', $tree);
$smarty->assign('path', $path);
$smarty->display('get.tpl');

?>

                </div>
                <div class="col-md-4 vcenter service-label">
                    <?php
$cCurrentModule = 48;
$cCurrentContainer = 206;
?><?php
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
$text = "";

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_SERVICE");
} else {
    $label = NULL;
}

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('label', $label);
$tpl->assign('text', $text);
$tpl->display('get.tpl');

?>

                </div>
            </div>


            <div id="content" class="row clearfix">
                <div id="slider" class="col-md-12">
                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 100;
?>

                </div>
                <div id="page-title" class="col-md-12">
                <?php
$cCurrentModule = 0;
$cCurrentContainer = 105;
?>

                </div>
                <div id="logo-gallery" class="col-md-12">
                    <?php
$cCurrentModule = 5;
$cCurrentContainer = 106;
?><?php

/**
 * description: standard image
 *
 * @package Module
 * @subpackage ContentImage
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

// get image source from content type IMG with index 1
$imageSource = "";
// get description as content type IMGDESCR with index 1
$imageDescription = "";

// get editor as content type IMGEDITOR with index 1
// skip IMGEDITOR in frontend cause it displays the image too!
if (cRegistry::isBackendEditMode()) {
    $imageEditor = "<img id=\"m1\" src=\"\" alt=\"\" title=\"\" />";
}

// build class containing all data necessary to display image
// therefor the image dimensions have to be determined
if (0 < strlen($imageSource)) {
    $clientConfig = cRegistry::getClientConfig(cRegistry::getClientId());
    $filename = str_replace($clientConfig["upl"]["htmlpath"], $clientConfig["upl"]["path"], $imageSource);
    list($imageWidth, $imageHeight) = getimagesize($filename);
    $image = new stdClass();
    $image->src = $imageSource;
    $image->alt = $imageDescription;
    $image->width = $imageWidth;
    $image->height = $imageHeight;
} else {
    $image = NULL;
}

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_IMAGE");
} else {
    $label = NULL;
}

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('label', $label);
$tpl->assign('editor', $imageEditor);
$tpl->assign('image', $image);
$tpl->display('get.tpl');

?>

                </div>

                <div id="sidebar" class="col-md-4">
                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 220;
?>

                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 230;
?>

                    <?php
$cCurrentModule = 8;
$cCurrentContainer = 240;
?><?php

/**
 * description: main navigation
 *
 * @package Module
 * @subpackage NavigationMain
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

// get client settings
$rootIdcat = getEffectiveSetting('navigation_main', 'idcat', 1);
$depth = getEffectiveSetting('navigation_main', 'depth', 3);

// get category tree
$categoryHelper = cCategoryHelper::getInstance();
$categoryHelper->setAuth(cRegistry::getAuth());
$tree = $categoryHelper->getSubCategories($rootIdcat, $depth);

// get path (breadcrumb) of current category
$filter = create_function('cApiCategoryLanguage $item', 'return $item->get(\'idcat\');');
$path = array_map($filter, $categoryHelper->getCategoryPath(cRegistry::getCategoryId(), 1));

// use template to display navigation
$smarty = cSmartyFrontend::getInstance();
$smarty->assign('ulId', 'navigation');
$smarty->assign('tree', $tree);
$smarty->assign('path', $path);
$smarty->display('get.tpl');

?>

                </div>
                <div id="main" class="col-md-8">
                    <div id="breadcrumb">
                        <?php
$cCurrentModule = 14;
$cCurrentContainer = 90;
?><?php

/**
 * This module handles the breadcrumb output.
 *
 * @package Module
 * @subpackage NavigationBreadcrumb
 * @version SVN Revision $Rev:$
 *
 * @author dominik.ziegler@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

// get category path
$categoryHelper = cCategoryHelper::getInstance();
$categoryHelper->setAuth(cRegistry::getAuth());
$categories = $categoryHelper->getCategoryPath(cRegistry::getCategoryId(), 1);

// get breadcrumb (w/o first level)
$breadcrumb = array();
foreach ($categories as $categoryLang) {
    $breadcrumb[] = $categoryLang;
}
array_shift($breadcrumb);

$headline = '';

// // optionally load current article headline
// $article = new cApiArticleLanguage();
// $article->loadByArticleAndLanguageId(cRegistry::getArticleId(), cRegistry::getLanguageId());
// $headline = strip_tags($article->getContent('CMS_HTMLHEAD', 1));

// build template
$smarty = cSmartyFrontend::getInstance();
$smarty->assign('label_breadcrumb', mi18n("LABEL_BREADCRUMB"));
$smarty->assign('breadcrumb', $breadcrumb);
$smarty->assign('headline', $headline);
$smarty->display('get.tpl');

?>

                    </div>
                    <?php
$cCurrentModule = 2;
$cCurrentContainer = 110;
?><?php

/**
 * description: standard second header (H2)
 * Header will not be output if no or an empty text is given.
 *
 * @package Module
 * @subpackage ContentHeaderSecond
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

// get header from content type HTMLHEAD with index 2
$header = "";

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
// When not in backend edit mode any tags are removed
// for the template is responsible for displaying the
// given text as a header.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_HEADER_SECOND");
} else {
    $label = NULL;
    $header = str_replace('&nbsp;', ' ', $header);
    $header = strip_tags($header);
    $header = trim($header);
}

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('label', $label);
$tpl->assign('header', $header);
$tpl->display('get.tpl');

?>

                    <?php
$cCurrentModule = 4;
$cCurrentContainer = 120;
?><?php

/**
 * description: standard text
 *
 * @package Module
 * @subpackage ContentText
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

// get text from content type HTML with index 1
$text = "<ul>
<li>
<p class=\"FreieForm\"><strong>Eine Installation f&uuml;r viele Webseiten: </strong>Die Multimandantenf&auml;higkeit macht es m&ouml;glich, unterschiedliche Webseiten unabh&auml;ngig voneinander in nur einer einzigen CONTENIDO Installation zu pflegen und zu verwalten.<br /><br /></p>
</li>
<li>
<p class=\"FreieForm\"><strong>Vorlagen selbst erstellen: </strong>Einfache oder verschachtelte Seitenvorlagen werden in CONTENIDO ohne Programmierkenntnisse selbst erstellt. Zus&auml;tzlich kann zur Gestaltung der Webseite die externe Template Engine Smarty benutzt werden.<br /><br /></p>
</li>
<li>
<p class=\"FreieForm\"><strong>Mehrere Ausgabemedien integrieren: </strong>Ob mobile Website oder App, PDF, XML-Daten oder SOAP - unterschiedliche Ausgabemedien k&ouml;nnen separat synchronisiert und &uuml;ber die Mandantenverwaltung und Vorlagen verwaltet werden.<br /><br /></p>
</li>
<li>
<p class=\"FreieForm\"><strong>Massen&uuml;bersetzung: </strong>Labels, Frontendmitteilungen und Fehlermeldungen k&ouml;nnen &uuml;ber einen &Uuml;bersetzungsschl&uuml;ssel im System zentral und sehr einfach &uuml;bersetzt werden.<br /><br /></p>
</li>
<li><strong>Geschlossene Benutzergruppen</strong><strong>: </strong>CONTENIDO verf&uuml;gt &uuml;ber eine Frontend- und Backendverwaltung f&uuml;r die Benutzergruppen. So kann die redaktionelle Benutzergruppe (Backendzugriff) einfach von einer Zugriffsberechtigung f&uuml;r Kundengruppen bzw. Frontendbenutzer getrennt werden.<br /><br /></li>
<li>
<p class=\"FreieForm\"><strong>Systemverwaltung leicht gemacht: </strong>Umfangreiche Verwaltungsm&ouml;glichkeiten unterst&uuml;tzen die Administration. Erweiterungen k&ouml;nnen einfach und komfortabel &uuml;ber den Plugin Manager im Backend verwaltet werden.<br /><br /></p>
</li>
<li>
<p class=\"FreieForm\"><strong>Massen&uuml;bersetzung: </strong>Labels, Frontendmitteilungen und Fehlermeldungen k&ouml;nnen &uuml;ber einen &Uuml;bersetzungsschl&uuml;ssel im System zentral und sehr einfach &uuml;bersetzt werden.<br /><br /></p>
</li>
<li>
<p class=\"FreieForm\"><strong>Datenbankgest&uuml;tzte Versionierung: </strong>In CONTENIDO wird nicht nur der Inhalt versioniert, sondern auch die in der Website integrierten Funktionen k&ouml;nnen der Versionierung unterzogen werden. Zuk&uuml;nftig dient dies als Basis f&uuml;r eine frontendseitige Darstellung.<br /><br /></p>
</li>
</ul>
<p></p>";

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_TEXT");
} else {
    $label = NULL;
}

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('label', $label);
$tpl->assign('text', $text);
$tpl->display('get.tpl');

?>

                </div>
            </div>
            <div class="clear" ></div>
            <div id="footer" class="row">
                <div class="col-md-4 logo-container">
                    <?php
$cCurrentModule = 33;
$cCurrentContainer = 300;
?><?php

/**
 * description: site logo
 *
 * @package Module
 * @subpackage LayoutLogo
 * @version SVN Revision $Rev:$
 *
 * @author timo.trautmann@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

$clientConfig = cRegistry::getClientConfig(cRegistry::getClientId());

// use template to display navigation
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('href', $clientConfig['path']['htmlpath']);
$tpl->display('get_chi.tpl');

?>

                </div>
                <div class="col-md-8">
                    <ul class="nav-container">
                        <li class="search"><?php
$cCurrentModule = 25;
$cCurrentContainer = 320;
?><?php

/**
 * description: top search form
 *
 * @package Module
 * @subpackage NavigationSearchformTop
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

// get IDART of search result article
$searchResultIdart = getEffectiveSetting('navigation_searchform_top', 'search_result_idart');
$searchResultIdart = cSecurity::toInteger($searchResultIdart);

// check if plugin mod_rewrite is enabled
$isModRewriteEnabled = class_exists('ModRewrite') && ModRewrite::isEnabled();

// show search form only if search result article is defined
$action = $method = $label = $submit = '';
if (0 < $searchResultIdart) {

    // determine action & method for search form
    if ($isModRewriteEnabled) {
        $action = cUri::getInstance()->build(array(
            'idart' => $searchResultIdart,
            'lang' => cRegistry::getLanguageId()
        ));
    } else {
        $action = 'front_content.php';
    }

    // determine how the search request should be transmitted
    $method = 'GET';

    // determine label to be shown inside input field
    $label = mi18n("NAVIGATION_SEARCHFORM_TOP_LABEL");
    // this translation is optional
    if (false !== strpos($label, 'Module translation not found: ')) {
        $label = '';
    }

    // determine label to be shown on submit button
    $submit = mi18n("NAVIGATION_SEARCHFORM_TOP_SUBMIT");
    // this translation is optional
    if (false !== strpos($submit, 'Module translation not found: ')) {
        $submit = '';
    }
}

// use template to display search form
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('action', $action);
$tpl->assign('method', $method);
$tpl->assign('label', $label);
$tpl->assign('submit', $submit);
if (!$isModRewriteEnabled) {
    $tpl->assign('idart', $searchResultIdart);
    $tpl->assign('idlang', cRegistry::getLanguageId());
}
$tpl->display('get.tpl');

?>
</li>

                        <li class="footer-menu"><?php
$cCurrentModule = 8;
$cCurrentContainer = 310;
?><?php

/**
 * description: main navigation
 *
 * @package Module
 * @subpackage NavigationMain
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

// get client settings
$rootIdcat = getEffectiveSetting('navigation_main', 'idcat', 1);
$depth = getEffectiveSetting('navigation_main', 'depth', 3);

// get category tree
$categoryHelper = cCategoryHelper::getInstance();
$categoryHelper->setAuth(cRegistry::getAuth());
$tree = $categoryHelper->getSubCategories($rootIdcat, $depth);

// get path (breadcrumb) of current category
$filter = create_function('cApiCategoryLanguage $item', 'return $item->get(\'idcat\');');
$path = array_map($filter, $categoryHelper->getCategoryPath(cRegistry::getCategoryId(), 1));

// use template to display navigation
$smarty = cSmartyFrontend::getInstance();
$smarty->assign('ulId', 'navigation');
$smarty->assign('tree', $tree);
$smarty->assign('path', $path);
$smarty->display('get.tpl');

?>
</li>
                    </ul>

                    <div id="footer-infos" class="row">
                        <?php
$cCurrentModule = 52;
$cCurrentContainer = 330;
?><?php
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
$text = "";

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

                        <div class="col-sm-12"><?php
$cCurrentModule = 0;
$cCurrentContainer = 340;
?>
</div>
                    </div>
                </div>

                <div id="copyright" class="container">
                    <?php
$cCurrentModule = 17;
$cCurrentContainer = 400;
?><?php

/**
 * description: copyright notice
 *
 * @package Module
 * @subpackage ContentCopyrightNotice
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

$configIdart = getEffectiveSetting('footer_config', 'idart', 0);

if (0 < $configIdart) {

    $article = new cApiArticleLanguage($configIdart, true);

    $text = $article->getContent('CMS_HTML', 1);
    $text = str_replace('{year}', date('Y'), $text);

    // use smarty template to output header text
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('text', $text);
    $tpl->display('get.tpl');
}

?>

                </div>

            </div>

            <?php
$cCurrentModule = 0;
$cCurrentContainer = 510;
?>

            <?php
$cCurrentModule = 0;
$cCurrentContainer = 520;
?>

            <?php
$cCurrentModule = 38;
$cCurrentContainer = 999;
?><?php
/**
 * Description: Cookie Directive
 *
 * @package Module
 * @subpackage ScriptCookieDirective
 * @version SVN Revision $Rev:$
 *
 * @author ilia.schwarz
 * @author claus.schunk@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

if (!$contenido) {

    $session = cRegistry::getSession();

    if (array_key_exists('acceptCookie', $_GET)) {
        // Check value in get, if js is off
        $allowCookie = $_GET['acceptCookie'] === '1'? 1 : 0;
        setcookie('allowCookie', $allowCookie);

        // Save value
        $session->register('allowCookie');
    } elseif (array_key_exists('allowCookie', $_COOKIE)) {
        // Check value in cookies
        $allowCookie = $_COOKIE['allowCookie'] === '1'? 1 : 0;

        // Save value
        $session->register('allowCookie');
    }

    // Show notify
    if (!isset($allowCookie)) {

        $tpl = cSmartyFrontend::getInstance();

        // build translations
        $tpl->assign('trans', array(
            'title' => mi18n("TITLE"),
            'infoText' => mi18n("INFOTEXT"),
            'userInput' => mi18n("USERINPUT"),
            'accept' => mi18n("ACCEPT"),
            'decline' => mi18n("DECLINE")
        ));

        // build accept url
        $tpl->assign('pageUrlAccept', cUri::getInstance()->build(array(
            'idart' => cRegistry::getArticleId(),
            'lang' => cRegistry::getLanguageId(),
            'acceptCookie' => 1
        ), true));

        // build deny url
        $tpl->assign('pageUrlDeny', cUri::getInstance()->build(array(
            'idart' => cRegistry::getArticleId(),
            'lang' => cRegistry::getLanguageId(),
            'acceptCookie' => 0
        ), true));

        $tpl->display('get.tpl');

    }
}
?>


            <script type="text/javascript" charset="utf-8" src="js/jquery-1.8.2.min.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/jquery-ui-1.9.1.custom.min.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/jquery.touchSwipe.min.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/main.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/media.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/jquery.validate.js"></script>

            <script type="text/javascript" charset="utf-8" src="js/respond.min.js"></script>

    <script src="//localhost:8888/kfz-kameter/contenido/cms/cache/chi-standard.js" type="text/javascript"></script></body>

</html>