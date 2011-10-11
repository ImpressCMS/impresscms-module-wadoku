<?php
/**
 * Configuring the amdin side menu for the module
 *
 * @copyright	(c) by René Sato
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		佐藤レネー René Sato <rene.sato@gmx.de>
 * @package		wadoku
 * @version		$Id$
 */

global $icmsConfig;

$adminmenu[] = array(
	"title" => _MI_WADOKU_JAPANESEWORDS,
	"link" => "admin/japaneseword.php");
$adminmenu[] = array(
	"title" => _MI_WADOKU_MODULEHELPS,
	"link" => "admin/modulehelp.php");


$module = icms::handler("icms_module")->getByDirname(basename(dirname(dirname(__FILE__))));

$headermenu[] = array(
	"title" => _PREFERENCES,
	"link" => "../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=" . $module->getVar("mid"));
$headermenu[] = array(
	"title" => _CO_ICMS_GOTOMODULE,
	"link" => ICMS_URL . "/modules/wadoku/");
$headermenu[] = array(
	"title" => _CO_ICMS_UPDATE_MODULE,
	"link" => ICMS_URL . "/modules/system/admin.php?fct=modulesadmin&amp;op=update&amp;module=" . basename(dirname(dirname(__FILE__))));
$headermenu[] = array(
	"title" => _MI_WADOKU_TEMPLATES,
	"link" => '../../system/admin.php?fct=tplsets&amp;op=listtpl&amp;tplset=' . $icmsConfig['template_set'] . '&amp;moddir=' . basename(dirname(dirname(__FILE__))));
$headermenu[] = array(
	"title" => _MODABOUT_ABOUT,
	"link" => ICMS_URL . "/modules/wadoku/admin/about.php");

unset($module_handler);