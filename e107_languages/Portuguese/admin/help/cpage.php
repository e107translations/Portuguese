<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/cpage.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "A partir desta área você pode criar menus e páginas personalizadas com seu próprio conteúdo.<br />Menus e páginas são vinculados para que você possa ter um menu facilmente vinculado de volta à página, se desejar.";
// $text .= "Please see <a href='http://docs.e107.org/Using Custom Pages and Custom Menus'>http://docs.e107.org/Using Custom Pages and Custom Menus</a> for an explanation of all the features.";

$ns -> tablerender(mb_convert_encoding("Ajuda de menus/páginas personalizadas", "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
