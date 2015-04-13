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
</title><link rel="stylesheet" type="text/css" href="//localhost:8888/kfz-kameter/contenido/cms/cache/chi_start.css" id="m20" />

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
<meta name="description" content="Unfallinstandsetzung und Inspektionen aller Fabrikate • TÜV/AU • Restaurationen" />
<meta name="keywords" content="allumfassenden, zuverlässigen, service, vielseitiger, fachbetrieb, innovativer, aller, gründung, fahrzeuge, fabrikate, verfolgen, betreuen, unseren, unserer" />
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
$cCurrentModule = 0;
$cCurrentContainer = 206;
?>

                </div>
            </div>


            <div id="content" class="row clearfix">
                <div id="slider" class="col-md-12">
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
<teaser><title><![CDATA[]]></title><category><![CDATA[99]]></category><count><![CDATA[4]]></count><style><![CDATA[cms_teaser_slider.html]]></style><manual><![CDATA[false]]></manual><start><![CDATA[true]]></start><source_head><![CDATA[CMS_HTMLHEAD]]></source_head><source_head_count><![CDATA[1]]></source_head_count><source_text><![CDATA[CMS_HTML]]></source_text><source_text_count><![CDATA[2]]></source_text_count><source_image><![CDATA[CMS_IMG]]></source_image><source_image_count><![CDATA[100]]></source_image_count><filter><![CDATA[]]></filter><sort><![CDATA[sortsequence]]></sort><sort_order><![CDATA[asc]]></sort_order><character_limit><![CDATA[120]]></character_limit><image_width><![CDATA[960]]></image_width><image_height><![CDATA[350]]></image_height><manual_art><array_value><![CDATA[134]]></array_value><array_value><![CDATA[135]]></array_value><array_value><![CDATA[136]]></array_value><array_value><![CDATA[137]]></array_value></manual_art><image_crop><![CDATA[false]]></image_crop><source_date><![CDATA[CMS_DATE]]></source_date><source_date_count><![CDATA[1]]></source_date_count></teaser>
', 1, array());

                    echo $teaser->generateTeaserCode();
                 ?><?php echo "";

mi18n("MORE");

?>

                </div>
                <div id="page-title" class="col-md-12">
                    <?php
$cCurrentModule = 1;
$cCurrentContainer = 105;
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
$header = "<p class=\"p1\">Unfallinstandsetzung und Inspektionen aller Fabrikate &bull; T&Uuml;V/AU &bull; Restaurationen</p>";

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
                <div id="logo-gallery" class="col-md-12">
                    <?php
$cCurrentModule = 19;
$cCurrentContainer = 106;
?><?php

