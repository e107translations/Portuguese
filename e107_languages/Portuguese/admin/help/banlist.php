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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/banlist.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Banindo utilizadores do seu site";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
$text = 'Esta página permite que você transfira dados de listas banidas de e para este site como arquivos CSV (Comma Separated Variable).<br /><br />';
  $text .= "<b>Exportação de dados</b><br />
  Selecione os tipos de proibição a exportar. Os campos serão delimitados pelo separador escolhido, e opcionalmente incluídos entre aspas selecionadas.<br /><br />";
  $text .= "<b>Importação de dados</b><br />
  Você pode escolher se as proibições importadas substituem as proibições importadas existentes ou se são adicionadas à lista. Se os dados importados incluírem uma data/hora de expiração, você
  pode selecionar se isso será usado ou se o valor deste site será usado.<br /><br />";
  $text .= "<b>Formato CSV</b><br />
  O formato de cada linha do arquivo é: IP/endereço electrónico, data, expiração, tipo, motivo, notas.<br />
  A data e o vencimento estão no formato AAAAMMDD_HHMMDD, exceto que um valor zero indica 'desconhecido' ou 'indefinido'<br />
  Apenas o endereço IP ou endereço electrónico é essencial; os outros campos serão importados se estiverem presentes.<br /><br />
  <b>Observação:</b> Você precisará modificar filetypes.xml para permitir que os administradores carreguem o tipo de arquivo 'CSV'.";
  break;
case 'times' :
$text = 'Esta página define o comportamento padrão para vários tipos de banimento.<br />
  Se uma mensagem for especificada, ela será mostrada ao utilizador (quando apropriado). Se a mensagem começar com \'http://\' ou \'https://\' o controle será
  passado para o URL especificado. Caso contrário, o utilizador provavelmente verá uma tela em branco.<br />
  A proibição vigorará pelo tempo especificado; após isso será apagado na próxima vez que acessarem o site.';
  break;
case 'options' :
$text = '<b>DNS reverso</b><br />
    Se ativado, o endereço IP do utilizador é consultado para obter o nome de domínio associado. Isso acessa um servidor externo, então pode haver
haverá um atraso antes que a informação esteja disponível - e se o servidor estiver off-line, poderá haver um atraso muito longo.<br /><br />
Você pode optar por procurar nomes de servidores em todos os acessos ao site, ou apenas ao adicionar um novo ban.<br /><br />
<b>Taxa máxima de acesso</b><br />
Isto define o número máximo de acessos ao site permitidos a partir de um único utilizador ou endereço IP em qualquer período de cinco minutos e tem como objetivo
para detectar ataques de negação de serviço. Ao atingir 90% do limite selecionado, o utilizador recebe um aviso; ao atingir o limite são banidos.
Limites diferentes podem ser definidos para convidados e usuários logados.<br /><br />
<b>Período de proibição de reativação</b><br />
Esta opção só é relevante se a opção de banir usuários por um período determinado, em vez de indefinidamente, tiver sido usada. Se habilitado, e
o utilizador tenta acessar o site, o período de banimento é estendido (como se o banimento tivesse acabado de começar).
	';
  break;
case 'edit' :
case 'add' :
$text = "Você pode banir usuários do seu site nesta tela.<br />
Insira o endereço IP completo ou use um curinga para banir um intervalo de endereços IP. Você também pode inserir um endereço electrónico para impedir que um utilizador se registre como membro do seu site.<br /><br />
<b>Banir por endereço IP:</b><br />
Inserir o endereço IP 123.123.123.123 impedirá que o utilizador com esse endereço visite seu site.<br />
Inserir um endereço IP com um ou mais curingas nos blocos finais, como 123.123.123.* ou 214.098.*.*, impedirá que qualquer pessoa nesse intervalo de IP visite seu
site. (Observe que deve haver exatamente quatro grupos de dígitos ou asteriscos)<br /><br />
Endereços no formato IPV6 também são suportados, incluindo '::' para representar um bloco de valores zero. Cada par de dígitos nos campos finais pode ser um curinga separado<br /><br />
<b>Banir por endereço electrónico</b><br />
Inserir o endereço electrónico foo@bar.com impedirá que qualquer pessoa que use esse endereço electrónico se registre como membro do seu site.<br />
Inserir o endereço electrónico *@bar.com impedirá que qualquer pessoa que use esse domínio de endereço electrónico se registre como membro do seu site.<br /><br />
<b>Banir por nome de utilizador</b><br />
Isso é feito na página de administração de usuários.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
$text = "Você pode especificar endereços IP que você sabe que são 'amigáveis' aqui - geralmente aqueles dos principais administradores do site, para garantir que eles possam
  sempre tenha acesso ao site.<br />
  É aconselhável manter o número de endereços nesta lista no mínimo absoluto; tanto para segurança quanto para minimizar o impacto no desempenho do site.";
  break;
case 'banlog' :
$text = 'Mostra uma lista de todos os acessos ao site envolvendo um endereço que está na lista de banimentos ou na lista branca. A coluna \'motivo\' mostra o resultado.';
  break;
case 'white' :
$text = "Esta página mostra uma lista de todos os endereços IP e endereços de endereço electrónico que são explicitamente permitidos.<br />
    Esta lista tem prioridade sobre a lista de banimentos - não deveria ser possível banir um endereço desta lista.<br />
Todos os endereços devem ser inseridos manualmente.";
  break;
case 'list' :
default :
$text = 'Esta página mostra uma lista de todos os endereços IP, nomes de host e endereços de endereço electrónico que foram banidos.
(Usuários banidos são mostrados na página de administração de usuários)<br /><br />
<b>Banimentos Automáticos</b><br />
O e107 bane automaticamente endereços IP individuais se eles tentarem inundar o site, bem como endereços com falhas de entrar.<br />
Essas proibições também aparecem nesta lista. Você pode selecionar (na página de opções) o que fazer para cada tipo de banimento.<br /><br />
<b>Removendo um banimento</b><br />
Você pode definir um período de expiração para cada tipo de banimento; nesse caso, a entrada será removida assim que o período de banimento expirar. Caso contrário, o
 o banimento permanece até que você o remova.<br />
Você pode modificar o período de banimento nesta página - os tempos são calculados a partir de agora.';
}
$ns -> tablerender($caption, mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
