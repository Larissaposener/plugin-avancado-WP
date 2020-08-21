<?php  

/* 
	Plugin Name:Social Posener Icons
	Author:Larissa Posener
	Description: um plugin que vai exibir ícones de redes sociais no footer de arquivos.
	Version:1.0
	Author URI:https://google.com
*/
	// medidas de seguraças ABDSPAH É O CAMINHO ABSOLUTO
if(!defined('ABSPATH')) {
	exit("Acesso Negado");
}

// definiçao de constante do doretório absoluto

define('SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN',plugin_dir_path(__FILE__));

//INCLUDES

require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icon-son-conteudo.php');
require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icon-son-opcoes.php');



?>