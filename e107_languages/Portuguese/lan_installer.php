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

return [
	'LANINS_001' => "Instalação do e107",
	'LANINS_002' => "Passo ",
	'LANINS_003' => "1",
	'LANINS_004' => "Seleção de Idioma",
	'LANINS_005' => "Por favor, escolhe o idioma a usar durante a instalação",
	'LANINS_007' => "4",
	'LANINS_008' => "Verificação das versões do PHP e MySQL / Verificação das permissões de ficheiros",
	'LANINS_009' => "Reverificar permissões de ficheiros",
	'LANINS_010' => "Ficheiro não gravável: ",
	'LANINS_010a' => "Pasta não gravável: ",
	'LANINS_012' => "Parece que as funções MySQL não estão disponíveis. Isso provavelmente significa que a extensão MySQL do PHP não está instalada ou a tua instalação do PHP não foi compilada com suporte para MySQL.", // ajuda para 012
	'LANINS_013' => "Não foi possível determinar o número da versão do MySQL. Este é um erro não fatal, então por favor, continue a instalação, mas tenha em mente que o e107 requer MySQL >= 3.23 para funcionar corretamente.",
	'LANINS_014' => "Permissões de Ficheiros",
	'LANINS_015' => "Versão do PHP",
	'LANINS_017' => "PASS",
	'LANINS_018' => "Certifique-se de que todos os ficheiros listados existem e são graváveis pelo servidor. Normalmente, isso envolve definir permissões 777, mas os ambientes variam – entre em contacto com o seu host se tiver algum problema.",
	'LANINS_019' => "A versão do PHP instalada no seu servidor não é capaz de executar o e107. O e107 requer uma versão do PHP de pelo menos ".MIN_PHP_VERSION." para funcionar corretamente. Atualize a sua versão do PHP ou entre em contacto com o seu host para atualizar.",
	'LANINS_021' => "2",
	'LANINS_022' => "Detalhes do Servidor MySQL",
	'LANINS_023' => "Por favor, insira as suas configurações do MySQL aqui.
Se tiver permissões de root, pode criar uma nova base de dados marcando a caixa, caso contrário, deve criar uma base de dados ou utilizar uma existente.

Se tiver apenas uma base de dados, use um prefixo para que outros scripts possam partilhar a mesma base de dados.

Se não souber os seus detalhes do MySQL, entre em contacto com o seu host.",
	'LANINS_024' => "Servidor MySQL:",
	'LANINS_025' => "Utilizador MySQL:",
	'LANINS_026' => "Palavra-passe MySQL:",
	'LANINS_027' => "Base de Dados MySQL:",
	'LANINS_028' => "Criar Base de Dados?",
	'LANINS_029' => "Prefixo das Tabelas:",
	'LANINS_030' => "O servidor MySQL que deseja que o e107 utilize. Também pode incluir um número de porta, ex: 'hostname:porta' ou um caminho para um socket local ex: \":/caminho/para/socket\" para o localhost.",
	'LANINS_031' => "O nome de utilizador que deseja que o e107 utilize para se ligar ao seu servidor MySQL",
	'LANINS_032' => "A palavra-passe para o utilizador que acabou de inserir. Não pode conter aspas simples ou duplas.",
	'LANINS_033' => "A base de dados MySQL onde deseja que o e107 seja instalado, por vezes referida como esquema. Deve começar com uma letra. Se o utilizador tiver permissões para criar a base de dados, pode optar por criá-la automaticamente, caso não exista.",
	'LANINS_034' => "O prefixo que deseja que o e107 utilize ao criar as tabelas do e107. Útil para múltiplas instalações do e107 numa mesma base de dados.",
	'LANINS_036' => "3",
	'LANINS_037' => "Verificação da Conexão MySQL",
	'LANINS_038' => " e Criação da Base de Dados",
	'LANINS_039' => "Por favor, certifique-se de que preenche todos os campos, especialmente o Servidor MySQL, Utilizador MySQL e Base de Dados MySQL (estes são sempre requeridos pelo Servidor MySQL)",
	'LANINS_040' => "Erros",
	'LANINS_041' => "O e107 não conseguiu estabelecer uma conexão com o servidor MySQL utilizando as informações que inseriu. Por favor, volte à página anterior e assegure-se de que as informações estão corretas.",
	'LANINS_042' => "Conexão com o servidor MySQL estabelecida e verificada.",
	'LANINS_043' => "Não foi possível criar a base de dados, por favor, verifique se tem as permissões corretas para criar bases de dados no seu servidor.",
	'LANINS_044' => "Base de dados criada com sucesso.",
	'LANINS_045' => "Por favor, clique no botão para continuar para a próxima etapa.",
	'LANINS_046' => "5",
	'LANINS_047' => "Detalhes do Administrador",
	'LANINS_048' => "Extensão EXIF",
	'LANINS_049' => "As duas palavras-passe que inseriu não são iguais. Por favor, volte e tente novamente.",
	'LANINS_050' => "Extensão XML",
	'LANINS_051' => "Instalada",
	'LANINS_052' => "Não Instalada",
	'LANINS_055' => "Confirmação da Instalação",
	'LANINS_056' => "6",
	'LANINS_057' => "O e107 agora tem todas as informações necessárias para completar a instalação.
Por favor, clique no botão para criar as tabelas da base de dados e guardar todas as suas configurações.",
	'LANINS_058' => "7",
	'LANINS_060' => "Não foi possível ler o ficheiro de dados SQL
Por favor, verifique se o ficheiro [b]core_sql.php[/b] existe na pasta [b]/e107_core/sql[/b].",
	'LANINS_061' => "O e107 não conseguiu criar todas as tabelas necessárias da base de dados.
Por favor, limpe a base de dados e corrija os problemas antes de tentar novamente.",
	'LANINS_069' => "O e107 foi instalado com sucesso!
Por questões de segurança, deverá agora definir as permissões do ficheiro [b]e107_config.php[/b] de volta para 644.

Além disso, por favor, apague o install.php do seu servidor depois de clicar no botão abaixo.",
	'LANINS_070' => "O e107 não conseguiu guardar o ficheiro de configuração principal no seu servidor.
Por favor, verifique se o ficheiro [b]e107_config.php[/b] tem as permissões corretas",
	'LANINS_071' => "Instalação Completa",
	'LANINS_072' => "Nome de utilizador do administrador",
	'LANINS_073' => "Este é o nome que irá utilizar para fazer login no site. Se desejar utilizar este nome também como nome de exibição",
	'LANINS_074' => "Nome de exibição do administrador",
	'LANINS_076' => "Palavra-passe do administrador",
	'LANINS_077' => "Por favor, escreva a palavra-passe do administrador que deseja utilizar aqui",
	'LANINS_078' => "Confirmação da palavra-passe",
	'LANINS_079' => "Por favor, escreva novamente a palavra-passe do administrador para confirmação",
	'LANINS_080' => "Email do administrador",
	'LANINS_081' => "Insira o seu endereço de email",
	'LANINS_083' => "Erro Reportado pelo MySQL:",
	'LANINS_084' => "O instalador não conseguiu estabelecer uma conexão com a base de dados",
	'LANINS_085' => "O instalador não conseguiu selecionar a base de dados:",
	'LANINS_086' => "Nome de Utilizador do Administrador, Palavra-passe do Administrador e Email do Administrador são campos obrigatórios. Por favor, volte à página anterior e assegure-se de que as informações foram inseridas corretamente.",
	'LANINS_105' => "Um nome de base de dados ou prefixo começando com dígitos seguidos de 'e' ou 'E' não é aceitável",
	'LANINS_106' => "AVISO - O e107 não consegue escrever nas pastas e/ou ficheiros listados. Embora isso não impeça a instalação do e107, significa que certas funcionalidades não estarão disponíveis.
Será necessário alterar as permissões de ficheiros para usar estas funcionalidades",
	'LANINS_107' => "Nome do Site",
	'LANINS_108' => "Meu Site",
	'LANINS_109' => "Tema do Site",
	'LANINS_111' => "Incluir Conteúdo/Configuração",
	'LANINS_112' => "Reproduzir rapidamente o visual da pré-visualização ou demonstração do tema. (Se disponível)",
	'LANINS_113' => "Por favor, insira o nome do site",
	'LANINS_114' => "Por favor, selecione um tema",
	'LANINS_115' => "Nome do Tema",
	'LANINS_116' => "Tipo de Tema",
	'LANINS_117' => "Preferências do Site",
	'LANINS_118' => "Instalar Plugins",
	'LANINS_119' => "Instalar todos os plugins que o tema pode exigir.",
	'LANINS_120' => "8",
	'LANINS_121' => "e107_config.php não é um ficheiro vazio",
	'LANINS_122' => "Pode ter uma instalação existente",
	'LANINS_123' => "Opcional: O seu nome público ou pseudónimo. Deixe em branco para usar o nome de utilizador",
	'LANINS_124' => "Por favor, escolha uma palavra-passe de pelo menos 8 caracteres",
	'LANINS_125' => "O e107 foi instalado com sucesso!",
	'LANINS_126' => "Por questões de segurança, deverá agora definir as permissões do ficheiro e107_config.php de volta para 644.",
	'LANINS_127' => "A base de dados [x] já existe. Substituí-la? (todos os dados existentes serão perdidos)",
	'LANINS_128' => "Substituir",
	'LANINS_129' => "Base de dados não encontrada.",
	'LANINS_134' => "Instalação",
	'LANINS_135' => "de",
	'LANINS_136' => "Base de dados existente eliminada",
	'LANINS_137' => "Base de dados existente encontrada",
	'LANINS_141' => "Por favor, preenche o formulário abaixo com os teus dados MySQL. Se não souberes estas informações, contacta o teu provedor de alojamento. Podes passar o rato por cima de cada campo para obter informações adicionais.",
	'LANINS_142' => "IMPORTANTE: Renomeia o arquivo e107.htaccess para .htaccess",
	'LANINS_144' => "IMPORTANTE: Copia e cola o conteúdo do [b]e107.htaccess[/b] no teu arquivo [b].htaccess[/b]. Certifica-te de não sobrescrever quaisquer dados existentes que possam já lá estar.",
	'LANINS_145' => "e107 v2.x requer o PHP [x] para ser instalado. Contacta o teu provedor de alojamento ou lê a informação em [y] antes de continuar.",
	'LANINS_146' => "Aparência da área de administração",
	'LANINS_147' => "Administração",
];