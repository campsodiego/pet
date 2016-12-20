
<form action="<?php BASE_URL; ?>/pet/banner/salva_edita_banner" method="post" enctype="multipart/form-data">
<input type="hidden" name="idbanner"  value="<?php echo $banner[0]['idbanner']; ?>" />
<input type="hidden" name="imagemAnterior"  value="<?php echo $banner[0]['imagem']; ?>" />
	<div class="input-group">
		<label>Link</label>
		<input type="text" class="form-control" name="link"  value="<?php echo $banner[0]['link']; ?>" />
	</div>
	<div class="input-group">
		<label>Imagem</label>
		<input type="file" class="form-control" name="imagem" />
	</div>
	<div id="envia">	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>