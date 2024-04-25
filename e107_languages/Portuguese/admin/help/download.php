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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/transferência.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Por favor, carregue seus arquivos no ".e_FILE."pasta de downloads, as suas imagens no ".e_FILE."pasta de imagens transferência e imagens em miniatura no ".e_FILE."pasta de miniaturas transferência.
<br /><br />
Para enviar um transferência, primeiro crie um pai e, em seguida, crie uma categoria nesse pai. Você poderá então disponibilizar o transferência.";
$ns -> tablerender("Ajuda Transferência", mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
