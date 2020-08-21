<?php 

function smis_plugin_registrando_conteudo($post){

	echo $post; //$post. e concatenar o conteudo pois assim o conteudo da funçao fica do post e nao fica no lugar do post
	require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/template/conteudo.php');

}

	add_filter('the_content','smis_plugin_registrando_conteudo');
?>