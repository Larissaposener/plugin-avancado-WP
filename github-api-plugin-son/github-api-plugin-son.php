<?php  

/* 
	Plugin Name:GitHub api Plugin
	Author:Larissa Posener
	Description: um plugin que lista repositorio de um usuario em um widget
	Version:1.0

*/
	//seguraça

	if(!defined('ABSPATH')){
		exit("acesso negado");
	}

    //nao vou fazer um require para definir pois vai ser chamado somente uma vez
	require_once(plugin_dir_path(__FILE__).'GithubWidget.php');

	//registrar widget

	function gaps_registrar_widget(){
		register_widget('GithubWidget');
	}
	add_action('widgets_init','gaps_registrar_widget');


?>