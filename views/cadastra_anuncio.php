<form action="<?php BASE_URL; ?>/pet/anuncios/salva_anuncio" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<div class="input-group">
		<label>Anuncio</label>
		<input type="text" class="form-control" name="titulo" />
	</div>
	<div class="input-group">
		<label>Descrição Reduzida</label>
		<textarea class="form-control" rows="4" cols="11" name="descricaoReduzida"></textarea>
	</div>
	<div class="input-group">
		<label>Valor</label>
		<input type="number" class="form-control" name="vlrAnuncio">
	</div>
	<div class="input-group">
		<label>Descrição</label>
		<textarea class="form-control" rows="4" cols="21" name="descricaoDetalhada"></textarea>
	</div>
	<div class="input-group">
		<label>Imagem</label>
		<input type="file" class="form-control" name="imagem">
	</div>
	<div class="submit">	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>