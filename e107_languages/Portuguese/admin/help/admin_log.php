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

$caption = "Ajuda:<br /># Registos do Sistema";
if (e_QUERY) list($action,$junk) = explode('.', e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Filtros de dados</b><br />
  Podes especificar vários filtros que limitem a quantidade de dados a visualizar. Estes são guardados num cookie até terminares a sessão.<br />
  Os filtros de data/hora de início e fim têm de ser ativados através das respetivas caixas de verificação.<br />
  Outros filtros ficam ativos quando existe um valor na caixa.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Esta página mostra a atividade dos utilizadores que escolheste registar.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Esta página configura várias opções para os registos do sistema.<br /><br />
  <b>Configuração comum</b><br />
  Define o número de linhas na visualização do registo.<br /><br />
  <b>Registo de administração</b><br />
  Este registo guarda eventos até serem eliminados manualmente; usa esta opção para apagar eventos antigos.<br /><br />
  <b>Registo de auditoria de utilizadores</b><br />
  Este registo monitoriza a atividade dos utilizadores. Para utilizadores registados, apenas são monitorizados os que pertencem à classe especificada - podes definir como 'Membros' para monitorizar 
  todos ou criar uma classe de utilizador específica para registo. Depois, defines os tipos de atividade que queres registar.<br />
  Os eventos de registo podem ser monitorizados separadamente.<br /><br />
  <b>Registo rotativo</b><br />
  Este registo é usado para monitorizar eventos anormais, auxiliar na depuração, etc. Pode ser desativado. Os eventos são automaticamente removidos após o número de dias definido.
  ";
  break;
case 'rolllog' :
  $text = "O registo rotativo mostra vários eventos anormais que não estão registados noutros locais. Também pode ser usado para depuração de código e monitorização.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Esta página mostra as transferências efetuadas por utilizadores.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Esta página mostra comentários de utilizadores, com opções para selecionar por ID de utilizador, tipo e data. Comentários indesejados podem ser eliminados.";
  break;
case 'detailed' :
  $text = "Os registos principais do sistema registam o tempo com elevada precisão (se o servidor suportar). Esta página permite-te inspecionar entradas
	que ocorreram numa janela temporal relativamente pequena. As entradas do registo de administração, auditoria e registo rotativo são combinadas, para que possas ver 
	as relações precisas entre eventos.";
  break;
case 'adminlog' :
default :
  $text = "Esta página mostra a atividade dos administradores.<br /><br />
  (Atualmente, a funcionalidade de registo ainda está a ser implementada no código, por isso a lista não está completa.)<br /><br />";
  $text .= common_filters();
}
e107::getRender()->tablerender($caption, $text);
