<?php  
	
	class avaliacaoController extends controller{
		
		public function lista_avaliacao(){
			$this->verifica_login();
			$avaliacao = new avaliacao();
			$avaliacao['lista_avaliacao'] = $avaliacao->getAvaliacao();
			$this->loadTemplate('listaAvaliacao',$dados);
		}

		public function cadastra_avaliacao()
		{
			$this->loadTemplate('cadastra_avaliacao');
		}

		public function salva_Avaliacao()
		{
			$dados=$_POST;
			$avaliacao = new avaliacao();
			$avaliacao->salvaAvaliacao($dados);
			header('Location:'.BASE_URL.'/avaliacao/lista_avaliacao/');
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