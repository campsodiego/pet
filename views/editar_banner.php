
<form action="<?php BASE_URL; ?>/pet/banner/salva_edita_banner" method="post" enctype="multipart/form-data">
<input type="hidden" name="idbanner"  value="<?php echo $banner[0]['idbanner']; ?>" />
<input type="hidden" name="imagemAnterior"  value="<?php echo $banner[0]['imagem']; ?>" />
	<div>

		<label>Link</label>

		<input type="text" name="link"  value="<?php echo $banner[0]['link']; ?>" />
	</div>
	<div>
		<label>Imagem</label>
		<input type="file" name="imagem" />
	</div>
	<div class="submit">	
		<input type="submit"/>
	</div>
</form>