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

$caption = "Ajuda:<br /># Administrador do Sítio";
$text = "Use esta página para editar as preferências ou excluir administradores do sítio.
		O administrador só terá permissão para acessar os recursos que estiverem marcados.<br /><br />
		Para criar um novo administrador, vá para a página de configuração do utilizador e atualize um utilizador existente para o estado de administrador.";
$ns -> tablerender($caption, $text);
