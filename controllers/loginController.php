<?php 
	class loginController extends controller{
		public function login(){
			$this->loadTemplate('login');
		}

		public function efetuarLogin(){
			$dados=$_POST;
			$usuario = new $usuario();
			$verificaLogin=$usuario->getUsuarios($dados['email'],$dados['senha']);
			if($verificaLogin==true)
			{
				$_SESSION['logado']=true;
				$_SESSION['email']=$dados['email'];
				// talvez fazer um outro sql no model e chamar aqui para pegar o nome
				echo "está funcionando";
				header('Location:'.BASE_URL);
				exit();
			}
			else
			{
				// Lembrar de redirecionar o usuario com a mensagem de erro
				echo "não está funcionando";
			}
		}

		public function logoff()
		{
			session_destroy();
		}
	}
?>