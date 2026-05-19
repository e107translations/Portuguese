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
			# Gestão de Pesquisas";
$text = "Se a versão do seu servidor MySQL suportar, você pode mudar ao método de classificação do MySQL, que é mais rápido que o método de classificação do PHP. Veja preferências.
<br /><br />
Se o seu site incluir idiomas ideográficos, como chinês e japonês, você deverá use o método PHP sort e desative a correspondência de palavras inteiras.";
$ns -> tablerender($caption, $text);
