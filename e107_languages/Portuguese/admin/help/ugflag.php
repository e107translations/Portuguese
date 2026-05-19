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
			# Manutenção do Sítio";
$text = "Se você estiver atualizando o e107 ou apenas precisar que seu site fique offline por um tempo, basta marcar a caixa de manutenção.<br /><br />
Seus visitantes serão redirecionados para uma página explicando que o site está fora do ar para reparos. Depois de terminar, desmarque a caixa para retornar o site ao normal.";

$ns -> tablerender($caption, $text);
