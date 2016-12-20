<form action="<?php BASE_URL; ?>/pet/banner/salva_banner" method="post" enctype="multipart/form-data">
	<div class="input-group">
		<label>Link</label>
		<input type="text" class="form-control" name="link" />
	</div>
	<div class="input-group">
		<label>Imagem</label>
		<input type="file" class="form-control" name="imagem" />
	</div>
	<div class="input-group" id="envia">	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>