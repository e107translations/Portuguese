<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/userclass2.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda da classe de utilizador";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Defina as classes às quais um novo membro do site será atribuído inicialmente.
Se você tiver a verificação ativada, essa atribuição poderá ocorrer quando o utilizador se inscrever ou quando o utilizador for verificado.<br /><br />
E lembre-se de que se você estiver usando classes de utilizador hierárquicas, um utilizador será automaticamente membro de todas as classes 'acima' de cada classe selecionada na árvore";
	break;
  case 'options' :
	$text = "As opções de configuração permitem criar e remover a hierarquia de classes padrão. Você pode ver o efeito olhando a árvore de usuários.<br />
Isso não destruirá as informações de outras classes e você poderá modificar ou remover a hierarquia posteriormente.<br /><br />
Você só precisará reconstruir a hierarquia de classes se ocorrer corrupção do banco de dados";
	break;
  case 'membs' :
    $text = "Agora na página de administração do utilizador";
	break;
  case 'debug' :
	$text = "Somente para usuários avançados - mostra a hierarquia das classes, mais as classes atribuídas e as classes às quais os primeiros 20 membros do site têm acesso.<br />
O número na frente do nome da classe é seu ID exclusivo (número de referência). A classe 'Todos' possui um ID 0 (zero). e107 usa esses IDs para se referir às classes.<br />
Depois do nome da classe vem a visibilidade e editabilidade da classe - [vis:253, edit: 27] por exemplo. Isso significa que a classe estará visível na maioria dos seletores somente se o utilizador atual for membro da classe 253,
e o utilizador poderá editar sua associação de classe somente se for membro da classe 27.<br />
Finalmente, após o '=', há uma lista de todas as classes acima ou abaixo de cada classe na árvore, mais o ID dessa classe. Assim, um utilizador que é membro de uma classe específica irá
ser membro de todas as classes desta lista.<br /><br />
Para ajudar na compreensão, são mostrados os membros da classe dos primeiros 20 membros. A primeira entrada de cada linha mostra as classes das quais o utilizador é membro. O
a segunda entrada lista todas as classes das quais o utilizador é membro quando a herança entra em vigor. A terceira entrada mostra quais associações de classe eles podem editar";
	break;
  case 'test' :
  case 'special' :
    $text = "Não use isto!!! Somente para desenvolvedores!!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Você pode criar classes ou editar classes existentes nesta página.<br />
         Isso é útil para restringir usuários a determinadas partes do seu site. Por exemplo, você poderia criar uma classe chamada TEST,
em seguida, crie um fórum que permita apenas que usuários da classe TEST o acessem.<br /><br />
O nome da classe é exibido em listas suspensas e similares; em alguns lugares, a descrição mais detalhada também é exibida.<br /><br />
O ícone da classes poderá ser exibido em vários locais do site, caso haja algum configurado.<br /><br />
Para permitir que os usuários determinem se podem ser membros de uma classe, permita que eles a gerenciem. Se você definir 'ninguém' aqui, apenas os administradores
pode gerenciar a associação da classe<br /><br />
O campo 'visibilidade' permite ocultar a classe da maioria dos membros - aplica-se em algumas listas suspensas e caixas de seleção.<br /><br />
A 'classe pai' permite definir uma hierarquia de classes. Se o 'topo' da hierarquia for a classe 'Todos/Público' ou 'Membro', o
as classes mais abaixo na hierarquia também têm os direitos de sua classe pai, e do pai dessa classe, e assim por diante. Se o 'topo' da hierarquia for
classe 'Ninguém/Ninguém', então os direitos são acumulados na direção oposta - uma classe acumula todos os direitos de uma classe <b>abaixo</b> dela no
árvore. A árvore resultante é mostrada na parte inferior da página; você pode expandir e contrair filiais clicando nas caixas '+' e '-'.";
	break;
  case 'display' :
  default :
	$text = "Você pode selecionar classes para edição e também excluir classes existentes nesta página.";
}
e107::getRender() -> tablerender(mb_convert_encoding($caption, "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
