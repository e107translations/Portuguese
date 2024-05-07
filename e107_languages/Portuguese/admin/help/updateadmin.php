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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/updateadmin.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Actualize a sua senha aqui.";
$ns -> tablerender( mb_convert_encoding("Ajuda para actualizar configurações", "HTML-ENTITIES", "ISO-8859-1"),  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
