<form action="<?php BASE_URL; ?>/pet/anuncios/salva_edita_anuncio" method="post" enctype="multipart/form-data">
<input type="hidden" name="idanuncios"  value="<?php echo $anuncios[0]['idanuncios']; ?>" />
<input type="hidden" name="imagemAnterior"  value="<?php echo $anuncios[0]['imagem']; ?>" />
	
	<div class="input-group">
		<label>Anuncio</label>
		<input type="text" class="form-control" name="titulo" value="<?php echo $anuncios[0]['tituloAnuncio']; ?>" />
	</div>
	<div class="input-group">
		<label>Descrição Reduzida</label>
		<textarea class="form-control" rows="4" cols="11" name="descricaoReduzida" value="<?php echo $anuncios[0]['descricaoreduzida']; ?>"></textarea>
	</div>
	<div class="input-group">
		<label>Valor</label>
		<input type="number" class="form-control" name="vlrAnuncio" value="<?php echo $anuncios[0]['vlrAnuncio']; ?>">
	</div>
	<div class="input-group">
		<label>Descrição</label>
		<textarea class="form-control" rows="4" cols="21" name="descricaoDetalhada" value="<?php echo $anuncios[0]['descricaoAnuncio']; ?>"></textarea>
	</div>
	<div class="input-group">
		<label>Imagem</label>
		<input type="file" class="form-control" name="imagem">
	</div>
	<div id="envia">	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>