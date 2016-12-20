<form action="<?php BASE_URL; ?>/pet/usuario/salva_usuario" method="post" accept-charset="utf-8">
	<div class="input-group">
		<label>Usuario</label>
		<input type="text" class="form-control" name="nome" />
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" />
	</div>
	<div class="input-group">
		<label>Senha</label>
		<input type="password" class="form-control" name="senha" />
	</div>
	<div>	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>