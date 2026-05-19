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
			# Envio de Notificações";
$text = "A Notificação envia notificações por endereço electrónico quando ocorrem eventos e107.<br /><br />
Por exemplo, defina 'IP banido por inundação do site' para a classe de utilizador 'Admin' e todos os administradores receberão um endereço electrónico quando seu
o site está sendo inundado.<br /><br />
Você também pode, como outro exemplo, definir 'Notícia postada pelo administrador' para a classe de utilizador 'Membros' e todos os seus usuários serão
enviou notícias que você postou no site por endereço electrónico.<br /><br />
Se desejar que as notificações por endereço electrónico sejam enviadas para um endereço electrónico alternativo - selecione a opção 'Endereço electrónico' e
digite o endereço electrónico no campo fornecido.";

$ns -> tablerender($caption, $text);
