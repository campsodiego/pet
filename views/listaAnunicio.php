<div class="col-md-4 col-lg-4">
	<h1>Anuncios</h1>
	<p><a href="<?php echo BASE_URL ?>/anuncio/cadastra_anuncio/"> Cadastrar Anuncio </a> </p>
	<?php foreach ($anuncios as $anuncio) {
			echo '<ul class="ulListaBanner">';
			echo " <li> $anuncio['tituloAnuncio'] </li>"	;
			echo " <li>  <a href='".BASE_URL."/banner/editar_banner/".$banner['idbanner']."'>Editar </a> </li>"	;
			echo " <li>  <a href='".BASE_URL."/banner/deletar_banner/".$banner['idbanner']."'>Excluir </a> </li>"	;
			echo '</ul>';
	} ?>
</div>