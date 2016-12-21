<div class="col-md-4 col-lg-4">
	<h1>Avaliações</h1>
	<div>
		<form action="<?php BASE_URL; ?>/pet/avaliacao/salva_avaliacao" method="post" enctype="multipart/form-data">
		<?php  foreach ($lista_avaliacao as $avaliacao) {
		echo "<input type='hidden' name='idanuncio'  value='".$avaliacao['anuncios_idanuncios']."'/>";
		echo "<input type='hidden' name='idusuario'  value='".$avaliacao['usuario_idusuario']."'/>";
		} ?>

			<div class="input-group">
				<label>Valor</label>
				<section class="rating">
					<label class="checkbox-inline"><input type="checkbox" value="1" name="vlrAvaliacao"><span class="glyphicon glyphicon-star"></span></label>
					<label class="checkbox-inline"><input type="checkbox" value="2" name="vlrAvaliacao"><span class="glyphicon glyphicon-star"></span></label>
					<label class="checkbox-inline"><input type="checkbox" value="3" name="vlrAvaliacao"><span class="glyphicon glyphicon-star"></span></label>
					<label class="checkbox-inline"><input type="checkbox" value="4" name="vlrAvaliacao"><span class="glyphicon glyphicon-star"></span></label>
					<label class="checkbox-inline"><input type="checkbox" value="5" name="vlrAvaliacao"><span class="glyphicon glyphicon-star"></span></label>
				</section>
			</div>
			<div class="input-group">
				<label>Comentário</label>
				<textarea class="form-control" rows="4" cols="21" name="comentarioAva"></textarea>
			</div>
			<div class="input-group" id="envia">	
				<input class="btn btn-success" type="submit"/>
			</div>
		</form>
	</div>
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>titulo</th>
					<th>Imagem</th>
					<th>Usuário</th>
					<th>Data Avaliação</th>
					<th>Valor</th>
					<th>Comentário</th>
				</tr>
			</thead>
			<tbody>
				<?php  foreach ($lista_avaliacao as $avaliacao) {
				echo "<tr>";
					echo " <td>".$avaliacao['tituloAnuncio']."</td>";
					echo " <td><img src='".BASE_URL."/assets/upload/".$avaliacao['imagem']."' class='imagemAnuncio' /></td>";
					echo " <td>".$avaliacao['nome']."</td>";
					echo " <td>".$avaliacao['dtaAvaliacao']."</td>";
					echo " <td>".$avaliacao['vlrAvaliacao']."</td>";
					echo " <td>".$avaliacao['comentarioAva']."</td>";
					echo " <td><a href='".BASE_URL."/avaliacao/deletar_avaliacao/".$avaliacao['idavaliacao']."' class='btn btn-primary' role='button'>Excluir </a></td>";
				echo "</tr>";
				} ?>
			</tbody>
		</table>
	</div>
</div>