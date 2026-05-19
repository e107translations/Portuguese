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
			# Transferência de Arquivos";
$text = "# Por favor, carrega os teus ficheiros para a pasta ".e_FILE."downloads.<br /><br /># As tuas imagens para a pasta ".e_FILE."downloadimages. <br /><br /># As miniaturas para a pasta ".e_FILE."downloadthumbs.
<br /><br />
Enviar um ficheiro para a zona de transferências:<br /><br />1) Criar uma categoria principal,<br /><br />2) Criar as subcategorias dentro da categoria principal correspondente.<br /><br />3) Ativar as transferências dentro de cada categoria.";
$ns -> tablerender($caption, $text);
