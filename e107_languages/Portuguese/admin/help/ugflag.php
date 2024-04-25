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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/ugflag.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Se você estiver atualizando o e107 ou apenas precisar que seu site fique offline por um tempo, basta marcar a caixa de manutenção e seus visitantes serão redirecionados para uma página explicando que o site está fora do ar para reparos. Depois de terminar, desmarque a caixa para retornar o site ao normal.";

$ns -> tablerender( mb_convert_encoding("Manutenção", "HTML-ENTITIES", "ISO-8859-1"),  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
