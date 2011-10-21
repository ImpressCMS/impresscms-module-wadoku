<?php
/**
 * Comment include file
 *
 * File holding functions used by the module to hook with the comment system of ImpressCMS
 *
 * @copyright	(c) by René Sato
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		佐藤レネー René Sato <rene.sato@gmx.de>
 * @package		wadoku
 * @version		$Id$
 */

function wadoku_com_update($japaneseword_id, $total_num) {
    $wadoku_japaneseword_handler = icms_getModuleHandler("japaneseword", basename(dirname(dirname(__FILE__))), "wadoku");
    $wadoku_japaneseword_handler->updateComments($japaneseword_id, $total_num);
}

function wadoku_com_approve(&$comment) {
    // notification mail here
}