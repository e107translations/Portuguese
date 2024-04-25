<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Search Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda da procura";
$text = "
	Se a versão do seu servidor MySQL suportar, você pode mudar
ao método de classificação do MySQL, que é mais rápido que o método de classificação do PHP. Veja preferências.
<br /><br />
Se o seu site incluir idiomas ideográficos, como chinês e japonês, você deverá
use o método PHP sort e desative a correspondência de palavras inteiras.

";
$ns -> tablerender($caption, mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
