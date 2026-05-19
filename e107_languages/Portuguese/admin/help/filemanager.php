<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       (Portuguese language file)
|
|       Tradução Português(pt-PT) -> KANONimpresor
|       (https://marketingdeperformance.online/), 2026
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda:<br />
			# Administração de Arquivos";
$text = "Podes gerir, nesta página, os ficheiros na tua pasta /files. Se receberes uma mensagem de erro sobre permissões ao carregar, altera as permissões (CHMOD) da pasta para onde estás a tentar carregar para 777.";
$ns -> tablerender($caption, $text);
