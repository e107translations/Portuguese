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

// Algumas strings relacionadas com palavras-passe foram movidas para admin_alt_auth.php para uso genérico
//define('IMPORTDB_LAN_1', 'Tipo de base de dados');
//define('IMPORTDB_LAN_2', 'Texto simples');
//define('IMPORTDB_LAN_3', 'Joomla com salt');
//define('IMPORTDB_LAN_4', 'Mambo com salt');
//define('IMPORTDB_LAN_5', 'SMF (SHA1)');
//define('IMPORTDB_LAN_6', 'SHA1 genérico');
//define('IMPORTDB_LAN_7', 'MD5 (E107 original)');
//define('IMPORTDB_LAN_8', 'E107 com salt (opção 2.0 ativada)');

return [
    'IMPORTDB_LAN_9' => "Método de palavra-passe:",
    'IMPORTDB_LAN_10' => "Configurar o tipo de palavra-passe da base de dados importada",
    'IMPORTDB_LAN_11' => "Esta opção deve ser usada quando tiveres importado para o E107 algum outro sistema baseado em utilizadores.
							Permite-te aceitar palavras-passe codificadas num formato não padrão selecionado. 

A palavra-passe de cada utilizador é convertida para o formato E107 quando ele faz login.",
    'LAN_AUTHENTICATE_HELP' => "Este método de autenticação deve ser usado <i>apenas</i> quando tiveres importado uma base de dados de utilizadores para o E107, e as palavras-passe estiverem num formato incompatível. A palavra-passe original é lida da base de dados local e validada de acordo com o formato de armazenamento do sistema original. Se for validada, é convertida para o formato atual compatível com o E107 e armazenada na base de dados. Passado algum tempo, podes geralmente desativar o plugin de autenticação alternativa, já que os utilizadores ativos terão todos as suas palavras-passe armazenadas num formato compatível.",
];