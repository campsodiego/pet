<form action="<?php BASE_URL; ?>/pet/avaliacao/salva_avaliacao" method="post" enctype="multipart/form-data">
<?php 
	$anuncioid = $_GET['anuncios_idanuncios'];
	$usuarioid = $_GET['usuario_idusuario'];
?>
<input type="hidden" name="anuncios_idanuncios"  value="<?php echo $anuncioid; ?>" />
<input type="hidden" name="usuario_idusuario"  value="<?php echo $usuarioid; ?>" />
	<div class="input-group">
		<label>Valor</label>
		<input type="number" class="form-control" name="vlrAvaliacao" />
	</div>
	<div class="input-group">
		<label>Comentário</label>
		<textarea class="form-control" rows="4" cols="21" name="comentarioAva"></textarea>
	</div>
	<div class="input-group" id="envia">	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>