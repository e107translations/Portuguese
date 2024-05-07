<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
      $text = 'Enviar endereço electrónico com restrições especificadas por um plugin opcional';
	  break;
	case 'debug' :
      $text = 'Apenas para desenvolvedores. Não utilizado atualmente';
	  break;
	case 'saved' :
      $text = 'Selecione e use um modelo de endereço electrónico salvo para enviar uma mensagem. Exclua qualquer modelo que não seja mais necessário';
	  break;
	case 'pending' :
        $text = 'Lista de mailshots liberados para envio, juntamente com o status atual. A tarefa do agendador de endereço electrónico processará esses e-mails da melhor forma possível, levando em consideração as primeiras e últimas datas de envio que você definiu';
		break;
	case 'held' :
        $text = 'Lista de emails que foram preparados para envio, mas ainda não liberados';
		break;
	case 'sent' :
      $text = 'Lista de mailshots concluídos. Permite que você veja os resultados do envio.<br />';
	  break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
      $text = 'Crie um endereço electrónico, dê um título significativo e selecione a lista de destinatários. Você pode salvar tudo como modelo para usar mais tarde ou enviar imediatamente.<br />';
      $text .= 'Endereços de endereço electrónico podem ser contribuídos por plugins (como newsletter), e duplicatas são removidas quando o endereço electrónico é enviado<br />';
      $text .= 'Qualquer anexo é selecionado da lista de downloads válidos.<br />';
      $text .= 'O endereço electrónico pode ser enviado como texto simples (mais universal e com menor risco de ser classificado como spam) ou como HTML (nesse caso, uma alternativa de texto simples é gerada automaticamente). O estilo do tema
opcionalmente, pode ser adicionado ao endereço electrónico. Alternativamente, um modelo predefinido pode ser selecionado.';
	  break;
	case 'recipients' :
      $text = 'Mostra todos os destinatários ou potenciais destinatários de um endereço electrónico, juntamente com o status atual';
		break;
	case 'prefs' :
      $text = '<b>Configurar opções de mailshot.</b><br />
Um endereço electrónico de teste é enviado usando o método e as configurações atuais. Se você estiver tendo problemas com a devolução de e-mails, tente enviar um endereço electrónico de teste para: <i>check-auth@verifier.port25.com</i> para garantir que os registros MX do seu servidor estejam corretos. Claro, certifique-se de que o endereço electrónico do seu site esteja correto antes de fazer isso.<br /><br />';
      $text .= '<b>Método de envio por endereço electrónico</b><br />
Use SMTP para enviar e-mails, se possível. As configurações dependerão do servidor de endereço electrónico do seu host.<br /><br />';
      $text .= '<b>Formato de endereço electrónico padrão</b><br />
Os e-mails podem ser enviados apenas em texto simples ou em formato HTML. Este último geralmente dá uma aparência melhor, mas é mais propenso a ser filtrado por vários
medidas de segurança. Se você selecionar HTML, uma parte separada de texto simples será adicionada.<br /><br />';
      $text .= '<b>Controles de endereço electrónico em massa</b><br />
Os valores que você definir aqui dependerão do seu host e do número de e-mails que você enviar; pode ser possível definir todos os valores como zero para que o
a fila de correio é esvaziada virtualmente instantaneamente. Normalmente é melhor enviar menos de 500 e-mails por hora.<br /><br />';
      $text .= '<b>E-mails devolvidos</b><br />
Você pode especificar um endereço electrónico para receber a resposta de retorno quando um endereço electrónico não puder ser entregue. Se você tiver controle sobre seu servidor, poderá especificar o
script separado de processamento automático orientado por agendador; isso recebe mensagens devolvidas à medida que chegam e atualiza o status instantaneamente. Caso contrário, você pode especificar uma conta de endereço electrónico separada,
que pode ser verificado periodicamente (usando o agendador) ou manualmente através do menu de opções do utilizador. Normalmente este será um padrão
Conta POP3; use as opções relacionadas ao TLS somente se especificamente exigido pelo seu host<br /><br />';
      $text .= '<b>Fontes de endereços de endereço electrónico</b><br />
Se você tiver plug-ins adicionais relacionados a endereço electrónico, poderá selecionar quais deles podem contribuir com endereços de endereço electrónico para a lista.<br /><br />';
      $text .= '<b>Registro</b><br />
A opção de log cria um arquivo de texto no diretório de log do sistema. Isso deve ser excluído periodicamente. O \'logging
As opções only permitem que você veja exatamente quem receberia e-mails se realmente fossem enviados. A opção \'com erros\' falha a cada
7º endereço electrónico, principalmente para teste';
	  break;
	 case 'maint' :
      $text = 'Funções de manutenção da base de dados de correio';
		break;
	default :
      $text = 'Opção não documentada';
  }

$ns->tablerender('Ajuda do correio',  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
