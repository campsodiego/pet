<?php  
	
	class avaliacaoController extends controller{
		
		public function lista_avaliacao($id){
			$this->verifica_login();
			$avaliacao = new avaliacao();
			$dados['lista_avaliacao'] = $avaliacao->getAvaliacao($id);
			$this->loadTemplate('lista_avaliacao',$dados);
		}

		public function cadastra_avaliacao($anuncio, $usuario)
		{
			$dados = array();
			$dados['idanuncio'] = $anuncio;
			$dados['idusuario'] = $usuario;
			var_dump($dados);
			exit();
			$this->loadTemplate('cadastra_avaliacao', $dados);
		}

		public function salva_avaliacao()
		{
			$dados=$_POST;
			$avaliacao = new avaliacao();
			$avaliacao->salvaAvaliacao($dados);
			header('Location:'.BASE_URL.'/anuncios/lista_anuncio/');
			exit();
		}

		public function deletar_avaliacao($id){
			$avaliacao = new avaliacao();
			$dados['avaliacao'] = $avaliacao->deletar_banner($id);
			header('Location:'.BASE_URL.'/avaliacao/lista_avaliacao/');
			exit();
		}
	}
?>