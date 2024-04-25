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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/image.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "A partir daqui você pode permitir/proibir que os usuários postem imagens no site, definam o método de redimensionamento e visualizem avatares carregados.";
$ns -> tablerender("Ajuda de imagens",  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
