<div class="col-md-4 col-lg-4">
	<h1>Anuncios</h1>
	<p><a href="<?php echo BASE_URL ?>/usuario/cadastra_usuario/"> Cadastrar Usuario </a></p>
	<table class="table table-striped">
	<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php  foreach ($lista_usuario as $usuario) {
			echo "<tr>";
					echo " <td>".$usuario['nome']."</td>";
					echo " <td>".$usuario['email']."</td>";
					echo " <td><a href='".BASE_URL."/usuario/edita_usuario/".$usuario['idusuario']."'>Editar </a></td>";
					echo " <td><a href='".BASE_URL."/usuario/deletar_usuario/".$usuario['idusuario']."'>Excluir </a></td>";
			echo "</tr>";
			} ?>
		</tbody>
	</table>
</div>