<div class="col-md-4 col-lg-4 lg-custom">
	<h1>Banner</h1>
	<p><a href="<?php echo BASE_URL ?>/banner/cadastra_banner/" class="btn btn-primary btn-lg" role="button"> Cadastrar Banner </a></p>
	<?php foreach ($lista_banner as $banner) {
			echo '<ul class="ulListaBanner">';
			echo " <li><img src='".BASE_URL."/assets/upload/".$banner['imagem']."'  class='imagemBannerAdm' /></li>"	;
			echo " <li><a href='".BASE_URL."/banner/editar_banner/".$banner['idbanner']."' class='btn btn-primary' role='button'> Editar </a></li>"	;
			echo " <li><a href='".BASE_URL."/banner/deletar_banner/".$banner['idbanner']."' class='btn btn-primary' role='button'> Excluir </a></li>"	;
			echo '</ul>';
	} ?>
</div>