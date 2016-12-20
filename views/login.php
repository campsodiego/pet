<form action="<?php BASE_URL; ?>/pet/usuario/efetuarLogin" method="post" accept-charset="utf-8">
	<div class="input-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" />
	</div>
	<div class="input-group">
		<label>Senha</label>
		<input type="password" class="form-control" name="senha" />
	</div>
	<div id="envia">	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>