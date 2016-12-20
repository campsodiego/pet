<?php  
	
	class avaliacaoController extends controller{
		
		public function lista_avaliacao(){
			$this->verifica_login();
			$avaliacao = new avaliacao();
			$avaliacao['lista_avaliacao'] = $avaliacao->getAvaliacao();
			$this->loadTemplate('listaAvaliacao',$dados);
		}
	}
?>