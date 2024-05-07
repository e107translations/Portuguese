<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Frontpage Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda da primeira página";
/* FIXME - English native speakers: what should stay and what should go? 
	<p>
		The list of rules are scanned in turn, until the class of the current user matches. 
		This then determines the user's front (home) page, and also the page he sees immediately after entrar.
	</p>
 */
$texto = "
<p>
Nessa tela você pode escolher o que exibir como página inicial do seu site, o padrão é notícias. Você também pode determinar se
os usuários são enviados para uma página específica após o entrar.
</p>
<p>
As regras são pesquisadas em ordem, para encontrar a primeira onde o utilizador atual pertence à classe especificada na regra.
Essa regra determina então a página inicial (inicial) e qualquer página específica pós-login. Se nenhuma regra corresponder, news.php será definido como a página inicial.
</p>
<p>
O utilizador é enviado para a &quot;página pós-login&quot; especificada. (se especificado) imediatamente após um entrar.
</p>
";
$ns->tablerender( mb_convert_encoding($caption, "HTML-ENTITIES", "ISO-8859-1"),  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"), 'admin_help');
