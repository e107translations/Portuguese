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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/carregamento.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "Os tipos de arquivo e o tamanho máximo de arquivo que pode ser carregado são definidos por classe de utilizador. Esta opção gera um arquivo chamado ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
que deve ser copiado ou movido para o diretório ".e_ADMIN_ABS." e renomeado para ".e_READ_FILETYPES." antes de entrar em vigor.<br />
É permitida uma definição por classe.<br />
Observe que essas definições se aplicam a todo o site, mesmo que o recurso de uploads públicos esteja desativado.";
    break;
  case 'options' :
    $text = "O sistema completo de uploads públicos pode ser desativado aqui.<br />
O armazenamento de arquivos simples geralmente é apropriado (caso contrário, o tamanho máximo do arquivo é limitado a 500kb).<br />
O tamanho máximo do arquivo substitui quaisquer definições definidas em filetypes.xml.<br />
Os uploads públicos podem ser restritos a uma classe de utilizador específica, mas essas configurações também se aplicam a outras áreas do site onde os uploads podem ser permitidos, como
notícias e formulários.";
	break;
  case 'view' :
  default :
	$text = "Esta página lista todos os uploads enviados. Você pode optar por excluí-los, transferi-los para downloads ou publicá-los em notícias";
}
$ns -> tablerender(mb_convert_encoding("Ajuda para uploads públicos", "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
