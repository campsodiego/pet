<?php 
	
	class testeController extends controller{
		
		public function index(){
			echo "Esse é um teste";
		}

		public function foi($url, $teste){
			echo "Foi mesmo assim?!".$url." ".$teste;
		}
	}
?>