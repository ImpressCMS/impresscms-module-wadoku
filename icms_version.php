<?php
/**
 * wadoku version infomation
 *
 * This file holds the configuration information of this module
 *
 * @copyright	(c) by René Sato
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		佐藤レネー René Sato <rene.sato@gmx.de>
 * @package		wadoku
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

/**  General Information  */
$modversion = array(
	"name"						=> _MI_WADOKU_MD_NAME,
	"version"					=> 1.0,
	"description"				=> _MI_WADOKU_MD_DESC,
	"author"					=> "佐藤レネー René Sato",
	"credits"					=> "ドイツ語と日本語。「独和辞典」の略。⇔ 和独 (deutsch-japanisches Wörterbuch - Abk.: WaDoku)",
	"help"						=> "",
	"license"					=> "GNU General Public License (GPL)",
	"official"					=> 0,
	"dirname"					=> basename(dirname(__FILE__)),
	"modname"					=> "wadoku",

/**  Images information  */
	"iconsmall"					=> "images/icon_small.png",
	"iconbig"					=> "images/icon_big.png",
	"image"						=> "images/icon_big.png", /* for backward compatibility */

/**  Development information */
	"status_version"			=> "1.0",
	"status"					=> "RC",
	"date"						=> "28.01.2012",
	"author_word"				=> "",
	"warning"					=> _CO_ICMS_WARNING_BETA,

/** Contributors */
	"developer_website_url"		=> "http://japan.internet-box.info/",
	"developer_website_name"	=> "japan.internet-box.info",
	"developer_email"			=> "rene.sato@gmx.de",

/** Administrative information */
	"hasAdmin"					=> 1,
	"adminindex"				=> "admin/index.php",
	"adminmenu"					=> "admin/menu.php",

/** Install and update informations */
	"onInstall"					=> "include/onupdate.inc.php",
	"onUpdate"					=> "include/onupdate.inc.php",

/** Search information */
	"hasSearch"					=> 1,
	"search"					=> array("file" => "include/search.inc.php", "func" => "wadoku_search"),

/** Menu information */
	"hasMain"					=> 1,
	
/** Notification information */
	"hasNotification"			=> 0,
	
/** Comments information */
	"hasComments"				=> 1,
	"comments"					=> array(
									"itemName" => "japaneseword_id",
									"pageName" => "japaneseword.php",
									"callbackFile" => "include/comment.inc.php",
									"callback" => array("approve" => "wadoku_com_approve",
									"update" => "wadoku_com_update")));

/** other possible types: testers, translators, documenters and other */
$modversion['people']['developers'][] = "[url=http://www.impresscms.de/]佐藤レネー René Sato[/url]";

/** Manual */
//$modversion['manual']['wiki'][] = "<a href='http://www.impresscms.de/' target='_blank'>Hilfe</a>";

/** Database information */
$modversion['object_items'][1] = 'japaneseword';
$modversion['object_items'][] = 'modulehelp';

$modversion["tables"] = icms_getTablesArray($modversion['dirname'], $modversion['object_items']);

/** Templates information */
$modversion['templates'] = array(
	array("file" => "wadoku_admin_japaneseword.html", "description" => "japaneseword Admin Index"),
	array("file" => "wadoku_japaneseword.html", "description" => "japaneseword Index"),
	array("file" => "wadoku_admin_modulehelp.html", "description" => "modulehelp Admin Index"),
	array("file" => "wadoku_modulehelp.html", "description" => "modulehelp Index"),

	array('file' => 'wadoku_header.html', 'description' => 'Module Header'),
	array('file' => 'wadoku_footer.html', 'description' => 'Module Footer'));

/** Blocks information */
$modversion['blocks'][1] = array(
	"file"						=> "wadoku_random_wadoku.php",
	"name"						=> _MI_WADOKU_RANDOM_WADOKU,
	"description"				=> _MI_WADOKU_RANDOM_WADOKUDSC,
	"show_func"					=> "wadoku_random_wadoku_show",
	"edit_func"					=> "wadoku_random_wadoku_edit",
	"options"					=> "0",
	"template"					=> "wadoku_random_wadoku.html");

/** Preferences information */
global $icmsConfig;

$i=0;
$i++;
$modversion['config'][$i] = array(
								'name' 			=> 'show_breadcrumbs',
								'title' 		=> '_MI_WADOKU_SHOW_BREADCRUMBS',
								'description' 	=> '_MI_WADOKU_SHOW_BREADCRUMBS_DSC',
								'formtype' 		=> 'yesno',
								'valuetype' 	=> 'int',
								'default' 		=>  1
							);

/** Notification information */
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'wadoku_notify_iteminfo';

$modversion['notification']['category'][1] = array (
	'name'				=> 'global',
	'title'				=> _MI_WADOKU_GLOBAL_NOTIFY,
	'description'		=> _MI_WADOKU_GLOBAL_NOTIFY_DSC,
	'subscribe_from'	=> array('japaneseword.php')
);
$modversion['notification']['event'][2] = array(
	'name'				=> 'new_vocabulary',
	'category'			=> 'global',
	'title'				=> _MI_WADOKU_GLOBAL_NEW_VOC_NOTIFY,
	'caption'			=> _MI_WADOKU_GLOBAL_NEW_VOC_NOTIFY_CAP,
	'description'		=> _MI_WADOKU_GLOBAL_NEW_VOC_NOTIFY_DSC,
	'mail_template'		=> 'new_vocabulary',  //create a mail template
	'mail_subject'		=> _MI_WADOKU_GLOBAL_NEW_VOC_NOTIFY_SBJ
);
$modversion['notification']['event'][3] = array(
	'name'				=> 'vocabulary_modified',
	'category'			=> 'global',
	'title'				=> _MI_WADOKU_GLOBAL_VOC_NOTIFY,
	'caption'			=> _MI_WADOKU_GLOBAL_VOC_NOTIFY_CAP,
	'description'		=> _MI_WADOKU_GLOBAL_VOC_NOTIFY_DSC,
	'mail_template'		=> 'vocabulary_modified',  //create a mail template
	'mail_subject'		=> _MI_WADOKU_GLOBAL_VOC_NOTIFY_SBJ
);
