<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2015 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if(!defined('e107_INIT')){ exit; }

if (!getperms("2") && !e107::isCli())
{
	e107::redirect();
	exit;
}


$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();

if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$sql->select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = e107::getDb('sql2');
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql->fetch())
			{
				$sql2 ->update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menus redefinidos no banco de dados</b><br /><br />";
		}
}
else
{
	unset($text);
}

$text = "O Gerenciador de Menu permite que você coloque e organize seus menus dentro do seu modelo de tema.

[u]Passe o rato[/u] sobre as subáreas para modificar os itens de menu existentes.

Se você achar que os menus não estão sendo atualizados corretamente, clicar no botão Actualizar abaixo pode ajudar.

[html]
<form method='Post' id='menurefresh' action='".e_SELF."'>
<div>
".$frm->admin_button('reset','Refresh','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('fa-search')." indica que a visibilidade do menu foi modificada.
[/html]
";

$text = $tp->toHTML($text, true);
e107::getRender()->tablerender("Ajuda do Gerenciador de Menu", mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
