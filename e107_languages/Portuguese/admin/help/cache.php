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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/cache.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Cache";
$text = "Se você tiver o cache ativado, isso melhorará enormemente a velocidade do seu site e minimizará o número de chamadas ao banco de dados SQL.<br /><br /><b>IMPORTANTE! Se você estiver criando seu próprio tema, desative o cache, caso contrário, quaisquer alterações feitas não serão refletidas imediatamente.</b>";
$ns -> tablerender($caption, mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