/**
 * description: google map
 *
 * @package Module
 * @subpackage ContentPictureGallery
 * @version SVN Revision $Rev:$
 *
 * @author timo.trautmann@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

$filelistIndex = 1;

$art = new cApiArticleLanguage();
$art->loadByArticleAndLanguageId(cRegistry::getArticleId(), cRegistry::getLanguageId());
$contentValue = $art->getContent("FILELIST", $filelistIndex);

$filelist = new cContentTypeFilelist($contentValue, $filelistIndex, array());
$files = $filelist->getConfiguredFiles();

$pictures = array();

if (count($files) > 0) {
    foreach ($files as $file) {
        $path = 'upload/' . $file['path'] . '/' . $file['filename'];

        $record = array();
        $record['thumb'] = cApiImgScale($path, 319, 199);
        $record['lightbox'] = $path;
        $record['description'] = $file['metadata']['description'];
        $record['copyright'] = $file['metadata']['copyright'];

        array_push($pictures, $record);
    }
}

$tpl = cSmartyFrontend::getInstance();
$tpl->assign('pictures', $pictures);
$tpl->display('picture_gallery.tpl');

if (cRegistry::isBackendEditMode()) {
    echo "";?><?php
                    $fileList = new cContentTypeFilelist('<?xml version="1.0" encoding="utf-8"?>
<filelist><title><![CDATA[]]></title><style><![CDATA[cms_filelist_style_default.html]]></style><directories><array_value><![CDATA[referenzen]]></array_value></directories><incl_subdirectories><![CDATA[false]]></incl_subdirectories><manual><![CDATA[false]]></manual><sort><![CDATA[filename]]></sort><incl_metadata><![CDATA[false]]></incl_metadata><extensions><![CDATA[]]></extensions><sortorder><![CDATA[asc]]></sortorder><filesizefilter_from><![CDATA[0]]></filesizefilter_from><filesizefilter_to><![CDATA[0]]></filesizefilter_to><ignore_extensions><![CDATA[true]]></ignore_extensions><manual_files><![CDATA[]]></manual_files><filecount><![CDATA[0]]></filecount><md_description_limit><![CDATA[0]]></md_description_limit><md_medianame_limit><![CDATA[0]]></md_medianame_limit><md_copyright_limit><![CDATA[0]]></md_copyright_limit><md_keywords_limit><![CDATA[0]]></md_keywords_limit><md_internal_notice_limit><![CDATA[0]]></md_internal_notice_limit><creationdatefilter_from><![CDATA[DD.MM.YYYY]]></creationdatefilter_from><creationdatefilter_to><![CDATA[DD.MM.YYYY]]></creationdatefilter_to><modifydatefilter_from><![CDATA[DD.MM.YYYY]]></modifydatefilter_from><modifydatefilter_to><![CDATA[DD.MM.YYYY]]></modifydatefilter_to></filelist>
', 1, array());

                    echo $fileList->generateFileListCode();
                 ?><?php echo "";
}

?>

                </div>

                <div id="sidebar" class="col-md-4">
                    <?php
$cCurrentModule = 51;
$cCurrentContainer = 220;
?><?php

/**
 * description: standard second header (H2)
 * Header will not be output if no or an empty text is given.
 *
 * @package Module
 * @subpackage ContentHeaderThird
 * @version SVN Revision $Rev:$
 * @subauthor chilliscope
 * @author marcus.gnass@4fb.de
 * @copyright four for business AG <www.4fb.de>
 * @license http://www.contenido.org/license/LIZENZ.txt
 * @link http://www.4fb.de
 * @link http://www.contenido.org
 */

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

// get header from content type HTMLHEAD with index 2
$header = "<p>Aktionen</p>";

// When in backend edit mode add a label so the author
// knows what to type in the shown field.
// When not in backend edit mode any tags are removed
// for the template is responsible for displaying the
// given text as a header.
if (cRegistry::isBackendEditMode()) {
    $label = mi18n("LABEL_HEADER_THIRD");
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
$cCurrentModule = 21;
$cCurrentContainer = 230;
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
<teaser><title><![CDATA[Aktionen]]></title><category><![CDATA[13]]></category><count><![CDATA[1]]></count><style><![CDATA[cms_teaser_image.html]]></style><manual><![CDATA[false]]></manual><start><![CDATA[true]]></start><source_head><![CDATA[CMS_HTMLHEAD]]></source_head><source_head_count><![CDATA[1]]></source_head_count><source_text><![CDATA[CMS_HTMLHEAD]]></source_text><source_text_count><![CDATA[2]]></source_text_count><source_image><![CDATA[CMS_IMG]]></source_image><source_image_count><![CDATA[100]]></source_image_count><filter><![CDATA[]]></filter><sort><![CDATA[creationdate]]></sort><sort_order><![CDATA[asc]]></sort_order><character_limit><![CDATA[999]]></character_limit><image_width><![CDATA[108]]></image_width><image_height><![CDATA[130]]></image_height><manual_art><![CDATA[65]]></manual_art><image_crop><![CDATA[false]]></image_crop><source_date><![CDATA[CMS_DATE]]></source_date><source_date_count><![CDATA[1]]></source_date_count></teaser>
', 2, array());

                    echo $teaser->generateTeaserCode();
                 ?><?php echo "";

mi18n("MORE");

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
$cCurrentModule = 0;
$cCurrentContainer = 90;
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
$header = "<p class=\"p1\">Hans Kameter Karosseriefachbetrieb</p>";

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
$text = "<h3 class=\"p1\">Service aller Fabrikate</h3>
<p class=\"p2\">Wir sehen uns als innovativer und vielseitiger Fachbetrieb, betreuen seit unserer Gr&uuml;ndung Fahrzeuge aller Marken und jeden Alters und verfolgen das Ziel, unseren Kunden einen zuverl&auml;ssigen und allumfassenden Service rund um ihr Auto zu bieten.</p>";

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

<script src="//localhost:8888/kfz-kameter/contenido/cms/cache/chi_start.js" type="text/javascript"></script></body>

</html>