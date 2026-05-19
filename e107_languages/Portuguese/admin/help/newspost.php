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
			# Publicações de Notícias";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
	$text = "<b>Geral</b><br />
O corpo será exibido na página principal; estendido poderá ser lido clicando no hiperligação 'Leia mais'.
<br />
<br />
<b>Mostrar apenas o título</b>
<br />
Habilite isto para mostrar o título da notícia apenas na primeira página, com hiperligação clicável para a história completa.
<br /><br />
<b>Ativação</b>
<br />
Se você definir uma data de início e/ou término, sua notícia só será exibida entre essas datas.
";
	break;
  case 'cat' :
	$text = "Você pode separar suas notícias em categorias diferentes e permitir que os visitantes exibam apenas as notícias nessas categorias. <br /><br />Envie suas imagens de ícones de notícias em ".e_THEME."-yourtheme-/images/ ou em themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Defina diversas opções relacionadas a notícias<br /><br />
<b>Colunas de categorias de notícias</b><br />
Requer que o suporte ao tema seja selecionável<br /><br />
<b>Postagens de notícias a serem exibidas por página</b><br />
Para a página principal de notícias; exibe itens em formato não estendido.<br /><br />
<b>Postagens de notícias para exibir no arquivo</b><br />
Define o número de postagens de notícias que são exibidas apenas como título em cada página de notícias (incluídas no total anterior).<br /><br />
<b>Ativar editor WYSIWYG</b><br />
Requer que os usuários que podem enviar notícias também possam postar HTML.
	';
	break;
  case 'list' :
  default :
	$text = 'Lista de todas as notícias. Para editar ou excluir, clique em um dos ícones da coluna \'opções\'. Para visualizar o item, clique
na identificação.';
}
e107::getRender()->tablerender($caption, $text);
