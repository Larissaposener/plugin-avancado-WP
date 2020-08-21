<?php 
$smis_opcoes = get_option('smis_op_icons');


 ?>

<div class='wrap'>
	<h1>Opçoes Plugins Sociais Media Icons - Larissa Posener</h1>
	<hr>
<form action="options.php" method="post">
	<?php settings_fields('smis_op'); ?>
	<label>Facebook: </label><br>
	<input type='url' name="smis_op_icons[fb_perfil]" id="smis_op_icons[fb_perfil]" value="<?php echo $smis_opcoes['fb_perfil']; ?>"><br>
	<label>Twitter: </label><br>
	<input type='url' name="smis_op_icons[tw_perfil]" id="smis_op_icons[tw_perfil]" value="<?php echo $smis_opcoes['tw_perfil']; ?>"><br>

	<label>Youtube: </label><br>
	<input type='url' name="smis_op_icons[yt_perfil]" id="smis_op_icons[yt_perfil]" value="<?php echo $smis_opcoes['yt_perfil']; ?>"><br>
	

	<input type="submit" name="submit" value="Salvar">
</form>	
</div>

