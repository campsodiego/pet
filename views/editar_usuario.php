<form action="<?php BASE_URL; ?>/pet/usuario/salva_edita_usuario" method="post">
<input type="hidden" name="idusuario"  value="<?php echo $usuario[0]['idusuario']; ?>" />
<input type="hidden" name="imagemAnterior"  value="<?php echo $usuario[0]['imagem']; ?>" />
	<div>
		<label>Nome</label>
		<input type="text" name="nome"  value="<?php echo $usuario[0]['nome']; ?>" />
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $usuario[0]['email']; ?>" />
	</div>
	<div class="input-group">
		<label>Senha</label>
		<input type="password" class="form-control" name="senha" />
	</div>
	<div>	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>