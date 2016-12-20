<div class="col-md-4 col-lg-4">
	<h1>Anuncios</h1>
	<p><a href="<?php echo BASE_URL ?>/anuncios/cadastra_anuncio/"> Cadastrar Anuncio </a></p>
	<table class="table table-striped">
	<thead>
			<tr>
				<th>titulo</th>
				<th>Descrição Reduzida</th>
				<th>Valor</th>
				<th>Imagem</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php  foreach ($lista_anuncio as $anuncio) {
			echo "<tr>";
					echo " <td>".$anuncio['tituloAnuncio']."</td>";
					echo " <td>".$anuncio['descricaoreduzida']."</td>";
					echo " <td>".$anuncio['vlrAnuncio']."</td>";
					echo " <td><img src='".BASE_URL."/assets/upload/".$anuncio['imagem']."' class='imagemBannerAdm' /></td>";
					echo " <td><a href='".BASE_URL."/anuncios/edita_anuncio/".$anuncio['idanuncios']."'>Editar </a></td>";
					echo " <td><a href='".BASE_URL."/anuncios/deletar_anuncio/".$anuncio['idanuncios']."'>Excluir </a></td>";
			echo "</tr>";
			} ?>
		</tbody>
	</table>
</div>

