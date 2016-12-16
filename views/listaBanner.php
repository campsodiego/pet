<div class="col-md-4 col-lg-4">
	<h1>Banner</h1>
	<p><a href="<?php echo BASE_URL ?>/banner/cadastra_banner/"> Cadastrar Banner </a> </p>
	<?php foreach ($lista_banner as $banner) {
			echo '<ul class="ulListaBanner">';
			echo " <li> <img src='".BASE_URL."/assets/upload/".$banner['imagem']."'  class='imagemBannerAdm' /> </li>"	;
			echo " <li>  <a href='".BASE_URL."/banner/editar_banner/".$banner['idbanner']."'>Editar </a> </li>"	;
			echo " <li>  <a href='".BASE_URL."/banner/deletar_banner/".$banner['idbanner']."'>Excluir </a> </li>"	;
			echo '</ul>';
	} ?>
</div>