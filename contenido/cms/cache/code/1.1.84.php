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
</title><link rel="stylesheet" type="text/css" href="//localhost:8888/kfz-kameter/contenido/cms/cache/chi_start.css" id="m17" />

        <link rel="stylesheet" type="text/css" href="css/reset.css" />
         <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
         <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <!--<link rel="stylesheet" type="text/css" href="css/main.css" />
        
        <link rel="stylesheet" type="text/css" href="css/media.css" />-->
        <link rel="stylesheet" type="text/css" href="css/myStyle.css" />
        <link rel="stylesheet" type="text/css" href="css/contenido_backend.css" />

        <!--[if IE 8]>
            <link type="text/css" rel="stylesheet" href="css/ie_8.css" media="all" />
        <![endif]-->

    <meta name="generator" content="CMS CONTENIDO 4.9" />
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta name="author" content="Systemadministrator" />
<meta name="description" content="" />
<meta name="keywords" content="" />
</head>

    <body>

        <div id="page" class="container">

            <header id="header" class="row">
                <div class="col-md-4">
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

                </div>
                <div class="col-md-4">
                    <?php
$cCurrentModule = 8;
$cCurrentContainer = 900;
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
                <div class="col-md-4">
                    <?php
$cCurrentModule = 0;
$cCurrentContainer = 206;
?>
<!-- ToDo -->
                </div>
            </header>

            <div id="content">
                <div class="row">
                    <div class="col-md-12">
                        <?php
$cCurrentModule = 20;
$cCurrentContainer = 100;
?><?php

/**
 * description: standard teaser - sliding element
 *
 * @package Module
 * @subpackage ContentTeaserSlider
 * @version SVN Revision $Rev:$
 *
 * @author timo.trautmann@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

echo "";?><?php
                    $teaser = new cContentTypeTeaser('<?xml version="1.0" encoding="utf-8"?>
<teaser><title>Startseite</title><category></category><count>4</count><style>cms_teaser_slider.html</style><manual>true</manual><start>false</start><source_head>CMS_HTMLHEAD</source_head><source_head_count>1</source_head_count><source_text>CMS_HTMLHEAD</source_text><source_text_count>2</source_text_count><source_image>CMS_IMG</source_image><source_image_count>100</source_image_count><filter></filter><sort>creationdate</sort><sort_order>asc</sort_order><character_limit>120</character_limit><image_width>920</image_width><image_height>280</image_height><manual_art><array_value>13</array_value><array_value>46</array_value><array_value>24</array_value><array_value>55</array_value></manual_art><image_crop>false</image_crop><source_date>CMS_DATE</source_date><source_date_count>1</source_date_count></teaser>
', 1, array());

                    echo $teaser->generateTeaserCode();
                 ?><?php echo "";

mi18n("MORE");

?>

                    </div>
                    <div class="col-md-12">
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
$header = "";

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

                    </div>
                    <div class="col-md-12">
                        <?php
$cCurrentModule = 21;
$cCurrentContainer = 130;
?><?php

/**
 * description: standard teaser - image teaser
 *
 * @package Module
 * @subpackage ContentTeaserImage
 * @version SVN Revision $Rev:$
 *
 * @author timo.trautmann@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

echo "";?><?php
                    $teaser = new cContentTypeTeaser('<?xml version="1.0" encoding="utf-8"?>
<teaser><category></category><count>4</count><style>cms_teaser_image.html</style><manual>true</manual><start>false</start><source_head>CMS_HTMLHEAD</source_head><source_head_count>1</source_head_count><source_text>CMS_HTMLHEAD</source_text><source_text_count>2</source_text_count><source_image>CMS_IMG</source_image><source_image_count>100</source_image_count><filter></filter><sort>creationdate</sort><sort_order>asc</sort_order><character_limit>120</character_limit><image_width>215</image_width><image_height>110</image_height><manual_art><array_value>66</array_value><array_value>67</array_value><array_value>68</array_value><array_value>65</array_value></manual_art><image_crop>true</image_crop><source_date>CMS_DATE</source_date><source_date_count>1</source_date_count></teaser>
', 2, array());

                    echo $teaser->generateTeaserCode();
                 ?><?php echo "";

mi18n("MORE");

?>

                    </div>
                </div>
                 <div class="row">
                     <div class="col-md-4">Aktionen...</div>
                     <div class="col-md-8"><?php
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
$text = "";

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
            </div>
            
            <footer id="footer" class="row">
                <div class="col-md-4">Logo</div>
                <div class="col-md-8">
                    <ul>
                        <li><?php
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
                        <li><?php
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
                        <li><?php
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
                    <?php
$cCurrentModule = 22;
$cCurrentContainer = 120;
?><?php

/**
 * description: standard teaser - text teaser
 *
 * @package Module
 * @subpackage ContentTeaserText
 * @version SVN Revision $Rev:$
 *
 * @author timo.trautmann@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

echo "";?><?php
                    $teaser = new cContentTypeTeaser('<?xml version="1.0" encoding="utf-8"?>
<teaser><category></category><count>6</count><style>cms_teaser_text.html</style><manual>true</manual><start>false</start><source_head>CMS_HTMLHEAD</source_head><source_head_count>1</source_head_count><source_text>CMS_HTMLHEAD</source_text><source_text_count>2</source_text_count><source_image>CMS_IMG</source_image><source_image_count>100</source_image_count><filter></filter><sort>creationdate</sort><sort_order>asc</sort_order><character_limit>120</character_limit><image_width>100</image_width><image_height>75</image_height><manual_art><array_value>32</array_value><array_value>19</array_value><array_value>58</array_value><array_value>61</array_value></manual_art><image_crop>false</image_crop><source_date>CMS_DATE</source_date><source_date_count>1</source_date_count></teaser>
', 3, array());

                    echo $teaser->generateTeaserCode();
                 ?><?php echo "";

mi18n("MORE");

?>

                </div>
            </footer>

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
         <script type="text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/main.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/media.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/jquery.validate.js"></script>

        <script type="text/javascript" charset="utf-8" src="js/respond.min.js"></script>
    <script src="//localhost:8888/kfz-kameter/contenido/cms/cache/chi_start.js" type="text/javascript"></script></body>

</html>