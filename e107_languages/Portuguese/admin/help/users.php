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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Gerenciamento de usuários";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Esta página permite que você crie um utilizador, que é imediatamente um membro normal do site, com qualquer associação de classe que você atribuir.<br /><br />
Se você marcar a caixa 'Enviar endereço electrónico de confirmação com senha para novo utilizador', o nome de entrar e a senha serão enviados <b>em claro</b>, portanto o utilizador deverá alterar
sua senha no recebimento.
	";
    break;

  case 'prune' :
	$text = "Exclui em massa usuários indesejados do banco de dados. Podem ser aqueles que não conseguiram concluir o processo de registro ou
aqueles cujos endereços de endereço electrónico foram devolvidos. Quaisquer postagens no fórum, comentários etc. permanecem e são sinalizados como sendo de um 'Utilizador Excluído'.
	";
	break;

  case 'unverified' :
	$text = "Mostra os membros que não conseguiram completar o seu registo. Opções geralmente como a lista completa de membros.";
    break;

  case 'options' :
	$text = "Define diversas opções que afetam todos os usuários.<br /><br />
<b>Permitir carregamento de avatar</b><br />
Se ativado, os usuários poderão fazer carregamento de um avatar de sua escolha, que será armazenado em seu servidor. Isto pode ter implicações de segurança.<br /><br />
<b>Permitir carregamento de fotos</b><br />
Se ativado, os usuários poderão fazer carregamento de uma foto de sua escolha, que será armazenada em seu servidor. Isto pode ter implicações de segurança.<br /><br />
<b>Rastreamento de usuários on-line</b><br />
Isso deve ser ativado para acompanhar a maioria das atividades do utilizador, incluindo contagens de membros online. Ele aumenta significativamente a atividade do banco de dados.<br /><br />
<b>Informações do Sócio</b><br />
Determina qual classe de membros pode visualizar a lista de membros.
	";
    break;

  default :
	$text = "Esta página mostra uma lista de seus membros registrados. Você pode atualizar suas configurações, conceder status de administrador e definir sua classe de utilizador
entre outras coisas.<br /><br />

A ordem de classificação pode ser alterada clicando no cabeçalho da coluna.<br /><br />

<b>Classes de utilizador</b><br />
As classes de utilizador podem ser definidas de duas maneiras: 'inline' clicando na coluna 'userclass' ou selecionando um/vários usuários e usando as opções de 'lote' na parte inferior da tabela. <br /><br />

<b>Editar</b><br />
Visualize e edite todas as configurações deste utilizador. <br /><br />

<b>Banir/Desbanir</b><br />
Determine se o utilizador pode acessar o site. <br /><br />

<b>Ativar</b><br />
Isso ativa um utilizador que normalmente teria respondido ao endereço electrónico de ativação.<br /><br />

<b>Reenviar endereço electrónico</b><br />
Reenvia o endereço electrónico de ativação para o utilizador.<br /><br />

<b>Endereço electrónico de teste</b><br />
Verifique a validade do endereço electrónico do utilizador (não envia um endereço electrónico)<br /><br />

<b>Excluir</b><br />
Remove totalmente o utilizador da associação ao site (quaisquer postagens no fórum, comentários etc. permanecem e são sinalizados como sendo de um 'Utilizador excluído')
	";
}


$ns -> tablerender(mb_convert_encoding($caption, "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
unset($text);
