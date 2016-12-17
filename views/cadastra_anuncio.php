<form action="<?php BASE_URL; ?>/pet/anuncios/salva_anuncio" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<div>
		<label>Anuncio</label>
		<input type="text" name="titulo" />
	</div>
	<div>
		<label>Descrição Reduzida</label>
		<textarea name="descricaoReduzida"></textarea>
	</div>
	<div>
		<label>Valor</label>
		<input type="number" name="vlrAnuncio">
	</div>
	<div>
		<label>Descrição</label>
		<textarea name="descricaoDetalhada"></textarea>
	</div>
	<div>
		<label>Imagem</label>
		<input type="file" name="imagem">
	</div>
	<div>	
		<input type="submit"/>
	</div>
</form>