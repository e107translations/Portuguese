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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/links.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Insira todos os links do seu site aqui. Os links adicionados aqui serão mostrados no menu de navegação principal. Para outros links, use o plugin Links Page.
<br />
";
$ns -> tablerender("Ajuda de links",  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
