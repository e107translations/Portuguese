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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/filemanager.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Você pode gerenciar os arquivos em seu diretório /files nesta página. Se você estiver recebendo uma mensagem de erro sobre permissões durante o carregamento, faça CHMOD no diretório para o qual você está tentando fazer carregamento para 777.";
$ns -> tablerender("Ajuda do Gerenciador de Arquivos",  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
