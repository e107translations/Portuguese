<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       (Portuguese language file)
|
|       Tradução Português(PT) -> Comunidade e107 Portugal
|      	(http://www.e107pt.com), 2025
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

//define("LWLAN_1", "Campo(s) deixado(s) em branco.");
//define("LWLAN_2", "Palavra-link guardada.");
//define("LWLAN_3", "Palavra-link atualizada.");

return [
    'LWLAN_4' => "Ainda não foram definidas palavras-link.",
    'LWLAN_5' => "Palavras",
    'LWLAN_6' => "Link",
    'LWLAN_7' => "Ativo?",
    'LWLAN_21' => "Palavra para autolink (ou lista de palavras separadas por vírgulas)",
    'LWLAN_26' => "Áreas onde ativar palavras-link",
    'LWLAN_28' => "Páginas onde desativar palavras-link",
    'LWLAN_33' => "Áreas de título",
    'LWLAN_34' => "Resumos de itens",
    'LWLAN_35' => "Corpo do texto",
    'LWLAN_36' => "Descrições (links etc)",
    'LWLAN_40' => "Títulos inseridos por utilizadores (ex: fórum)",
    'LWLAN_41' => "Texto inserido por utilizadores (ex: fórum)",
    'LWLAN_50' => "Tooltip",
    'LWLAN_52' => "Apenas palavra-link",
    'LWLAN_53' => "Apenas tooltip",
    'LWLAN_54' => "Palavra-link e Tooltip",
    'LWLAN_55' => "Abrir link em nova janela",
    'LWLAN_58' => "Pref hook convertido para formato 0.8",
    'LWLAN_59' => "Ativar funcionalidade Ajax",
    'LWLAN_64' => "Suprimir link na página atual",
    'LWLAN_66' => "Classe CSS personalizada",
    'LWLAN_67' => "Máx. links/tips",
  //  'LAN_LW_HELP_01' => "Muitas áreas de texto têm um 'contexto' associado, e as palavras-link só serão exibidas em áreas que correspondam a esse contexto.",
  //  'LAN_LW_HELP_02' => "Os tooltips podem usar Ajax para obter informação a exibir. Isto normalmente requer codificação personalizada.",
    'LAN_LW_HELP_03' => "Normalmente não faz sentido o utilizador poder clicar num link se já está na página para onde ele aponta. Quando esta opção está ATIVA, as palavras-link não são acionadas nesse caso.",
    'LAN_LW_HELP_04' => "As palavras-link podem ser desativadas em páginas específicas, ou páginas que correspondam a um padrão. Insira-os aqui (mesma sintaxe que para visibilidade de menus), um padrão por linha. Se o padrão terminar em '!', corresponde a 'fim de query', e normalmente é uma correspondência exata. Caso contrário, qualquer URL contendo a string especificada será correspondida.",
    'LAN_LW_HELP_05' => "Adicionará esta classe a todos os links gerados.",
    'LAN_LW_HELP_10' => "Aqui podes definir as palavras que se tornam links clicáveis, ou que exibem texto ao passar o rato.",
    'LAN_LW_HELP_11' => "Não diferencia maiúsculas/minúsculas. Para múltiplas palavras que mapeiam para os mesmos links e tooltips, separa-as com vírgulas (sem espaços)",
    'LAN_LW_HELP_12' => "Define um link clicável aqui. Se for um link externo, DEVE começar com 'http(s)://'. Se for um link dentro deste site, podem ser usadas as constantes normais {e_XXX}.",
    'LAN_LW_HELP_13' => "Define quais opções estão ativas.",
    'LAN_LW_HELP_14' => "Define o texto a ser exibido quando o rato do utilizador passa sobre a palavra.",
    'LAN_LW_HELP_15' => "Número máximo dos mesmos links. Deve ser número positivo. Usado quando a mesma palavra é encontrada múltiplas vezes num texto.",
    'LAN_LW_HELP_16' => "Define um ID numérico opcional para ser usado com processamento Ajax. Deve ser número positivo. Se vazio, é usado o número de registo da base de dados",
    'LAN_LW_HELP_17' => "Quando ativo, o link abre numa nova janela/aba do navegador",
    'LAN_LW_HELP_01' => "<b>Áreas para ativar</b><br />

  muitas áreas de texto têm um \"contexto\" associado, e as palavras-link só serão exibidas em áreas que correspondam a esse contexto.<br /><br />

  <b>Desativar palavras-link</b><br />

  As palavras-link podem ser desativadas em páginas específicas, ou páginas que correspondam a um padrão. Insira-os aqui (mesma sintaxe que para menus), um padrão por linha. 

  Se o padrão terminar em \"!\", corresponde a \"fim de query\", e normalmente é uma correspondência exata. Caso contrário, qualquer URL contendo a string especificada será correspondida.<br />

  Nota que as palavras-link <i>nunca</i> são exibidas em páginas de administração.<br /><br />

  <b>Ativar Funcionalidade Ajax</b><br />

  Os tooltips podem usar Ajax para obter informação a exibir. Isto normalmente requer codificação personalizada.<br /><br />

  <b>Suprimir link na página atual</b><br />

  Normalmente não faz sentido o utilizador poder clicar num link se já está na página. Marca esta caixa para remover a opção,<br />",
    'LAN_LW_HELP_02' => "Define aqui as palavras que se tornam links clicáveis, ou que exibem texto ao passar o rato<br /><br />
  <b><u>Palavra para Link</u></b><br />

  Não diferencia maiúsculas/minúsculas. Para múltiplas palavras que mapeiam para os mesmos links e tooltips, separa-as com vírgulas (sem espaços)<br /><br />

  <b><u>Link</u></b><br />

  Define um link clicável aqui. Se for um link externo, [i]deve[/i] começar com \"http://\". Se for um link dentro deste site, podem ser usadas as constantes normais {e_XXX}.<br /><br />

  <b><u>Tooltip</u></b><br />

  Define o texto a ser exibido quando o rato do utilizador passa sobre a palavra.<br /><br />

  <b><u>ID LW (ID Tooltip)</u></b><br /><br />

  Define um ID numérico opcional para ser usado com processamento Ajax. Se vazio, é usado o número de registo da base de dados.<br /><br />

  <b><u>Ativar?</u></b><br />

  Define quais opções estão ativas.",
];