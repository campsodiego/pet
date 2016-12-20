<div class="col-md-4 col-lg-4">
	<h1>Avaliações</h1>
	<p><a href="<?php echo BASE_URL ?>/anuncios/cadastra_anuncio/" class="btn btn-primary btn-lg" role="button"> Cadastrar Anuncio </a></p>
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
				echo " <td>".$avaliacao['an.titulo']."</td>";
				echo " <td><img src='".BASE_URL."/assets/upload/".$avaliacao['an.imagem']."' class='imagemAnuncio' /></td>";
				echo " <td>".$avaliacao['us.usuario']."</td>";
				echo " <td>".$avaliacao['av.dtaAvaliacao']."</td>";
				echo " <td>".$avaliacao['av.vlrAvaliacao']."</td>";
				echo " <td>".$avaliacao['av.comentarioAva']."</td>";
				echo " <td><a href='".BASE_URL."/anuncios/deletar_anuncio/".$avaliacao['idanuncios']."' class='btn btn-primary' role='button'>Excluir </a></td>";
			echo "</tr>";
			} ?>
		</tbody>
	</table>
</div>