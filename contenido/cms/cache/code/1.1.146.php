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
</title><link rel="stylesheet" type="text/css" href="//localhost:8888/kfz-kameter/contenido/cms/cache/chi-text.css" id="m22" />

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

    <meta name="robots" content="index, follow" />
<meta name="generator" content="CMS CONTENIDO 4.9" />
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta name="author" content="Systemadministrator" />
<meta name="description" content="Über uns" />
<meta name="keywords" content="(karosseriebaumeister), karosseriefachbetrieb, auftragsabwicklung•, fahrzeugorientierten, kundenkontakt•, entwickeltunsere, professionellen, unkomplizierten, gegründetder, individuellen, fachgerechte, fachpersonal, insbesondere, langjährige" />
</head>

    <body>

        <div id="page" class="container">

            <div id="header" class="row">
                <div id="meta-nav">
                    <?php
$cCurrentModule = 26;
$cCurrentContainer = 399;
?><?php

/**
 * description: top navigation
 *
 * @package Module
 * @subpackage NavigationTop
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
$rootIdcat = getEffectiveSetting('navigation_top', 'idcat', 1);
$depth = getEffectiveSetting('navigation_top', 'depth', 3);

// get category tree
$categoryHelper = cCategoryHelper::getInstance();
$categoryHelper->setAuth(cRegistry::getAuth());
$tree = $categoryHelper->getSubCategories($rootIdcat, $depth);

// get path (breadcrumb) of current category
if (!function_exists("navigation_top_filter")) {
	function navigation_top_filter(cApiCategoryLanguage $categoryLanguage) {
		return $categoryLanguage->get('idcat');
	}
}
$path = array_map('navigation_top_filter', $categoryHelper->getCategoryPath(cRegistry::getCategoryId(), 1));

// use template to display navigation
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('tree', $tree);
$tpl->assign('path', $path);
$tpl->display('get.tpl');

?>

                </div>
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

/**
 * description: copyright notice
 *
 * @package Module
 * @subpackage ContentServiceLabel
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

    $text = $article->getContent('CMS_HTML', 3);

    // use smarty template to output header text
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('text', $text);
    $tpl->display('get.tpl');
}

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
    $imageEditor = "<img id=\"m15\" src=\"\" alt=\"\" title=\"\" />";
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
                    <div id="breadcrumb" class="clearfix">
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
$header = "<p>&Uuml;ber uns</p>";

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
$cCurrentModule = 0;
$cCurrentContainer = 115;
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
$text = "<p><span>Unser Karosseriefachbetrieb wurde im Jahre 1985 gegr&uuml;ndet.</span><br /><span>Der Inhaber Hans Kameter (Karosseriebaumeister) garantiert Ihnen durch langj&auml;hrige Erfahrung und geschultes Fachpersonal eine fachgerechte und kompetente Kontrolle, Wartung und Reparatur Ihres Fahrzeugs mit modernster Technik. Dank unserer individuellen und fahrzeugorientierten Betreuung hat sich seit Jahren ein sehr zufriedener und treuer Kundenkreis entwickelt.</span><br /><span>Unsere Werkstatt zeichnet sich insbesondere durch</span><br /><span>&bull; direkten Kundenkontakt</span><br /><span>&bull; professionellen und unkomplizierten Service</span><br /><span>&bull; schnelle Auftragsabwicklung</span><br /><span>&bull; und faire Preise aus</span></p>";

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

                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 125;
?>

                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 130;
?>

                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 135;
?>

                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 140;
?>

                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 145;
?>

                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 150;
?>

                </div>
            </div>
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
                    <ul class="nav-container clearfix">
                        <li class="search"><!--<container id="320" name="searchform_top" types="navigation" mode="fixed" default="navigation_searchform_top">searchform_top</container>--></li>

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
$cCurrentModule = 55;
$cCurrentContainer = 330;
?><?php

/**
 * description: copyright notice
 *
 * @package Module
 * @subpackage ContentFooterNotice
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

    $text = $article->getContent('CMS_HTML', 2);

    // use smarty template to output header text
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('text', $text);
    $tpl->display('get.tpl');
}

?>

                        <div class="col-sm-12"><?php
$cCurrentModule = 0;
$cCurrentContainer = 340;
?>
</div>
                    </div>
                </div>
                <div class="col-md-offset-4 col-md-8">
                    <div id="copyright">
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

<script src="//localhost:8888/kfz-kameter/contenido/cms/cache/chi-text.js" type="text/javascript"></script></body>

</html>