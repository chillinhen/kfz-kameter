<?php
defined('CON_FRAMEWORK') or die('Illegal call');

?>
<!DOCTYPE html>

<!-- standard layout -->

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
</title><link rel="stylesheet" type="text/css" href="//localhost:8888/kfz-kameter/contenido/cms/cache/standard.css" id="m21" />

        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/media.css" />
        <link rel="stylesheet" type="text/css" href="css/contenido_backend.css" />

        <!--[if IE 8]>
            <link type="text/css" rel="stylesheet" href="css/ie_8.css" media="all" />
        <![endif]-->

    <meta name="generator" content="CMS CONTENIDO 4.9" />
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta name="author" content="Systemadministrator" />
<meta name="description" content="Überschrift über uns" />
<meta name="keywords" content="contenido, cms, einfach, philosophie, content, weiterentwicklung, deutschsprachigen, installationen, komplexität, modularität" />
</head>

    <body>

        <div id="page">

            <div id="header">
                <?php
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

                <ul id="navigation_header">
                    <li class="lang_changer">
                        <?php
$cCurrentModule = 24;
$cCurrentContainer = 211;
?><?php

/**
 * Description: Language changer
 *
 * @package Module
 * @subpackage NavigationLangChanger
 * @version SVN Revision $Rev:$
 *
 * @author alexander.scheider@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

// create instances and init vars
$catCollection = new cApiCategoryLanguageCollection();
$artCollection = new cApiArticleLanguageCollection();
$catArtCollection = new cApiCategoryArticleCollection();
$languageCollectionInstance = new cApiLanguageCollection();
$clientsLangInstance = new cApiClientLanguageCollection();
$languageInstance = new cApiLanguage();

$tpl = new cTemplate();
$nextLang = false;
$selectedLang = NULL;
$checkedCatArt = false;
$idcatAuto = cRegistry::getCategoryId();
$artRetItem = NULL;
$urlSet = false;
$currentLanguage = NULL;
$clientId = cRegistry::getClientId();

// get all client language id's
$clientsLangInstance->select("idclient= " . $clientId);
$resultClientLangs = $clientsLangInstance->fetchArray('idlang', 'idlang');

// get all active languages of a client
foreach ($resultClientLangs as $clientLang) {
    $languageInstance->loadByMany(array(
        'active' => '1',
        'idlang' => $clientLang
    ));
    if ($languageInstance->get('idlang')) {
        $allLanguages[] = $languageInstance->get('idlang');
    }
    $languageInstance = new cApiLanguage();
}

if (empty($allLanguages)) {
    // no active languages. handling was moved to include.front_content.php (lines 433 - 439).
} else if (count($allLanguages) != 1) {

    // else check if there more as one language
    $currentLanguage = cRegistry::getLanguageId();

    // set next language is exists
    foreach ($allLanguages as $langs) {
        if ($langs > $currentLanguage) {
            $tpl->set('s', 'label', $languageCollectionInstance->getLanguageName($langs));
            $tpl->set('s', 'title', $languageCollectionInstance->getLanguageName($langs));

            $selectedLang = $langs;
            $nextLang = true;
            break;
        }
    }

    // otherwise set first language
    if ($nextLang === false) {
        $languageName = $languageCollectionInstance->getLanguageName(reset($allLanguages));

        $tpl->set('s', 'label', $languageName);
        $tpl->set('s', 'title', $languageName);
        $selectedLang = reset($allLanguages);
    }

    // check category and articles, if category exists and has start article
    // which
    // is online and not locked the set check to true
    $catCheck = $catCollection->select("idcat = " . $idcatAuto . " AND " . " idlang = " . $selectedLang . " AND " . "startidartlang != 0", NULL, NULL, NULL);

    $catRetItem = new cApiCategoryLanguage();
    $catRetItem->loadByCategoryIdAndLanguageId($idcatAuto, $selectedLang);

    if ($catCheck === true && $catRetItem) {
        $artRetItem = $artCollection->fetchById($catRetItem->get('startidartlang'));
    }
    if ($artRetItem) {
        if ($artRetItem->get('online') == 1 && $artRetItem->get('locked') == 0) {
            $checkedCatArt = true;
        }
    }

    // if check is true then set url, otherwise check for next language
    if ($checkedCatArt === true) {
        $url = $catRetItem->getLink($selectedLang);
    } else {
        $config = cRegistry::getClientConfig(cRegistry::getClientId());
        $url = cRegistry::getFrontendUrl() . 'front_content.php?idart='.$idart.'&changelang=' . $selectedLang;
    }

    $tpl->set('s', 'url', $url);
    $tpl->generate('get.html');

}

?>

                    </li>
                    <li>
                        <?php
$cCurrentModule = 26;
$cCurrentContainer = 212;
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

                    </li>
                    <li>
                        <?php
$cCurrentModule = 25;
$cCurrentContainer = 213;
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
                </ul>
            </div>

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

            <div id="menu">
                <?php
$cCurrentModule = 8;
$cCurrentContainer = 100;
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

            <div id="content">
                <!--start:content-->
                <?php
$cCurrentModule = 1;
$cCurrentContainer = 110;
?><?php

/**
 * description: standard first header (H1)
 * Header will not be output if no or an empty text is given.
 *
 * @package Module
 * @subpackage ContentHeaderFirst
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

// get header from content type HTMLHEAD with index 1
$header = "<p>&Uuml;berschrift &uuml;ber uns</p>";

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
// When not in backend edit mode any tags are removed
// for the template is responsible for displaying the
// given text as a header.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_HEADER_FIRST");
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
$cCurrentModule = 2;
$cCurrentContainer = 120;
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
$header = "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
<p></p>
<p>Aenean commodo ligula eget</p>";

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
$cCurrentModule = 5;
$cCurrentContainer = 130;
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
$imageSource = "http://localhost:8888/kfz-kameter/contenido/cms/upload/slider/startseite/fotolia_73060760.jpg";
// get description as content type IMGDESCR with index 1
$imageDescription = "";

// get editor as content type IMGEDITOR with index 1
// skip IMGEDITOR in frontend cause it displays the image too!
if (cRegistry::isBackendEditMode()) {
    $imageEditor = "<img id=\"m14\" src=\"http://localhost:8888/kfz-kameter/contenido/cms/upload/slider/startseite/fotolia_73060760.jpg\" alt=\"\" title=\"\" />";
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

                <?php
$cCurrentModule = 4;
$cCurrentContainer = 140;
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
$text = "<h2>Hintergrund und Philosophie</h2>
<p>Das einfachste CMS f&uuml;r Ihre Webdienste ist das Resultat von &uuml;ber 10 Jahren Erfahrung und Weiterentwicklung. Die Philosophie von CONTENIDO ist und war schon immer die Einfachheit und Reduzierung der Komplexit&auml;t.</p>
<p>Im Inter-, Extra und Intranet, f&uuml;r mobile Websites, der Content Syndication oder als Content Provider f&uuml;r Shopsysteme hat sich das Content Management System CONTENIDO in zahlreichen Installationen bei namhaften Unternehmen bew&auml;hrt und geh&ouml;rt heute zu Recht zu einem der f&uuml;hrenden Open Source CMS im deutschsprachigen Raum.</p>
<p>Dabei wurde von Beginn an gro&szlig;en Wert auf die einfache Bedienung und die Modularit&auml;t des Systems gelegt.</p>
<p>Unsere Prinzipien: <a href=\"front_content.php?idart=66\">Einfach benutzen</a>, <a href=\"front_content.php?idart=67\">einfach grenzenlos</a>, <a href=\"front_content.php?idart=68\">einfach einfach</a>.</p>";

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
$cCurrentModule = 6;
$cCurrentContainer = 150;
?><?php

/**
 * description: standard date
 *
 * @package Module
 * @subpackage ContentDate
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
$date = " ";

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_DATE");
} else {
    $label = NULL;
}

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('label', $label);
$tpl->assign('date', $date);
$tpl->display('get.tpl');

?>

				<?php
$cCurrentModule = 23;
$cCurrentContainer = 160;
?><?php

/**
 * description: standard article doorway configuration
 *
 * Allows to select an imagewhich will be used as teaser image by the module
 * content_teaser_image.
 *
 * @package Module
 * @subpackage ContentTeaser
 * @version SVN Revision $Rev:$
 *
 * @author timo.trautmann@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

$tpl = cSmartyFrontend::getInstance();
$tpl->assign('isBackendEditMode', cRegistry::isBackendEditMode());
$tpl->assign('label', mi18n("LABEL_TEASERIMAGE"));
$tpl->assign('image', "http://localhost:8888/kfz-kameter/contenido/cms/upload/teaser/start.jpg");
$tpl->assign('editor', "<img id=\"m15\" src=\"http://localhost:8888/kfz-kameter/contenido/cms/upload/teaser/start.jpg\" alt=\"\" title=\"\" />");
$tpl->display('get.tpl');

?>

                <?php
$cCurrentModule = 0;
$cCurrentContainer = 170;
?>

                <?php
$cCurrentModule = 0;
$cCurrentContainer = 180;
?>

                <?php
$cCurrentModule = 0;
$cCurrentContainer = 190;
?>

                <?php
$cCurrentModule = 0;
$cCurrentContainer = 200;
?>

				<!--end:content-->
            </div>
            <div class="clear"></div>
            <div id="footer">
                <?php
$cCurrentModule = 7;
$cCurrentContainer = 210;
?><?php

/**
 * description: bottom navigation
 *
 * @package Module
 * @subpackage NavigationBottom
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

// read articles from defined cat, including its start article and ordering it
// by its custom order
$collector = new cArticleCollector(array(
    'idcat' => getEffectiveSetting('navigation_bottom', 'idcat', 1),
    'start' => true,
    'order' => 'sortsequence'
));

$articles = array();
foreach ($collector as $article) {
    $articles[] = array(
        'title' => $article->get('title'),
        'url' => cUri::getInstance()->build(array(
            'idart' => $article->get('idart'),
            'lang' => cRegistry::getLanguageId()
        ), true)
    );
}

// use smarty template to output header text
$tpl = cSmartyFrontend::getInstance();
$tpl->assign('articles', $articles);
$tpl->display('get.tpl');

?>

                <?php
$cCurrentModule = 9;
$cCurrentContainer = 220;
?><?php

/**
 * description: social media links
 *
 * @package Module
 * @subpackage NavigationSocialMedia
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

    $url = array(
        'rss' => $article->getContent('CMS_TEXT', 1),
        'facebook' => $article->getContent('CMS_TEXT', 2),
        'googleplus' => $article->getContent('CMS_TEXT', 3),
        'twitter' => $article->getContent('CMS_TEXT', 4),
        'xing' => $article->getContent('CMS_TEXT', 5)
    );

    // use smarty template to output header text
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('url', $url);
    $tpl->display('get.tpl');
}

?>

            </div>

            <div id="copyright">
                <?php
$cCurrentModule = 17;
$cCurrentContainer = 230;
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
$cCurrentModule = 12;
$cCurrentContainer = 310;
?><?php
/**
 * Description: Google Analytics Tracking
 *
 * @package Module
 * @subpackage ScriptTrackerGoogle
 * @version SVN Revision $Rev:$
 *
 * @author simon.sprankel@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

$account = getEffectiveSetting('stats', 'ga_account', '');

if (0 < strlen(trim($account)) && cRegistry::isTrackingAllowed() && !cRegistry::isBackendEditMode()) {
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('account', $account);
    $tpl->display('get.tpl');
}

?>

        <?php
$cCurrentModule = 13;
$cCurrentContainer = 320;
?><?php
/**
 * Description: Piwik Tracking
 *
 * @package Module
 * @subpackage ScriptTrackerPiwik
 * @version SVN Revision $Rev:$
 *
 * @author simon.sprankel@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

$url = getEffectiveSetting('stats', 'piwik_url', '');
$site = getEffectiveSetting('stats', 'piwik_site', '');

if (0 < strlen(trim($url)) && 0 < strlen(trim($site)) && cRegistry::isTrackingAllowed() && !cRegistry::isBackendEditMode()) {
    $tpl = cSmartyFrontend::getInstance();
    $tpl->assign('url', $url);
    $tpl->assign('site', $site);
    $tpl->display('get.tpl');
}

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

        <script type="text/javascript" charset="utf-8" src="js/velocity.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/velocity.ui.min.js"></script>

        <script type="text/javascript" charset="utf-8" src="js/respond.min.js"></script>
    <script src="//localhost:8888/kfz-kameter/contenido/cms/cache/standard.js" type="text/javascript"></script></body>

</html>