<style>
	.smis-conteudo .smis-icones img{
		width: 40px;
		height: auto;
		padding: 8px;
	}
</style>

<div class="smis-conteudo">
	Me enconte nas redes sociais
	<hr>
	<?php $smis_opcoes = get_option('smis_op_icons'); ?>
		<div class="smis-icones">
			<a href="<?php echo $smis_opcoes['fb_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/facebook.jpg'?>"></a>
			<a href="<?php echo $smis_opcoes['tw_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/twitter.png'?>"></a>
			<a href="<?php echo $smis_opcoes['yt_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/youtube.png'?>"></a>
		</div>
	
</div>