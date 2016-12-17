<?php
class homeController extends controller{

	public function index(){

		$anuncios = new anuncios();
		$dados['anuncios'] = $anuncios->getAnuncios();

		$banner = new banner();
		$dados['banners'] = $banner->getBanners();

		$this->loadTemplate('home', $dados);

	}

	public function sobre(){
		$dados = array();
		$this->loadTemplate('sobre', $dados);
	}
}
