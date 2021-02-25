<?php	
/** O nome do banco de dados*/	
define('DB_NAME', 'dbcelke');	

/** Usuário do banco de dados MySQL */
	define('DB_USER', 'root');	

/** Senha do banco de dados MySQL */	
define('DB_PASSWORD', '');	

/** nome do host do MySQL */
	define('DB_HOST', 'localhost');	

/** caminho absoluto para a pasta do sistema **/
	if ( !defined('ABSPATH') )		define('ABSPATH', dirname(__FILE__) . '/');	

		/** caminho no server para o sistema **/	
		if ( !defined('BASEURL') )		define('BASEURL', '/Projeto_CRUD/');	

			/** caminhos dos templates de header e footer **/	
			if ( !defined('DBAPI') )		define('DBAPI', ABSPATH . 'inc/database.php');
			define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');	
			define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');