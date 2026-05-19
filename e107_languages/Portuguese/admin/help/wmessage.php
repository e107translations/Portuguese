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
			# Mensagem de Bem-vinda";
$text = "Esta página permite-te configurar uma mensagem que aparecerá no início da tua página inicial enquanto estiver ativa.<br />
Podes definir mensagens diferentes para: convidados, membros registados/com sessão iniciada ou administradores.";
$ns -> tablerender($caption, $text);
