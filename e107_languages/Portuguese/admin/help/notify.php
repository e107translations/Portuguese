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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/notify.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "A Notificação envia notificações por endereço electrónico quando ocorrem eventos e107.<br /><br />
Por exemplo, defina 'IP banido por inundação do site' para a classe de utilizador 'Admin' e todos os administradores receberão um endereço electrónico quando seu
o site está sendo inundado.<br /><br />
Você também pode, como outro exemplo, definir 'Notícia postada pelo administrador' para a classe de utilizador 'Membros' e todos os seus usuários serão
enviou notícias que você postou no site por endereço electrónico.<br /><br />
Se desejar que as notificações por endereço electrónico sejam enviadas para um endereço electrónico alternativo - selecione a opção 'Endereço electrónico' e
digite o endereço electrónico no campo fornecido.";

$ns -> tablerender("Ajuda das Notificações", mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
