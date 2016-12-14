<?php
class homeController extends controller{
	public function index(){
		$usuario = new usuario();
		$usuario->setName('Diego');

		$dados = array(
			'name'=> $usuario->getName()
		);

		$this->loadTemplate('home', $dados);
	}

	public function sobre(){
		$dados = array();
		$this->loadTemplate('sobre', $dados);
	}
}
