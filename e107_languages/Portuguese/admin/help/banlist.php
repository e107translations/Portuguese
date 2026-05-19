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

$caption = "Ajuda:<br /># Bloqueio de Utilizadores";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';  // Separador não padrão na query

switch ($action)
{
case 'transfer' :
  $text = 'Esta página permite transferir dados da lista de bloqueios para/do site como ficheiros CSV (Valores Separados por Vírgula).<br /><br />';
  $text .= "<b>Exportação de dados</b><br />
  Seleciona os tipos de bloqueio a exportar. Os campos serão delimitados pelo separador escolhido e opcionalmente incluídos dentro das aspas selecionadas.<br /><br />";
  $text .= "<b>Importação de dados</b><br />
  Podes escolher se os bloqueios importados substituem os existentes ou se são adicionados à lista. Se os dados incluírem data/hora de expiração, 
  podes selecionar se este valor é utilizado ou se é usado o definido para o site.<br /><br />";
  $text .= "<b>Formato CSV</b><br />
  O formato de cada linha no ficheiro é: IP/email, data, expiração, tipo, motivo, notas.<br />
  Data e expiração usam o formato AAAAMMDD_HHMMSS, exceto se o valor zero indicar 'desconhecido' ou 'indefinido'.<br />
  Apenas o IP ou email são obrigatórios; outros campos são importados se presentes.<br /><br />
  <b>Nota:</b> Necessitarás modificar o ficheiro filetypes.xml para permitir o upload de ficheiros 'CSV' por administradores.";
  break;
case 'times' :
  $text = 'Esta página define o comportamento padrão para vários tipos de bloqueio.<br />
  Se especificares uma mensagem, esta será mostrada ao utilizador (quando aplicável). Se a mensagem começar com \'http://\' ou \'https://\', o controlo 
  é transferido para o URL especificado. Caso contrário, o utilizador provavelmente verá um ecrã em branco.<br />
  O bloqueio estará ativo durante o tempo especificado, sendo removido após esse período quando acederem novamente ao site.';
  break;
case 'options' :
  $text = '<b>DNS Reverso</b><br />
    Se ativado, o IP do utilizador é verificado para obter o domínio associado. Isto acede a um servidor externo, podendo causar
    atrasos na resposta - e se o servidor estiver offline, o atraso pode ser significativo.<br /><br />
    Podes escolher verificar nomes de servidor em todos os acessos ou apenas ao adicionar novos bloqueios.<br /><br />
    <b>Taxa Máxima de Acesso</b><br />
    Define o número máximo de acessos permitidos por utilizador/IP em qualquer período de 5 minutos, destinado a detetar 
    ataques de negação de serviço. A 90% do limite, o utilizador recebe um aviso; ao atingir o limite, é bloqueado.
    Limiares diferentes podem ser definidos para visitantes e utilizadores autenticados.<br /><br />
    <b>Reativação do Período de Bloqueio</b><br />
    Opção relevante apenas se usares bloqueios temporários. Se ativado, qualquer tentativa de acesso durante o bloqueio
    reinicia o período de bloqueio (como se tivesse acabado de ser aplicado).';
  break;
case 'edit' :
case 'add' :
$text = "Neste ecrã podes banir utilizadores do teu site.<br />
Introduz o IP completo ou usa wildcards para bloquear intervalos de IPs. Também podes inserir um email para impedir registos.<br /><br />
<b>Bloqueio por IP:</b><br />
Inserir 123.123.123.123 bloqueia esse IP específico.<br />
IPs com wildcards como 123.123.123.* ou 214.098.*.* bloqueiam intervalos inteiros. (Devem ter exatamente 4 grupos de dígitos/asteriscos)<br /><br />
Suporta formatos IPV6, incluindo \'::\' para blocos de zeros. Cada par de dígitos finais pode ser um wildcard.<br /><br />
<b>Bloqueio por email:</b><br />
foo@bar.com bloqueia registos com esse email.<br />
*@bar.com bloqueia todos os emails desse domínio.<br /><br />
<b>Bloqueio por nome de utilizador:</b><br />
Configurado na página de administração de utilizadores.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "Podes especificar IPs 'amigáveis' aqui - geralmente de administradores principais - para garantir acesso permanente ao site.<br />
  Recomenda-se manter esta lista mínima por questões de segurança e desempenho.";
  break;
case 'banlog' :
  $text = 'Mostra todos os acessos envolvendo IPs na lista de bloqueios ou lista branca. A coluna \'reason\' indica o resultado.';
  break;
case 'white' :
  $text = "Lista de IPs e emails explicitamente permitidos.<br />
    Esta lista tem prioridade sobre a de bloqueios - nenhum endereço aqui listado deve poder ser bloqueado.<br />
    Todos os endereços são inseridos manualmente.";
  break;
case 'list' :
default :
$text = 'Mostra todos os IPs, domínios e emails bloqueados. 
(Utilizadores banidos aparecem na página de administração de utilizadores)<br /><br />
<b>Bloqueios Automáticos</b><br />
O e107 bloqueia automaticamente IPs que tentem inundar o site ou com falhas de login repetidas.<br />
Estes bloqueios aparecem nesta lista. Podes configurar ações para cada tipo na página de opções.<br /><br />
<b>Remover bloqueios</b><br />
Podes definir períodos de expiração para cada bloqueio, sendo removidos automaticamente. Caso contrário,
permanecem até remoção manual.<br />
Podes ajustar o período de bloqueio nesta página - os tempos são calculados a partir do momento atual.';
}
e107::getRender()->tablerender($caption, $text);
