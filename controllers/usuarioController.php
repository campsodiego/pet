<?php 
class usuarioController extends controller{
	
	public function lista_usuario(){
		$this->verifica_login();
		$usuario = new usuario();
		$dados['lista_usuario'] = $usuario->getUsuarios();
		$this->loadTemplate('lista_usuario',$dados);
	}

	public function cadastra_usuario()
	{
		$this->loadTemplate('cadastra_usuario');
	}

	public function salva_usuario()
	{
		$dados=$_POST;
		$usuario = new usuario();
		$usuario->salvaUsuario($dados);
		header('Location:'.BASE_URL.'/login/login/');
		exit();
	}

	public function editar_usuario($id){
		$usuario = new usuario();
		$dados['usuario'] = $usuario->getUnicoUsuario($id);
		$this->loadTemplate('editar_usuario',$dados);
	}

	public function deletar_usuario($id){
		$usuario = new usuario();
		$dados['usuario'] = $usuario->deletar_usuario($id);
		header('Location:'.BASE_URL.'/usuario/lista_usuario/');
		exit();
	}

	public function salva_edita_usuario()
	{
		$dados=$_POST;
		if(!empty($_FILES['imagem']['name'])) {

			$nomeImagem=date("Y.m.d-H.i.s").strtolower($_FILES['imagem']['name']);
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/pet/assets/upload/';
			$uploadfile = $uploaddir.$nomeImagem;	
			move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);
			$dados['imagem']=$nomeImagem;
		}
		else
		{
			$dados['imagem']=$dados['imagemAnterior'];	
		}
			
		$usuario = new usuario();
		$usuario->salvaEditaUsuario($dados);
		header('Location:'.BASE_URL.'/usuario/lista_usuario/');
		exit();
	}

	public function login(){
		$this->loadTemplate('login',$dados);
	}

	public function efetuarLogin(){
		$dados=$_POST;
		$usuario = new usuario();
		$verificaLogin=$usuario->getUsuarios($dados['email'],$dados['senha']);
		if($verificaLogin==true)
		{
			$_SESSION['logado']=true;
			$_SESSION['email']=$dados['email'];
			// talvez fazer um outro sql no model e chamar aqui para pegar o nome
			echo"<script language='javascript' type='text/javascript'>alert('logou');window.location.href='".BASE_URL."';</script>";
			header('Location:'.BASE_URL);
			exit();
		}
		else
		{
			// Lembrar de redirecionar o usuario com a mensagem de erro
		}
	}

	public function logoff()
	{
		session_destroy();
	}
}
?>