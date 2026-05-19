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

$caption = "Ajuda:<br /># Sistema de Cache";
$text = "Se você tiver o cache ativado, isso melhorará enormemente a velocidade do seu site e minimizará o número de chamadas ao banco de dados SQL.<br /><br />
		<b>IMPORTANTE! Se você estiver criando seu próprio tema, desative o cache, caso contrário, quaisquer alterações feitas não serão refletidas imediatamente.</b>";
$ns -> tablerender($caption, $text);
