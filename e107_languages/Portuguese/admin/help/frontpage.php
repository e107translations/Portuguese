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
			# Página Principal";
/* FIXME - Falantes nativos de inglês: o que deve permanecer e o que deve ser alterado?
	<p>
		A lista de regras é verificada sequencialmente até que a classe do utilizador atual corresponda. 
		Isso determina a página inicial do utilizador e a página exibida após o login.
	</p>
 */
$text = "
<p>
	Neste ecrã podes escolher o que exibir como página inicial do teu site (o padrão é 'news'). Também podes definir se
	os utilizadores são redirecionados para uma página específica após o login.
</p>
<p>
	As regras são verificadas por ordem para encontrar a primeira onde o utilizador atual pertence à classe especificada.
	Essa regra determina a página inicial e qualquer página pós-login específica. Se nenhuma regra corresponder, news.php será usada como página inicial.
</p>
<p>
	O utilizador é direcionado para a &quot;Página pós-login&quot; especificada (se definida) imediatamente após o login.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');
